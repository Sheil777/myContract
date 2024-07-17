document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.burger');
  burger.addEventListener('click', () => {
    burger.classList.toggle('burger_close');
    document.querySelector('.header__menu').classList.toggle('phone-open');
  });

  const customSelect = document.querySelector(".js-choice");
  const choices = new Choices(customSelect, {
    searchEnabled: false,
    itemSelectText: "",
  });
});