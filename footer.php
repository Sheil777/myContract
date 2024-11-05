<footer class="footer">
            <div class="footer__container _container">
                <a href="#" class="footer__logo">мой-договор.рф</a>
                <div class="footer__contacts footer-c">
                    <div class="footer-c__header">Контакты:</div>
                    <ul class="footer-c__list">
                        <li class="footer-c__item">
                            <img src="./template/images/icons/phone.svg" alt="Иконка телефона">
                            <a href="tel:+71234567890">+7 (903) 456 78-90</a>
                        </li>
                        <li class="footer-c__item">
                            <p>ИП Горбачев Борис Леонидович</p>
                            <p>ИНН 421899406393</p>
                            <p>ОГРНИП 322420500035347</p>
                        </li>
                        <li class="footer-c__item">
                            <img src="./template/images/icons/mail.svg" alt="Иконка письма">
                            <a href="mailto:pochta@adress.ru">moy-dogovor@mail.ru</a>
                        </li>
                    </ul>
                </div>
                <ul class="footer__links">
                    <li><a href="#">Договор оферты</a></li>
                    <li><a href="#">Тарифы</a></li>
                    <li><a href="#">Отписаться</a></li>
                </ul>
            </div>
        </footer>
        <div id="popup-download" class="popup popup-download">
            <div class="popup__body popup-download__body">
                <div class="popup__content popup-download__content">
                    <div class="popup-close"></div>
                    <img class="popup-download__img" src="./template/images/present.png" alt="Картинка подарка">
                    <div class="popup-download__header">Скачать договор купли-продажи автомобиля (ДКП)</div>
                    <div class="popup-download__block">
                        <div class="popup-download__left">
                            <ul>
                                <li>Актуальность документа 2024</li>
                                <li>Гарантия юридической чистоты</li>
                                <li>Гарантия возврата денег</li>
                                <li>Безопасность и конфиденциальность данных</li>
                            </ul>
                        </div>
                        <div class="popup-download__right right">
                            <div class="popup-download__offer">
                                <img class="popup-download__img-block" src="./template/images/present.png" alt="Картинка подарка">
                                <div class="right__header">Акция</div>
                                <div class="right__promo">Первый договор всего за</div>
                                <div class="right__price">
                                    <div class="price">5 ₽ублей</div>
                                    <!-- <div class="price-old">899 ₽</div> -->
                                </div>
                                <a href="#popup-error" class="email__submit popup-link">Оплатить и скачать <img src="./template/images/icons/download.svg" alt="Иконка загрузки"></a>
                            </div>
                            <div class="popup-download__agreement">
                                <input type="checkbox" id="agreement" name="agreement" />
                                <label for="agreement">
                                    <span>
                                        Согласен с <a href="#">правилами обработки персональных данных</a>, <a href="">правилами пользования сервисом</a> и
                                        получения чеков на внутреннюю почту сервиса. Платежи автоматические реккурентные.<br>
                                        Стоимость 5 руб за первые 5 дней, далее автоматическая оплата 399 рублей каждые 30 дней 
                                        согласно <a href="#">тарифам (Соглашение о подписке).</a>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="popup-error" class="popup popup-error">
            <div class="popup__body popup-error__body">
                <div class="popup__content popup-error__content">
                    <div class="popup-close popup-error__close"></div>
                    <div class="popup-error__message">
                        Извините, сервис временно не работает
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="template/js/jquery-3.6.0.min.js"></script>
    <script src="template/js/jquery.maskedinput.min.js"></script>
    <script src="template/js/choices.min.js"></script>
    <script src="template/js/scroll-anim.js"></script>
    <script src="template/js/popups.js"></script>
    <script src="template/js/scripts.js"></script>
</body>
</html>