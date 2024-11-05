<? require_once './header.php'; ?>

        <main class="main">
            <div class="main__container">
                <h1 class="main__header _scroll-anim _scroll-anim-no-hide">Составить договор купли-продажи автомобиля онлайн</h1>
                <form action="./template/php/createWordDKP.php" method="POST" class="main__form">
                    <section class="main__section number1 _scroll-anim _scroll-anim-no-hide">
                        <h2>1. Договор купли-продажи автомобиля</h2>
                        <div class="main__fields">
                            <div class="field required">
                                <input id="field-city" type="text" name="paragraph1_city" placeholder="Введите значение...">
                                <label for="field-city">Город</label>
                            </div>
                            <div class="field required">
                                <input class="mask__data" id="field-data" type="tel" name="paragraph1_date" placeholder="Введите значение...">
                                <label for="field-data">Дата</label>
                            </div>
                        </div>
                    </section>
                    <section class="main__section number2 _scroll-anim _scroll-anim-no-hide">
                        <h2>2. Продавец</h2>
                        <div class="main__fields">
                            <div class="field required">
                                <input id="field-fio" name="paragraph2_fio" type="text" placeholder="Введите значение...">
                                <label for="field-fio">ФИО</label>
                            </div>
                            <div class="field required">
                                <input class="mask__data" id="field-date-birth" name="paragraph2_dateBirth" type="tel" placeholder="Введите значение...">
                                <label for="field-date-birth">Дата рождения</label>
                            </div>
                        </div>
                        <div class="main__many-fields required">
                            <div class="many-field__header">Паспорт продавца</div>
                            <div class="many-field__row">
                                <input class="mask__passport-series" type="tel" name="paragraph2_series" placeholder="Серия">
                                <input class="mask__passport-number" type="tel" name="paragraph2_number" placeholder="Номер">
                                <input class="mask__passport-kod" type="tel" name="paragraph2_kod" placeholder="Код подразделения">
                                <input class="mask__data" type="tel" name="paragraph2_date" placeholder="Дата выдачи">
                            </div>
                            <div class="many-field__row many-field__row_one">
                                <input type="text" name="paragraph2_whoIssued" placeholder="Кем выдан">
                            </div>
                            <div class="many-field__row many-field__row_one">
                                <input type="text" name="paragraph2_address" placeholder="Адрес регистрации">
                            </div>
                        </div>
                    </section>
                    <section class="main__section number3 _scroll-anim _scroll-anim-no-hide">
                        <h2>3. Покупатель</h2>
                        <div class="main__fields">
                            <div class="field required">
                                <input id="field-cust-fio" type="text" name="paragraph3_fio" placeholder="Введите значение...">
                                <label for="field-cust-fio">ФИО</label>
                            </div>
                            <div class="field required">
                                <input class="mask__data" id="field-cust-date-birth" type="tel" name="paragraph3_dateBirth" placeholder="Введите значение...">
                                <label for="field-cust-date-birth">Дата рождения</label>
                            </div>
                        </div>
                        <div class="main__many-fields required">
                            <div class="many-field__header">Паспорт покупателя</div>
                            <div class="many-field__row">
                                <input class="mask__passport-series" type="tel" name="paragraph3_series" placeholder="Серия">
                                <input class="mask__passport-number" type="tel" name="paragraph3_number" placeholder="Номер">
                                <input class="mask__passport-kod" type="tel" name="paragraph3_kod" placeholder="Код подразделения">
                                <input class="mask__data" type="tel" name="paragraph3_date" placeholder="Дата выдачи">
                            </div>
                            <div class="many-field__row many-field__row_one">
                                <input type="text" name="paragraph3_whoIssued" placeholder="Кем выдан">
                            </div>
                            <div class="many-field__row many-field__row_one">
                                <input type="text" name="paragraph3_address" placeholder="Адрес регистрации">
                            </div>
                        </div>
                    </section>
                    <section class="main__section number4 _scroll-anim _scroll-anim-no-hide">
                        <h2>4. Транспортное средство</h2>
                        <div class="main__fields mb20">
                            <div class="field required">
                                <input id="paragraph4_model" type="text" name="paragraph4_model" placeholder="Введите значение...">
                                <label for="paragraph4_model">Марка и модель</label>
                            </div>
                        </div>
                        <div class="main__fields mb20">
                            <div class="field select required_select">
                                <select class="js-choice" name="paragraph4_type" id="paragraph4_type">
                                    <option value="">Выберите из списка...</option>
                                    <option value="Легковой">Легковой</option>
                                    <option value="Мотоцикл">Мотоцикл</option>
                                    <option value="Мотороллер">Мотороллер</option>
                                    <option value="Грузовой">Грузовой</option>
                                    <option value="Автобус">Автобус</option>
                                    <option value="Самоходная машина">Самоходная машина</option>
                                    <option value="Седельный тягач">Седельный тягач</option>
                                </select>
                                <label for="paragraph4_type">Тип ТС</label>
                            </div>
                        </div>
                        <div class="main__fields mb20">
                            <div class="field required">
                                <input id="paragraph4_vin" type="text" name="paragraph4_vin" placeholder="Введите значение...">
                                <label for="paragraph4_vin">VIN</label>
                            </div>
                            <div class="field required">
                                <input class="mask__year" id="paragraph4_year" type="tel" name="paragraph4_year" placeholder="Введите значение...">
                                <label for="paragraph4_year">Год выпуска</label>
                            </div>
                        </div>
                        <div class="main__fields mb20">
                            <div class="field required">
                                <input id="paragraph4_numberCarBody" type="text" name="paragraph4_numberCarBody" placeholder="Введите значение...">
                                <label for="paragraph4_numberCarBody">Номер кузова</label>
                            </div>
                            <div class="field required">
                                <input id="paragraph4_numberChassis" type="text" name="paragraph4_numberChassis" placeholder="Введите значение...">
                                <label for="paragraph4_numberChassis">№ шасси/рама</label>
                            </div>
                        </div>
                        <div class="main__fields">
                            <div class="field required">
                                <input id="paragraph4_numberEngine" type="text" name="paragraph4_numberEngine" placeholder="Введите значение...">
                                <label for="paragraph4_numberEngine">Двигатель №</label>
                            </div>
                            <div class="field required">
                                <input id="paragraph4_color" type="text" name="paragraph4_color" placeholder="Введите значение...">
                                <label for="paragraph4_color">Цвет кузова</label>
                            </div>
                        </div>
                    </section>
                    <section class="main__section number5 _scroll-anim _scroll-anim-no-hide">
                        <h2>5. Свидетельство о регистрации (СТС)</h2>
                        <div class="main__fields mb20">
                            <div class="field">
                                <input id="paragraph5_series" type="text" name="paragraph5_series" placeholder="Введите значение...">
                                <label for="paragraph5_series">Серия</label>
                            </div>
                            <div class="field">
                                <input id="paragraph5_number" type="text" name="paragraph5_number" placeholder="Введите значение...">
                                <label for="paragraph5_number">Номер</label>
                            </div>
                        </div>
                        <div class="main__fields">
                            <div class="field">
                                <input id="paragraph5_whoIssued" type="text" name="paragraph5_whoIssued" placeholder="Введите значение...">
                                <label for="paragraph5_whoIssued">Кем выдано</label>
                            </div>
                            <div class="field">
                                <input class="mask__data" id="paragraph5_date" type="tel" name="paragraph5_date" placeholder="Введите значение...">
                                <label for="paragraph5_date">Дата выдачи</label>
                            </div>
                        </div>
                    </section>
                    <section class="main__section number5 _scroll-anim _scroll-anim-no-hide">
                        <h2>6 Паспорт ТС (ПТС)</h2>
                        <div class="main__fields mb20">
                            <div class="field">
                                <input id="paragraph5_1_series" type="text" name="paragraph5_1_series" placeholder="Введите значение...">
                                <label for="paragraph5_1_series">Серия</label>
                            </div>
                            <div class="field">
                                <input id="paragraph5_1_number" type="text" name="paragraph5_1_number" placeholder="Введите значение...">
                                <label for="paragraph5_1_number">Номер</label>
                            </div>
                        </div>
                        <div class="main__fields">
                            <div class="field">
                                <input id="paragraph5_1_whoIssued" type="text" name="paragraph5_1_whoIssued" placeholder="Введите значение...">
                                <label for="paragraph5_1_whoIssued">Кем выдано</label>
                            </div>
                            <div class="field">
                                <input class="mask__data" id="paragraph5_1_date" type="tel" name="paragraph5_1_date" placeholder="Введите значение...">
                                <label for="paragraph5_1_date">Дата выдачи</label>
                            </div>
                        </div>
                    </section>
                    <section class="main__section number6 _scroll-anim _scroll-anim-no-hide">
                        <h2>7. Госномер автомобиля и стоимость</h2>
                        <div class="main__fields mb20">
                            <div class="field">
                                <input id="paragraph6_stateNumber" type="text" name="paragraph6_stateNumber" placeholder="Введите значение...">
                                <label for="paragraph6_stateNumber">Госномер</label>
                            </div>
                            <div class="field">
                                <div class="field__prompt">₽</div>
                                <input class="mask__money" id="paragraph6_price" type="text" name="paragraph6_price" placeholder="Введите значение...">
                                <label for="paragraph6_price">Стоимость</label>
                            </div>
                        </div>
                    </section>
                    <section class="main__section number7 _scroll-anim _scroll-anim-no-hide">
                        <h2>8. Пробег автомобиля</h2>
                        <div class="main__fields mb20">
                            <div class="radio-button">
                                <input type="radio" name="mileage-radio" id="mileage-yes">
                                <label class="radio-button__label" for="mileage-yes">Указывается в договоре</label>
                            </div>
                            <div class="radio-button">
                                <input type="radio" name="mileage-radio" id="mileage-no">
                                <label class="radio-button__label" for="mileage-no">Пункт не предусмотрен</label>
                            </div>
                        </div>
                        <div class="main__fields">
                            <div class="field tohide7">
                                <div class="field__prompt">км</div>
                                <input id="paragraph7_price" type="text" name="paragraph7_price" placeholder="Введите значение...">
                                <label for="paragraph7_price">Пробег</label>
                            </div>
                        </div>
                    </section>
                    <section class="main__section number8 _scroll-anim _scroll-anim-no-hide">
                        <h2>9. Техническое состояние автомобиля</h2>
                        <div class="main__fields mb20">
                            <div class="radio-button">
                                <input type="radio" name="breakdowns" id="no-breakdowns">
                                <label class="radio-button__label" for="no-breakdowns">Находится в исправном состоянии</label>
                            </div>
                            <div class="radio-button">
                                <input type="radio" name="breakdowns" id="yes-breakdowns">
                                <label class="radio-button__label" for="yes-breakdowns">Имеется поломка (неисправность)</label>
                            </div>
                        </div>
                        <div class="main__fields mb20">
                            <div class="radio-button">
                                <input type="radio" name="breakdowns" id="breakdowns-off">
                                <label class="radio-button__label" for="breakdowns-off">Пункт не предусмотрен</label>
                            </div>
                        </div>
                        <div class="main__many-fields tohide8">
                            <div class="many-field__header">Неисправность</div>
                            <div class="many-field__row many-field__row_one">
                                <input type="text" placeholder="Опишите неисправность...">
                            </div>
                        </div>
                    </section>
                    <section class="main__section number9 _scroll-anim _scroll-anim-no-hide">
                        <h2>10. Вместе с автомобилем продается прицеп или тому подобное?</h2>
                        <div class="main__fields mb20">
                            <div class="radio-button">
                                <input type="radio" name="additionally" id="additionally-yes">
                                <label class="radio-button__label" for="additionally-yes">Да</label>
                            </div>
                            <div class="radio-button">
                                <input type="radio" name="additionally" id="additionally-no">
                                <label class="radio-button__label" for="additionally-no">Нет</label>
                            </div>
                        </div>
                        <div class="main__many-fields tohide9">
                            <div class="many-field__header">Одновременно с передачей автомобиля в собственность Покупателя Продавец передает в собственность следующее имущество</div>
                            <div class="many-field__row many-field__row_one">
                                <input type="text" placeholder="Опишите имущество...">
                            </div>
                        </div>
                    </section>
                    <section class="main__section number10 _scroll-anim _scroll-anim-no-hide">
                        <h2>11. Автомобиль находится под залогом, арестом и т.д.?</h2>
                        <div class="main__fields mb20">
                            <div class="radio-button">
                                <input type="radio" name="arrest" id="arrest-yes">
                                <label class="radio-button__label" for="arrest-yes">Да</label>
                            </div>
                            <div class="radio-button">
                                <input type="radio" name="arrest" id="arrest-no">
                                <label class="radio-button__label" for="arrest-no">Нет</label>
                            </div>
                        </div>
                        <div class="main__many-fields tohide10">
                            <div class="many-field__header">Автомобиль имеет следующее ограничение</div>
                            <div class="many-field__row many-field__row_one">
                                <input type="text" placeholder="Опишите ограничение...">
                            </div>
                        </div>
                    </section>
                    <section class="main__section number11 _scroll-anim _scroll-anim-no-hide">
                        <h2>12. Способ оплаты стоимости автомобиля</h2>
                        <div class="main__fields mb20">
                            <div class="radio-button">
                                <input type="radio" name="payment-method" id="payment-cash">
                                <label class="radio-button__label" for="payment-cash">Наличные денежные средства</label>
                            </div>
                        </div>
                        <div class="main__fields mb20">
                            <div class="radio-button">
                                <input type="radio" name="payment-method" id="payment-transfer">
                                <label class="radio-button__label" for="payment-transfer">Перевод на банковскую карту</label>
                            </div>
                            <div class="radio-button">
                                <input type="radio" name="payment-method" id="payment-transfer-on-check">
                                <label class="radio-button__label" for="payment-transfer-on-check">Перевод на расчетный счет</label>
                            </div>
                        </div>
                        <div class="main__fields mb20">
                            <div class="radio-button">
                                <input type="radio" name="payment-method" id="choose-cust">
                                <label class="radio-button__label" for="choose-cust">По выбору покупателя</label>
                            </div>
                            <div class="radio-button">
                                <input type="radio" name="payment-method" id="choose-sel">
                                <label class="radio-button__label" for="choose-sel">По выбору продавца</label>
                            </div>
                        </div>
                        <div class="main__fields">
                            <div class="field tohide11 check">
                                <input id="" type="text" placeholder="Введите номер расчётного счета...">
                                <label for="">Расчётный счёт</label>
                            </div>
                            <div class="field tohide11 off bank">
                                <input id="" type="text" placeholder="Введите номер банковского счета...">
                                <label for="">Банковский счет</label>
                            </div>
                            <div class="field tohide11 off transfer">
                                <input id="" type="text" placeholder="Введите номер банковской карты...">
                                <label for="">Банковская карта</label>
                            </div>
                        </div>
                    </section>
                    <section class="main__section _scroll-anim _scroll-anim-no-hide">
                        <h2 style="display: none;">Кнопка отправки</h2>
                        <a class="main__submit popup-link" href="#popup-download">
                            Скачать договор <img src="./template/images/icons/download.svg" alt="Иконка загрузки">
                        </a>
                        <!-- <button type="submit" class="main__submit">
                            Скачать договор <img src="./template/images/icons/download.svg" alt="Иконка загрузки">
                        </button> -->
                    </section>
                </form>
            </div>
        </main>

<? require_once './footer.php'; ?>