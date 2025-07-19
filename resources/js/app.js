// ---------------------------------------------
// 🧩 UI/Library Imports
// ---------------------------------------------

// Flowbite UI components
import 'flowbite';

// Swiper & modules
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

// Bootstrap (or your own bootstrap file)
import './bootstrap';

// PhotoSwipe for lightbox gallery
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

// SplitType for text animations
import SplitType from 'split-type';

// Flaticon UIcons
import '@flaticon/flaticon-uicons/css/all/all.css';

// Alpine.js
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// GSAP with ScrollTrigger and ScrollSmoother
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import ScrollSmoother from 'gsap/ScrollSmoother';
gsap.registerPlugin(ScrollTrigger, ScrollSmoother, DrawSVGPlugin);
window.gsap = gsap;

// ---------------------------------------------
// 🖼️ PhotoSwipe Lightbox Init
// ---------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#gallery',
        children: 'a',
        pswpModule: () => import('photoswipe')
    });
    lightbox.init();
});

// ---------------------------------------------
// 🌊 GSAP Scroll Effects
// ---------------------------------------------
// ---------------------------------------------
// 🌊 GSAP Scroll Effects
// ---------------------------------------------
window.addEventListener('DOMContentLoaded', () => {
    // ✅ Get wrapper/content elements FIRST
    const wrapper = document.querySelector('#smooth-wrapper');
    const content = document.querySelector('#smooth-content');

    // ✅ Only create smoother if structure exists
    if (wrapper && content) {
        ScrollSmoother.create({
            wrapper: '#smooth-wrapper',
            content: '#smooth-content',
            smooth: 1,
            effects: true,
            smoothTouch: 0.1,
        });
    }

    // ✅ Animate width of image on scroll
    const section = document.querySelector('#since-year1');
    const image = section?.querySelector('.since-width-image1');
    const heading = section?.querySelector('#since-heading1');

    if (image) {
        gsap.fromTo(image,
            { width: '0%' },
            {
                width: '100%',
                ease: 'none',
                scrollTrigger: {
                    trigger: section,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true
                }
            }
        );
    }

    if (heading) {
        const split = new SplitType(heading, { types: 'chars' });

        gsap.from(split.chars, {
            opacity: 0,
            y: 40,
            duration: 1,
            stagger: 0.08,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: heading,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play reverse play reverse'
            }
        });
    }

    // ✅ Always refresh ScrollTrigger after SplitType or dynamic layout
    ScrollTrigger.refresh();
});


window.addEventListener('load', () => {
    const loader = document.getElementById('site-loader');
    const counter = document.getElementById('loading-count');

    // Count from 0 to 100%
    let current = 0;
    const interval = setInterval(() => {
        current += 1;
        if (counter) counter.textContent = `${current}%`;
        if (current >= 100) {
            clearInterval(interval);

            // Fade out
            loader.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => loader.remove(), 800);
        }
    }, 20); // 100 * 20ms = 2000ms = 2s (matches fill bar)
});





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
 
// GSAP entrance animation (optional)
gsap.utils.toArray(".animate-fade-in-up").forEach((el, i) => {
  gsap.fromTo(
    el,
    { opacity: 0, y: 40 },
    {
      opacity: 1,
      y: 0,
      delay: i * 0.2,
      duration: 1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: el,
        start: "top 80%",
      },
    }
  );
});



    
    // Scrollable horizontal gallery animation
const scrollGallery = document.querySelector('#scrollGallery');

if (scrollGallery) {
    const container = scrollGallery.parentElement;
    const extraScroll = -100; // You can increase this if needed
    const totalScroll = scrollGallery.scrollWidth - container.clientWidth + extraScroll;

    gsap.set(scrollGallery, { x: 0 });

    ScrollTrigger.create({
        trigger: scrollGallery,
        start: "top 80%",
        end: "+=1000",
        scrub: 2,
        onEnter: () => {
            setTimeout(() => {
                gsap.to(scrollGallery, {
                    x: -totalScroll,
                    ease: "none",
                    scrollTrigger: {
                        trigger: scrollGallery,
                        start: "top center",
                        end: "+=1000",
                        scrub: 2,
                        invalidateOnRefresh: true
                    }
                });
            }, 800); // delay before scroll starts
        }
    });
}





});











