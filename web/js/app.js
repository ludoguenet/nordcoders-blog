const burger = document.querySelector("#toggle-burger");
const ul = document.querySelector('#ul-list');
burger.addEventListener('click', function (e) {
    e.preventDefault();
    ul.classList.toggle('visible')
});



