document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.burger');
  burger.addEventListener('click', () => {
    burger.classList.toggle('burger_close');
    document.querySelector('.header__menu').classList.toggle('phone-open');
  })
});