document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('intro-video');

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

    // Show text immediately
    document.getElementById('intro-title')?.classList.remove('opacity-0');
    document.getElementById('intro-subtitle')?.classList.remove('opacity-0');
    document.getElementById('intro-tagline')?.classList.remove('opacity-0');
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
        end: "+=280",
        pin: true,
        pinSpacing: true,
        scrub: true,
        markers: false
    },
    y: 0,
    // opacity: 1,
    // ease: "none"
});





// ✅ Wait until DOM is fully loaded and Smoother is ready
document.addEventListener('DOMContentLoaded', () => {
    // 🔁 Setup ScrollSmoother
    const smoother = ScrollSmoother.create({
        wrapper: '#smooth-wrapper',
        content: '#smooth-content',
        smooth: 1.2,
        effects: true,
        smoothTouch: 0.1,
    });

    // ✅ Animate images: fade + scale + parallax
    gsap.utils.toArray("#projects-home .project-image").forEach((image) => {
        const block = image.closest(".project-block");

        // Parallax scroll movement
        gsap.fromTo(image,
            { y: -20 },
            {
                y: 20,
                ease: "none",
                scrollTrigger: {
                    trigger: block,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 1,
                }
            }
        );

        // Fade in + slight scale
        gsap.fromTo(image,
            { opacity: 0, scale: 1.05 },
            {
                opacity: 1,
                scale: 1,
                duration: 1.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: image,
                    start: "top 90%",
                    toggleActions: "play none none none",
                }
            }
        );
    });

    // ✅ Animate project number, title, and description
    gsap.utils.toArray("#projects-home .project-block").forEach((block) => {
        const number = block.querySelector(".project-number-outline");
        const title = block.querySelector(".project-title");
        const desc = block.querySelector(".project-desc");

        gsap.timeline({
            scrollTrigger: {
                trigger: block,
                start: "top 85%",
                toggleActions: "play none none reverse"
            }
        })
        .from(number, {
            opacity: 0,
            y: 40,
            duration: 0.8,
            ease: "power3.out"
        })
        .from(title, {
            opacity: 0,
            y: 30,
            duration: 0.8,
            ease: "power3.out"
        }, "-=0.5")
        .from(desc, {
            opacity: 0,
            y: 20,
            duration: 0.8,
            ease: "power3.out"
        }, "-=0.5");
    });

    // ✅ Refresh scroll triggers after smoother is ready
    ScrollTrigger.refresh();
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










document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.expertise-grid .group').forEach((group) => {
        const arrow = group.querySelector('.expertise-arrow');

        if (arrow) {
            gsap.set(arrow, { opacity: 0, y: 12 });

            group.addEventListener('mouseenter', () => {
                gsap.to(arrow, {
                    opacity: 1,
                    y: 0,
                    duration: 0.5,
                    ease: 'power3.out'
                });
            });

            group.addEventListener('mouseleave', () => {
                gsap.to(arrow, {
                    opacity: 0,
                    y: 12,
                    duration: 0.5,
                    ease: 'power3.in'
                });
            });
        }
    });
});









Swiper.use([Pagination, Autoplay]);

