document.addEventListener("DOMContentLoaded", function(event) {
    window.onload = function() {

        gsap.registerPlugin(ScrollTrigger);
        // ScrollTrigger.defaults({ scroller: ".site-wrapper" });

        // hero
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part1"), {
            scrollTrigger: "#home",
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.25,
          });
        });

        // portfolio
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part2"), {
            scrollTrigger: {
              trigger: "#portfolio",
              start: "top center",
            },
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.1,
          });
        });

        // about
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part3"), {
            scrollTrigger: {
              trigger: "#about",
              start: "top center",
            },
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.1,
          });
        });

        // about
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part3a"), {
            scrollTrigger: {
              trigger: "#about",
              start: "top center",
            },
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.1,
          });
        });

        // contact
        gsap.utils.toArray("body").forEach(section => {
          gsap.from(section.querySelectorAll(".part4"), {
            scrollTrigger: {
              trigger: "#contact",
              start: "top center",
            },
            autoAlpha: 0,
            y: 25,
            duration: 0.75,
            stagger: 0.25,
          });
        });
    };
});
