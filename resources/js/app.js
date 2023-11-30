import './bootstrap';

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles


Alpine.plugin(intersect)
window.Alpine = Alpine;
Alpine.start();

AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 200, // offset (in px) from the original trigger point
    delay: 400, // values from 0 to 3000, with step 50ms
    duration: 800, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});


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
            { rootMargin: "300px" }
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