document.addEventListener('DOMContentLoaded', () => {
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
        },
    });

    // Animate on slide change with smooth fade and slide-up
    swiper.on('slideChangeTransitionStart', () => {
        const prevSlide = document.querySelector('.testimonialSwiper .swiper-slide-prev p:nth-child(2)');
        if (prevSlide) {
            gsap.to(prevSlide, {
                opacity: 0,
                y: 20,
                duration: 0.4,
                ease: 'power2.inOut',
            });
        }
    });

    swiper.on('slideChangeTransitionEnd', () => {
        const activeSlide = document.querySelector('.testimonialSwiper .swiper-slide-active p:nth-child(2)');
        if (activeSlide) {
            gsap.fromTo(
                activeSlide,
                { opacity: 0, y: 40 },
                { opacity: 1, y: 0, duration: 0.6, ease: 'power2.out' }
            );
        }
    });

    // Initial entry animation
    const initialText = document.querySelector('.testimonialSwiper .swiper-slide-active p:nth-child(2)');
    if (initialText) {
        gsap.fromTo(initialText, { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 0.8, ease: 'power2.out' });
    }
});








// service-cta-home.blade.php

// Animate heading lines
document.querySelectorAll(".gsap-heading").forEach((heading) => {
    const lines = heading.querySelectorAll(".gsap-line");
    gsap.set(lines, { opacity: 0, x: -30 });
    gsap.to(lines, {
        opacity: 1,
        x: 0,
        duration: 1,
        ease: "power3.out",
        stagger: 0.25,
        scrollTrigger: {
            trigger: heading,
            start: "top 80%",
            toggleActions: "play reverse play reverse",
        }
    });
});

// Animate left scroll content
document.querySelectorAll(".animate-left-scroll").forEach((left) => {
    gsap.fromTo(left,
        { x: -100, opacity: 0 },
        {
            x: 0,
            opacity: 1,
            duration: 1.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: left,
                start: "top 80%",
                toggleActions: "play reverse play reverse",
                scrub: true
            }
        });

    // Animate child fade-ins
    const fadeChildren = left.querySelectorAll(".gsap-fade-in");
    gsap.set(fadeChildren, { opacity: 0, y: 20 });
    gsap.to(fadeChildren, {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: "power2.out",
        stagger: 0.15,
        scrollTrigger: {
            trigger: left,
            start: "top 85%",
            toggleActions: "play reverse play reverse"
        }
    });
});

// Animate right scroll content
document.querySelectorAll(".animate-right-scroll").forEach((right) => {
    gsap.fromTo(right,
        { x: 100, opacity: 0 },
        {
            x: 0,
            opacity: 1,
            duration: 1.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: right,
                start: "top 80%",
                toggleActions: "play reverse play reverse",
                scrub: true
            }
        });
});

// Parallax mousemove image tilt
document.querySelectorAll(".perspective").forEach((wrapper) => {
    const image = wrapper.querySelector(".motion-image");
    if (!image) return;

    wrapper.addEventListener("mousemove", (e) => {
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

    wrapper.addEventListener("mouseleave", () => {
        gsap.to(image, {
            x: 0,
            y: 0,
            rotationX: 0,
            rotationY: 0,
            duration: 0.5,
            ease: "power3.out"
        });
    });
});









document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('our-story');
    const heading = document.getElementById('story-lead');

    if (!section || !heading) return;

    // Split heading into words
    const split = new SplitType(heading, {
        types: 'lines, words',
        lineClass: 'line-wrapper',
        wordClass: 'word-wrapper'
    });

    const words = heading.querySelectorAll('.word-wrapper');

    // Animate heading words from top-left diagonally
    gsap.set(words, { opacity: 0, y: 40, color: '#ffffff' });

    gsap.to(words, {
        opacity: 1,
        y: 0,
        color: '#C5A26B',
        duration: 1,
        ease: 'power3.out',
        stagger: {
            each: 0.05,
            from: 'start',
            grid: [split.lines.length, 10] // 10 words per line est.
        },
        scrollTrigger: {
            trigger: section,
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        }
    });

    // Animate paragraphs
    gsap.utils.toArray('.story-paragraph').forEach((p, i) => {
        gsap.fromTo(p,
            { opacity: 0, y: 40 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: 'power2.out',
                delay: i * 0.15,
                scrollTrigger: {
                    trigger: p,
                    start: 'top 90%',
                    toggleActions: 'play none none reverse'
                }
            }
        );
    });
});






