function init() {
  gsap.registerPlugin(ScrollTrigger);

  gsap.from("body", { autoAlpha: 0 });

  // hero
  gsap.utils.toArray("body").forEach((section) => {
    gsap.from(section.querySelectorAll(".part1"), {
      scrollTrigger: "#home",
      autoAlpha: 0,
      y: 25,
      duration: 0.75,
      stagger: 0.25,
    });
  });

  // portfolio title
  gsap.utils.toArray("body").forEach((section) => {
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

  let portfolioItem = document.querySelector("#portfolio");
  let portfolioItemList = portfolioItem.querySelectorAll(
    ".portfolio-item-wrapper"
  );

  // portfolio projects
  portfolioItemList.forEach((section) => {
    // let list = section.querySelectorAll(".part3a");
    gsap.from(section.querySelectorAll(".part3a"), {
      // gsap.from(i, {
      scrollTrigger: {
        trigger: section,
        start: "top center",
      },
      autoAlpha: 0,
      y: 25,
      duration: 0.75,
      stagger: 0.1,
      // =        });
    });
  });

  // about
  gsap.utils.toArray("body").forEach((section) => {
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

  // contact
  gsap.utils.toArray("body").forEach((section) => {
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
}

window.addEventListener("load", function (event) {
  init();
});
