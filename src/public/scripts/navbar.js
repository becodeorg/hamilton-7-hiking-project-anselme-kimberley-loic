const button = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');


button.addEventListener('click', () => {
        menu.classList.toggle('animate-comeIn');
        menu.classList.toggle('hidden');
});