document.addEventListener('DOMContentLoaded', () => {
  // ✅ Animate content fade-in inside .since-content
  document.querySelectorAll('#about-us-year-sec [data-fade]').forEach((section) => {
    const children = section.querySelectorAll('p, h3, ul, a, div');

    children.forEach((el, i) => {
      gsap.fromTo(el,
        { opacity: 0, y: 40 },
        {
          opacity: 1,
          y: 0,
          duration: 0.8,
          delay: i * 0.1,
          ease: 'power3.out',
          scrollTrigger: {
            trigger: el,
            start: 'top 90%',
            toggleActions: 'play none none reverse'
          }
        }
      );
    });
  });

  // ✅ Animate background image width
  const imageSection = document.querySelector('#since-year1');
  const bgImage = document.querySelector('.since-width-image1');

  if (imageSection && bgImage) {
    gsap.fromTo(bgImage,
      { width: '0%' },
      {
        width: '100%',
        ease: 'power1.out',
        scrollTrigger: {
          trigger: imageSection,
          start: 'top bottom',
          end: 'bottom top',
          scrub: true
        }
      }
    );
  }

  // ✅ Split and animate "SINCE 2005"
  const heading = document.getElementById('since-heading1');
  if (heading) {
    const split = new SplitType(heading, { types: 'chars' });

    gsap.from(split.chars, {
      opacity: 0,
      y: 80,
      duration: 1,
      ease: 'power3.out',
      stagger: 0.05,
      scrollTrigger: {
        trigger: heading,
        start: 'top 85%',
        toggleActions: 'play none none reverse'
      }
    });
  }

  // Optional refresh after layout changes
  ScrollTrigger.refresh();
});







document.addEventListener('DOMContentLoaded', () => {
    // Fade-up animation for all data-animate items
    document.querySelectorAll('[data-animate="fade-up"]').forEach((el) => {
        const delay = parseFloat(el.dataset.delay) || 0;

        gsap.fromTo(
            el,
            { opacity: 0, y: 100 },
            {
                opacity: 1,
                y: 0,
                duration: 1.4,
                delay,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 90%',
                    toggleActions: 'play none none reverse',
                },
            }
        );
    });

    // SVG draw animation (scroll + hover)
    document.querySelectorAll('.svg-icon-wrapper').forEach((wrapper) => {
        const svgEl = wrapper.querySelector('svg');
        const paths = svgEl.querySelectorAll('path');

        // Initial state
        paths.forEach(path => gsap.set(path, { drawSVG: '0% 0%' }));

        // On scroll draw
        gsap.to(paths, {
            drawSVG: '0% 100%',
            duration: 3,
            ease: 'power4.out',
            stagger: 0.1,
            scrollTrigger: {
                trigger: wrapper,
                start: 'top 95%',
                toggleActions: 'play none none reverse',
            }
        });

        // Hover replay (entire .group hover)
        const group = wrapper.closest('.group');
        if (group) {
            group.addEventListener('mouseenter', () => {
                gsap.killTweensOf(paths); // Prevent multiple triggers
                gsap.fromTo(paths,
                    { drawSVG: '0% 0%' },
                    {
                        drawSVG: '0% 100%',
                        duration: 2.2,
                        ease: 'power2.out',
                        stagger: 0.08
                    }
                );
            });
        }
    });
});








// team section js

// Team Cards - Fade & Slide In with Smooth Stagger
gsap.set(".team-card", { opacity: 0, y: 50 });

gsap.to(".team-card", {
  opacity: 1,
  y: 0,
  duration: 1.2,
  ease: "power3.out",
  stagger: 0.2,
  scrollTrigger: {
    trigger: "#team-home",
    start: "top 85%",
    toggleActions: "play none none reverse",
    // markers: true, // for debugging
  }
});

