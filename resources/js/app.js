import './bootstrap';
import Alpine from 'alpinejs';

import intersect from '@alpinejs/intersect'

Alpine.plugin(intersect)

window.Alpine = Alpine;

window.Alpine.start();


// Check for IntersectionObserver support
if ('IntersectionObserver' in window) {
    document.addEventListener("DOMContentLoaded", function() {

        function handleIntersection(entries) {
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
                        // threshold - load src from data-src
                        entry.target.style.backgroundImage = "url('" + entry.target.dataset.bgimg + "')";
                    }

                    // Job done for this item - no need to watch it!
                    observer.unobserve(entry.target);
                }
            });
        }

        const headers = document.querySelectorAll('.lazy');
        const observer = new IntersectionObserver(
            handleIntersection,
            { rootMargin: "100px" }
        );
        headers.forEach(header => observer.observe(header));
    });
} else {
    // No interaction support? Load all background images automatically
    const headers = document.querySelectorAll('.bg-img-lazy');
    headers.forEach(header => {
        header.style.backgroundImage = "url('"+header.dataset.bgimage+"')";
    });
}
