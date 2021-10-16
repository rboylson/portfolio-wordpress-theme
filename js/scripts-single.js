document.addEventListener("DOMContentLoaded", function(event) {
    window.onload = function() {

        // start gsap
        gsap.registerPlugin(ScrollTrigger);
        // ScrollTrigger.defaults({ scroller: ".site-wrapper" });

        // single
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part1"), {
            scrollTrigger: "body",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.25,
          });
        });

        // synopsis
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part2"), {
            scrollTrigger: "#synopsis",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.25,
          });
        });

        // synopsis
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part3"), {
            scrollTrigger: "#techthoughts",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.25,
          });
        });

        // impact
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part5"), {
            scrollTrigger: "#impact",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.25,
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
