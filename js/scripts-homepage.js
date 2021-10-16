document.addEventListener("DOMContentLoaded", function(event) {
    window.onload = function() {

        gsap.registerPlugin(ScrollTrigger);
        ScrollTrigger.defaults({ scroller: ".site-wrapper" });

        // hero
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part1"), {
            scrollTrigger: "#home-wrapper",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.25,
          });
        });

        // portfolio
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part2"), {
            scrollTrigger: "#portfolio",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.1,
          });
        });

        // about
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part3"), {
            scrollTrigger: "#about-wrapper",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.1,
          });
        });

        // about
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part3a"), {
            scrollTrigger: "#about-wrapper",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.1,
          });
        });

        // contact
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part4"), {
            scrollTrigger: "#contact-wrapper",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.25,
          });
        });
    };
});
