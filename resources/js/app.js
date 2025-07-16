// Import Flowbite components
import 'flowbite';

// Import Swiper & modules
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

// Bootstrap or custom setup
import './bootstrap';

import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

import SplitType from 'split-type';

// Import Flaticon UIcons
import '@flaticon/flaticon-uicons/css/all/all.css';



document.addEventListener('DOMContentLoaded', function () {
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#gallery',
        children: 'a',
        pswpModule: () => import('photoswipe')
    });
    lightbox.init();
});







// Alpine.js
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// GSAP & ScrollTrigger
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
window.gsap = gsap;

// Smooth scroll to anchors with offset
window.addEventListener('DOMContentLoaded', () => {
    const headerOffset = 100;
    document.querySelectorAll("a[href^='#']").forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            const href = this.getAttribute("href");
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                gsap.to(window, {
                    duration: 1.2,
                    scrollTo: { y: target, offsetY: headerOffset },
                    ease: "power2.inOut"
                });
            }
        });
    });

    // Hero section animation
    const hero = document.querySelector('#pageHero');
    if (hero) {
        gsap.from('.hero-bg', { scale: 1.2, opacity: 0, duration: 1.6, ease: 'power2.out' });
        gsap.from('.hero-title', { y: 80, opacity: 0, duration: 1.2, ease: 'power3.out', delay: 0.2 });
        gsap.from('.hero-subtitle', { y: 40, opacity: 0, duration: 1, ease: 'power2.out', delay: 0.4 });

        gsap.to('.hero-bg', {
            scale: 1.3,
            yPercent: -10,
            scrollTrigger: { trigger: '#pageHero', start: 'top top', end: 'bottom top', scrub: true }
        });
        gsap.to('.hero-title', {
            yPercent: -10,
            scrollTrigger: { trigger: '#pageHero', start: 'top top', end: 'bottom top', scrub: true }
        });
        gsap.to('.hero-subtitle', {
            yPercent: -15,
            scrollTrigger: { trigger: '#pageHero', start: 'top top', end: 'bottom top', scrub: true }
        });
    }

    // Fade wrapper animations
    document.querySelectorAll(".fade-wrapper").forEach((section) => {
        const fadeItems = section.querySelectorAll(".fade-top");
        fadeItems.forEach((el, index) => {
            const delay = index * 0.1;
            gsap.set(el, { opacity: 0, y: 70 });
            ScrollTrigger.create({
                trigger: el,
                start: "top 95%",
                toggleActions: "play none none reverse",
                onEnter: () => gsap.to(el, { opacity: 1, y: 0, duration: 0.6, delay }),
                onLeaveBack: () => gsap.to(el, { opacity: 0, y: 70, duration: 0.5 })
            });
        });
    });

    // Scrollable horizontal gallery animation
// Scrollable horizontal gallery animation (scroll down = right to left)
const scrollGallery = document.querySelector('#scrollGallery');
if (scrollGallery) {
    const totalScroll = scrollGallery.scrollWidth - window.innerWidth;

    gsap.to(scrollGallery, {
        x: -totalScroll,
        ease: "none",
        scrollTrigger: {
            trigger: scrollGallery,
            start: "top bottom",           // Starts when section enters viewport
            end: "+=2000",                 // Make scroll area long for smoother effect
            scrub: 1,                      // 1 second smoothing (inertia feel)
            markers: false
        }
    });
}


});


    document.addEventListener('DOMContentLoaded', () => {
        const video = document.getElementById('intro-video');
        const titleSplit = new SplitType('#intro-title', { types: 'chars' });

        // Animate video zoom-in + fade-in
        gsap.to(video, {
            scale: 1,
            opacity: 1,
            duration: 1.8,
            ease: 'power2.out'
        });

        // Animate overlays
        gsap.from('.overlay-dark', {
            opacity: 0,
            duration: 1.5,
            ease: 'power1.out'
        });

        gsap.from('.overlay-bottom', {
            opacity: 0,
            y: 40,
            duration: 1.2,
            delay: 0.5,
            ease: 'power2.out'
        });

        gsap.from('.overlay-top', {
            opacity: 0,
            y: -30,
            duration: 1.2,
            delay: 0.5,
            ease: 'power2.out'
        });

        // Title typing effect
        gsap.to('#intro-title', { opacity: 1, duration: 0.1 });
        gsap.from(titleSplit.chars, {
            opacity: 0,
            y: 60,
            stagger: 0.05,
            duration: 1.2,
            ease: 'power4.out',
            delay: 0.3
        });

        // Subtitle and tagline fade-in
        gsap.to('#intro-subtitle', {
            opacity: 1,
            y: -10,
            delay: 1.5,
            duration: 1,
            ease: 'power2.out'
        });

        gsap.to('#intro-tagline', {
            opacity: 1,
            y: -10,
            delay: 1.9,
            duration: 1,
            ease: 'power2.out'
        });
    });




