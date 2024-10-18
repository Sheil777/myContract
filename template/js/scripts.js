document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.burger');
  burger.addEventListener('click', () => {
    burger.classList.toggle('burger_close');
    document.querySelector('.header__menu').classList.toggle('phone-open');
    document.querySelector('body').classList.toggle('lock');
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
    ['input[name="additionally"]', '#additionally-no', '.tohide9'],
    ['input[name="arrest"]', '#arrest-no', '.tohide10'],
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

  // Отдельно для 8 блока
  blocksToHide.forEach(block => {
    const mileageRadioButtons = document.querySelectorAll('input[name="breakdowns"]');
    mileageRadioButtons.forEach(button => {

        button.addEventListener('change', () => {
          if(document.querySelector('#no-breakdowns').checked || document.querySelector('#breakdowns-off').checked){
            document.querySelector('.tohide8').classList.add('hidden');
          }else{
            document.querySelector('.tohide8').classList.remove('hidden');
          }
        })

    });
  });

  // Отдельно для 11 блока
  const mileageRadioButtons = document.querySelectorAll('input[name="payment-method"]');
  mileageRadioButtons.forEach(button => {
    let mileageNo4 = document.querySelector('#payment-bank');
    let mileageNo5 = document.querySelector('#payment-transfer');
    let mileageNo6 = document.querySelector('#payment-transfer-on-check');

    button.addEventListener('change', () => {
      if(mileageNo4.checked){
        document.querySelectorAll('.tohide11').forEach(el => {el.classList.remove('hidden')});
        document.querySelectorAll('.tohide11').forEach(el => {el.classList.add('off')});
        document.querySelector('.tohide11.bank').classList.remove('off');
      }
      else if(mileageNo5.checked){
        document.querySelectorAll('.tohide11').forEach(el => {el.classList.remove('hidden')});
        document.querySelectorAll('.tohide11').forEach(el => {el.classList.add('off')});
        document.querySelector('.tohide11.transfer').classList.remove('off');
      }
      else if(mileageNo6.checked){
        document.querySelectorAll('.tohide11').forEach(el => {el.classList.remove('hidden')});
        document.querySelectorAll('.tohide11').forEach(el => {el.classList.add('off')});
        document.querySelector('.tohide11.check').classList.remove('off');
      }
      else {
        document.querySelectorAll('.tohide11').forEach(el => {el.classList.add('hidden')});
      }
    })

  });

  
  // Маски
  $(".mask__data").mask("99.99.9999");
  $(".mask__passport-series").mask("9999");
  $(".mask__passport-number").mask("999999");
  $(".mask__passport-kod").mask("999-999");
  $(".mask__year").mask("9999 г.");
  // $(".mask__money").mask([0-9]);



  // Скачивание файла
  document.querySelector('.main__form').addEventListener("submit", function(event){
    event.preventDefault();
    
    let required = document.querySelectorAll('.field.required');
    required.forEach(element => {
      let input = element.querySelector('input');
      if(input.value.trim() == "") {
        element.classList.add('wrong');
      }
    });

    let manyFieldRequired = document.querySelectorAll('.main__many-fields.required');
    manyFieldRequired.forEach(element => {
      let inputs = element.querySelectorAll('input');
      for(let i = 0; i < inputs.length; i++){
        let input = inputs[i];
        if(input.value.trim() == "") {
          element.classList.add('wrong');
          break;
        }
      }
    });

    let selectsRequired = document.querySelectorAll('.required_select');
    selectsRequired.forEach(select => {
      if(select.querySelector('select').value == "") {
        select.classList.add('wrong');
      }
    })
  });

});