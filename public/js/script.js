const button = document.getElementById("sb-btn");
const sidebar = document.getElementById("logo-sidebar");

button.addEventListener("click", function () {
    sidebar.classList.toggle("translate-x-0");
});