// About Us Heading animation
gsap.fromTo(".about-home-heading .about-home-line", {
    opacity: 0,
    y: 60
}, {
    scrollTrigger: {
        trigger: ".about-home-heading",
        start: "top 80%",
        toggleActions: "play none none reverse"
    },
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power3.out",
    stagger: 0.2
});

// About Logo block animation
gsap.fromTo(".about-home-logo", {
    opacity: 0,
    x: -80
}, {
    scrollTrigger: {
        trigger: ".about-home-logo",
        start: "top 90%",
        toggleActions: "play none none reverse"
    },
    opacity: 1,
    x: 0,
    duration: 1,
    ease: "power3.out"
});

// Pin logo block on scroll
gsap.to(".about-home-logo", {
    scrollTrigger: {
        trigger: ".about-home-logo",
        start: "top-=100 top",
        end: "+=400",
        pin: true,
        pinSpacing: true,
        scrub: true,
        markers: false
    },
    y: 0,
    // opacity: 1,
    // ease: "none"
});





// Project Heading animation
window.addEventListener("load", () => {
    // Animate each project block inside #projects-home
    gsap.utils.toArray("#projects-home .project-block").forEach((block) => {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: block,
                start: "top 85%",
                toggleActions: "play none none reverse"
            }
        });

        tl.from(block.querySelector(".project-number-outline"), {
            opacity: 0,
            y: 40,
            duration: 0.8,
            ease: "power3.out"
        }).from(block.querySelector(".project-title"), {
            opacity: 0,
            y: 30,
            duration: 0.8,
            ease: "power3.out"
        }, "+=0.2").from(block.querySelector(".project-desc"), {
            opacity: 0,
            y: 20,
            duration: 0.8,
            ease: "power3.out"
        }, "+=0.2");
    });

    // Smooth parallax scroll effect for project images
    gsap.utils.toArray("#projects-home .project-image").forEach((image) => {
        gsap.fromTo(image,
            { y: -40 },
            {
                y: 40,
                ease: "power1.out",
                scrollTrigger: {
                    trigger: image,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 0.5, // smooth scrub effect
                }
            }
        );
    });
});


















window.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".project-hover-zone").forEach((zone) => {
        const btn = zone.querySelector(".view-project-btn");

        if (!btn) return;

        btn.style.transform = "translate(-50%, -50%)";
        btn.style.top = "50%";
        btn.style.left = "50%";

        zone.addEventListener("mousemove", (e) => {
            const rect = zone.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            gsap.to(btn, {
                x: x - rect.width / 2,
                y: y - rect.height / 2,
                duration: 0.4,
                ease: "power3.out"
            });
        });

        zone.addEventListener("mouseleave", () => {
            gsap.to(btn, {
                x: 0,
                y: 0,
                duration: 0.4,
                ease: "power3.out"
            });
        });
    });
});






gsap.utils.toArray(".expertise-grid a").forEach((el) => {
    gsap.from(el, {
        opacity: 0,
        y: 50,
        duration: 0.8,
        ease: "power3.out",
        scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none reverse"
        }
    });
});








Swiper.use([Navigation, Pagination, Autoplay]);

document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper('.testimonialSwiper', {
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet custom-bullet',
            bulletActiveClass: 'swiper-pagination-bullet-active',
        }
    });

    swiper.on('slideChangeTransitionStart', () => {
        const activeSlide = document.querySelector('.testimonialSwiper .swiper-slide-active');
        const text = activeSlide.querySelector('p:nth-child(2)');
        if (text) {
            gsap.fromTo(text, { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" });
        }
    });
});



// Animate heading step lines
const lines = document.querySelectorAll(".gsap-line");
gsap.set(lines, { opacity: 0, x: -30 });
gsap.to(lines, {
    opacity: 1,
    x: 0,
    duration: 1,
    ease: "power3.out",
    stagger: 0.25,
    scrollTrigger: {
        trigger: ".gsap-heading",
        start: "top 80%",
        toggleActions: "play reverse play reverse",
    }
});

// Animate left content on scroll with subtle floating movement
const leftScroll = document.querySelector(".animate-left-scroll");
gsap.fromTo(leftScroll,
    { x: -100, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        duration: 1.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: leftScroll,
            start: "top 80%",
            toggleActions: "play reverse play reverse",
            scrub: true
        }
    });

