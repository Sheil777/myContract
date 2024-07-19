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

  // 1. Группа кнопок, по которым кликаем
  // 2. Нужная кнопка
  // 3. Блок для скрытия
  var blocksToHide = [
    ['input[name="mileage-radio"]', '#mileage-no', '.tohide7'],
    ['input[name="breakdowns"]', '#breakdowns-off', '.tohide8'],
    ['input[name="additionally"]', '#additionally-no', '.tohide9'],
  ];

  blocksToHide.forEach(block => {
    const mileageRadioButtons = document.querySelectorAll(block[0]);
    mileageRadioButtons.forEach(button => {
      const mileageNo = document.querySelector(block[1]);

      button.addEventListener('change', () => {
        if(mileageNo.checked){
          document.querySelector(block[2]).classList.add('hidden');
        }else{
          document.querySelector(block[2]).classList.remove('hidden');
        }
      })
    });
  });


  
  
});