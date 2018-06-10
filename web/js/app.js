var burger = document.querySelector("#toggle-burger")
var ul = document.querySelector("#ul-list")
burger.addEventListener("click", function (e) {
    e.preventDefault()
    ul.classList.toggle("visible")
})