// Animate right content on scroll with subtle floating movement
const rightScroll = document.querySelector(".animate-right-scroll");
gsap.fromTo(rightScroll,
    { x: 100, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        duration: 1.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: rightScroll,
            start: "top 80%",
            toggleActions: "play reverse play reverse",
            scrub: true
        }
    });

// Animate individual fade-in elements inside left section
const fadeElements = document.querySelectorAll(".gsap-fade-in");
gsap.set(fadeElements, { opacity: 0, y: 20 });
gsap.to(fadeElements, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out",
    stagger: 0.15,
    scrollTrigger: {
        trigger: leftScroll,
        start: "top 85%",
        toggleActions: "play reverse play reverse"
    }
});

// Parallax mouse movement effect on image
const image = document.querySelector(".motion-image");
document.querySelector(".perspective").addEventListener("mousemove", (e) => {
    const { offsetX, offsetY, target } = e;
    const { offsetWidth: w, offsetHeight: h } = target;
    const x = (offsetX / w) - 0.5;
    const y = (offsetY / h) - 0.5;

    gsap.to(image, {
        x: x * 20,
        y: y * 20,
        rotationY: x * 10,
        rotationX: -y * 10,
        duration: 0.4,
        ease: "power2.out"
    });
});

document.querySelector(".perspective").addEventListener("mouseleave", () => {
    gsap.to(image, {
        x: 0,
        y: 0,
        rotationX: 0,
        rotationY: 0,
        duration: 0.5,
        ease: "power3.out"
    });
});






const teamCards = document.querySelectorAll(".team-card");
gsap.set(teamCards, { opacity: 0, y: 50 });
gsap.to(teamCards, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power2.out",
    stagger: 0.2,
    scrollTrigger: {
        trigger: "#team-home",
        start: "top 80%",
        toggleActions: "play reverse play reverse"
    }
});


gsap.to(".team-title", {
    fontSize: "2.25rem", // md:text-4xl
    duration: 1,
    ease: "power2.out",
    scrollTrigger: {
        trigger: ".team-title",
        start: "top center",
        end: "bottom top",
        scrub: true
    }
});




document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".tab-content");
    const wrapper = document.getElementById("tab-wrapper");

    // Function to switch tabs
    const switchTab = (nextId) => {
        const current = document.querySelector(".tab-content:not(.hidden)");
        const next = document.getElementById(nextId);

        if (current && current !== next) {
            // Animate current out
            gsap.to(current, {
                opacity: 0,
                y: 20,
                duration: 0.4,
                onComplete: () => {
                    current.classList.add("hidden");
                    current.classList.remove("active");
                    next.classList.remove("hidden");

                    // Animate next in
                    gsap.fromTo(next, { opacity: 0, y: 20 }, {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        onStart: () => next.classList.add("active"),
                        onComplete: () => {
                            // Animate height change smoothly
                            gsap.to(wrapper, {
                                height: next.offsetHeight,
                                duration: 0.4,
                                ease: "power1.inOut"
                            });
                        }
                    });
                }
            });
        }
    };

    // Tab button click handler
    tabs.forEach(button => {
        button.addEventListener("click", () => {
            const tab = button.getAttribute("data-tab");

            // Toggle active tab styles
            tabs.forEach(btn => btn.classList.remove("text-[#c38a42]", "border-b", "border-[#c38a42]", "pb-1"));
            button.classList.add("text-[#c38a42]", "border-b", "border-[#c38a42]", "pb-1");

            switchTab(tab);
        });
    });

    // Initial load setup
    const active = document.querySelector(".tab-content:not(.hidden)");
    if (active) {
        wrapper.style.height = `${active.offsetHeight}px`;
        gsap.fromTo(active, { opacity: 0, y: 20 }, {
            opacity: 1,
            y: 0,
            duration: 0.7,
            delay: 0.1,
            onStart: () => active.classList.add("active")
        });
    }

    // Scroll-triggered parallax background effect
    gsap.to("#where-we-work", {
        backgroundPosition: "50% 20%", // Moves from center to top as user scrolls
        ease: "none",
        scrollTrigger: {
            trigger: "#where-we-work",
            start: "top bottom",     // When section enters the viewport
            end: "bottom top",       // Until it leaves
            scrub: true              // Smooth continuous effect
        }
    });


    // Scroll-reveal for section headings
    gsap.from(".scroll-fade", {
        opacity: 0,
        y: 40,
        duration: 1,
        stagger: 0.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "#where-we-work",
            start: "top 80%"
        }
    });
});