// Team Title - Smooth Shrink on Scroll (Scrubbed)
gsap.to(".team-title", {
  fontSize: "2.25rem", // Tailwind: text-4xl
  duration: 1,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".team-title",
    start: "top center",
    end: "top top",
    scrub: 1,
    // markers: true,
  }
});








// Where We Work







document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".tab-btn");
  const contents = document.querySelectorAll(".tab-content");
  const wrapper = document.getElementById("tab-wrapper");

  // Function to switch tabs with animation
  const switchTab = (nextId) => {
    const current = document.querySelector(".tab-content.active");
    const next = document.getElementById(nextId);

    if (current && next && current !== next) {
      // Animate current out
      gsap.to(current, {
        opacity: 0,
        y: 20,
        duration: 0.4,
        ease: "power1.inOut",
        onComplete: () => {
          current.classList.add("hidden");
          current.classList.remove("active");
          next.classList.remove("hidden");

          // Animate next in
          gsap.fromTo(
            next,
            { opacity: 0, y: 20 },
            {
              opacity: 1,
              y: 0,
              duration: 0.5,
              ease: "power2.out",
              onStart: () => next.classList.add("active"),
              onComplete: () => {
                // Animate height of wrapper
                gsap.to(wrapper, {
                  height: next.offsetHeight,
                  duration: 0.4,
                  ease: "power1.inOut",
                });
              },
            }
          );
        },
      });
    }
  };

  // Tab button click handler
  tabs.forEach((button) => {
    button.addEventListener("click", () => {
      const tab = button.getAttribute("data-tab");

      // Toggle tab styles
      tabs.forEach((btn) =>
        btn.classList.remove(
          "text-[#c38a42]",
          "border-b",
          "border-[#c38a42]",
          "pb-1"
        )
      );
      button.classList.add("text-[#c38a42]", "border-b", "border-[#c38a42]", "pb-1");

      switchTab(tab);
    });
  });

  // Initial animation setup for active tab
  const active = document.querySelector(".tab-content:not(.hidden)");
  if (active) {
    active.classList.add("active");
    wrapper.style.height = `${active.offsetHeight}px`;

    gsap.fromTo(
      active,
      { opacity: 0, y: 20 },
      {
        opacity: 1,
        y: 0,
        duration: 0.7,
        delay: 0.1,
        ease: "power2.out",
      }
    );
  }

  // Parallax background scroll effect
  gsap.to("#where-we-work", {
    backgroundPosition: "50% 20%",
    ease: "none",
    scrollTrigger: {
      trigger: "#where-we-work",
      start: "top bottom",
      end: "bottom top",
      scrub: true,
    },
  });

  // Scroll fade-in effect for section headings
  gsap.utils.toArray(".scroll-fade").forEach((el) => {
    gsap.fromTo(
      el,
      { opacity: 0, y: 40 },
      {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: el,
          start: "top 85%",
          toggleActions: "play none none reverse",
        },
      }
    );
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











document.addEventListener("DOMContentLoaded", () => {
  // Background parallax motion
  gsap.to("#ctaBg", {
    y: -100,
    scale: 1.05,
    ease: "none",
    scrollTrigger: {
      trigger: "#ctaSection",
      start: "top bottom",
      end: "bottom top",
      scrub: true
    }
  });

  // Scroll fade-up animation
  gsap.utils.toArray("#ctaSection .scroll-fade").forEach((el) => {
    gsap.fromTo(
      el,
      { opacity: 0, y: 60 },
      {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: el,
          start: "top 85%",
          toggleActions: "play none none reverse"
        }
      }
    );
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










document.addEventListener("DOMContentLoaded", () => {
  gsap.from(".footer-anim", {
    opacity: 0,
    y: 60,
    duration: 1.2,
    ease: "power2.out",
    stagger: 0.2,
    scrollTrigger: {
      trigger: "footer",
      start: "top 90%",
      toggleActions: "play none none reverse"
    }
  });
});




