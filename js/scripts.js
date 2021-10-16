// navigation
function openNav() {
    if (window.innerWidth < 767) {
        document.getElementById("menu").style.right = "0";
        document.getElementById("open").style.display = "none";
        document.getElementById("close").style.display = "block";
    }
}

function closeNav() {
    if (window.innerWidth < 767) {
        document.getElementById("menu").style.right = "-100vw";
        document.getElementById("open").style.display = "block";
        document.getElementById("close").style.display = "none";
    }
}

function closeModal() {
    document.getElementById("one").style.display = "none";
}