// Fade in text
gsap.from("#ctaText", {
    opacity: 0,
    y: 50,
    duration: 1,
    ease: "power2.out",
    scrollTrigger: {
        trigger: "#ctaText",
        start: "top 90%",
    },
});

// Stagger form fields
gsap.from("#ctaForm > *", {
    autoAlpha: 0, // replaces opacity + handles visibility
    y: 30,
    stagger: 0.1,
    duration: 0.8,
    ease: "power2.out",
    scrollTrigger: {
        trigger: "#ctaForm",
        start: "top 90%",
    },
});


// Parallax background
gsap.to("#ctaSection", {
    backgroundPosition: "center 40%",
    ease: "none",
    scrollTrigger: {
        trigger: "#ctaSection",
        scrub: true,
    },
});
















document.addEventListener('DOMContentLoaded', () => {
    const heroSection = document.querySelector('#pageHero');
    if (!heroSection) return;

    // Intro animation
    gsap.from('.hero-bg', {
        scale: 1.2,
        opacity: 0,
        duration: 1.6,
        ease: 'power2.out'
    });

    gsap.from('.hero-title', {
        y: 80,
        opacity: 0,
        duration: 1.2,
        ease: 'power3.out',
        delay: 0.2
    });

    gsap.from('.hero-subtitle', {
        y: 40,
        opacity: 0,
        duration: 1,
        ease: 'power2.out',
        delay: 0.4
    });

    // Scroll parallax
    gsap.to('.hero-bg', {
        scale: 1.3,
        yPercent: -10,
        scrollTrigger: {
            trigger: '#pageHero',
            start: 'top top',
            end: 'bottom top',
            scrub: true
        }
    });

    gsap.to('.hero-title', {
        yPercent: -10,
        scrollTrigger: {
            trigger: '#pageHero',
            start: 'top top',
            end: 'bottom top',
            scrub: true
        }
    });

    gsap.to('.hero-subtitle', {
        yPercent: -15,
        scrollTrigger: {
            trigger: '#pageHero',
            start: 'top top',
            end: 'bottom top',
            scrub: true
        }
    });
});



if (document.querySelectorAll(".fade-wrapper").length > 0) {
  $(".fade-wrapper").each(function () {
    var section = $(this);
    var fadeItems = section.find(".fade-top");

    fadeItems.each(function (index, element) {
      var delay = index * 0.1;
      gsap.set(element, { opacity: 0, y: 70 });

      ScrollTrigger.create({
        trigger: element,
        start: "top 95%",
        end: "bottom bottom",
        scrub: false,
        toggleActions: "play none none reverse",
        onEnter: function () {
          gsap.to(element, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            delay: delay
          });
        },
        onLeaveBack: function () {
          gsap.to(element, { opacity: 0, y: 70, duration: 0.5 });
        }
      });
    });
  });
}



document.addEventListener('DOMContentLoaded', () => {
    const services = document.querySelectorAll("[id^='service-image-']");
    services.forEach(box => {
        const parent = box.closest('.group');
        if (!parent) return;

        parent.addEventListener('mouseenter', () => {
            gsap.to(box, {
                width: '12rem',
                height: '8.5rem',
                duration: 0.4,
                ease: 'power2.out'
            });
        });

        parent.addEventListener('mouseleave', () => {
            gsap.to(box, {
                width: '5rem',
                height: '4rem',
                duration: 0.4,
                ease: 'power2.out'
            });
        });
    });
});



document.addEventListener('DOMContentLoaded', () => {
    gsap.utils.toArray('[data-fade]').forEach((el) => {
        const delay = parseFloat(el.getAttribute('data-delay')) || 0;

        gsap.from(el, {
            opacity: 0,
            y: 40,
            duration: 0.6,
            delay,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 90%',
                toggleActions: 'play none none reverse',
            }
        });
    });
});






// Animate all [data-fade] items
gsap.utils.toArray('[data-fade]').forEach((el) => {
    gsap.from(el, {
        opacity: 0,
        y: 60,
        duration: 1,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: el,
            start: 'top 85%',
            toggleActions: 'play none none reverse'
        }
    });
});

// Typing animation for "Our Story" heading (optional)
const storySplit = new SplitType('#story-heading', { types: 'chars' });
gsap.from(storySplit.chars, {
    opacity: 0,
    y: 30,
    stagger: 0.06,
    duration: 1,
    ease: 'power2.out',
    scrollTrigger: {
        trigger: '#story-heading',
        start: 'top 80%',
        toggleActions: 'play none none reverse'
    }
});
