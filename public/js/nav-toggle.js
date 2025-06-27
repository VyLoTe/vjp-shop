const menuBtn = document.getElementById("menu-btn");
const navbar = document.querySelector(".navbar-wrapper");

menuBtn.addEventListener("click", () => {
    navbar.classList.toggle("active");
});