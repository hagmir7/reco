import './bootstrap';

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

Alpine.plugin(intersect)
window.Alpine = Alpine;
Alpine.start();

if (!window.unsupportedLazyLoading) {
    window.unsupportedLazyLoading = function () {
        // No interaction support? Load all background images automatically
        const headers = document.querySelectorAll('.lazy');
        headers.forEach(header => {
            if(header.hasAttribute('data-bgimg'))
            {
                header.style.backgroundImage = "url('"+header.dataset.bgimage+"')";
            }

            if (header.nodeName.toLocaleLowerCase() === 'img' && header.hasAttribute('data-src'))
            {
                header.src = header.dataset.src;
                header.classList.remove('lazy');
            }
        });
    };
};

if (!window.loadLazyImages){
    window.loadLazyImages = function () {
        let headers = document.querySelectorAll('.lazy');
        let observer = new IntersectionObserver(
            function (entries) {
                entries.map((entry) => {
                    if (entry.isIntersecting) {

                        // Item has crossed our observation
                        // threshold - load src from data-src
                        if (entry.target.nodeName.toLocaleLowerCase() === 'img' && entry.target.hasAttribute('data-src'))
                        {
                            entry.target.src = entry.target.dataset.src;
                            entry.target.classList.remove('lazy');
                        }

                        if(entry.target.hasAttribute('data-bgimg'))
                        {
                            // Item has crossed our observation
                            // threshold - load url from data-bgimg
                            entry.target.style.backgroundImage = "url('" + entry.target.dataset.bgimg + "')";
                        }

                        // Job done for this item - no need to watch it!
                        observer.unobserve(entry.target);
                    }
                });
            },
            { rootMargin: "100px" }
        );

        headers.forEach(header => observer.observe(header));
    }

}

// Check for IntersectionObserver support
if ('IntersectionObserver' in window) {
    document.addEventListener("DOMContentLoaded", function() {
        loadLazyImages();
    });
} else {
    unsupportedLazyLoading();
}
