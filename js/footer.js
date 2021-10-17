function emailAnimationOut() {
    animationOver("email", "out");
}
function emailAnimationOver() {
    animationOver("email", "over");
}

function linkedinAnimationOut() {
    animationOver("linkedin", "out");
}

function linkedinAnimationOver() {
    animationOver("linkedin", "over");
}

function instagramAnimationOut() {
    animationOver("instagram", "out");
}

function instagramAnimationOver() {
    animationOver("instagram", "over");
}

function animationOver(id, direction) {

    var letterContainer = document.getElementById(id).querySelectorAll(".letter");
    var delay = 0;

    letterContainer.forEach(letter => {
        if (direction == "over") {
            gsap.to(letter, { y: -5, ease: "power1", color: "var(--black)", opacity: 0.5, delay: delay});
        } else {
            gsap.to(letter, { y: 0, ease: "power1", color: "var(--black)", opacity: 1, delay: delay});
        }
      delay += 0.1;
	});

    delay = 0;
}
