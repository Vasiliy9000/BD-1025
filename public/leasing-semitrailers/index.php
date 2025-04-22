<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

global $APPLICATION;
?>

    <style>
        /* Контейнер для секций */
        .sections-container {
            display: grid;
            grid-template-columns: 45% 55%;
            gap: 24px;
        }

        /* Общие стили секций */
        .section {
            display: flex;
            flex-direction: column;
            background: #f2f2fa;
            padding: 40px;
            border-radius: 4px 0 4px 4px;
            width: calc(100% - 24px);
        }

        .section-title {
            height: 2vh;
        }

        .section-subtitle {
            height: 8vh;
        }

        /* Сетка товаров */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            grid-auto-rows: 1fr; /* Важно! Выравнивает высоту строк */
            justify-content: center;
            height: 50vh; /
        }

        /* Карточка иконок */
        .product-card {
            height: 100%; /* Занимает всю доступную высоту ячейки */
            padding: 20px; /* Единый отступ для всех карточек */
            border-radius: 4px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Карточка показателей */
        .indicator-card {
            height: 100%; /* Занимает всю доступную высоту ячейки */
            padding: 20px; /* Единый отступ для всех карточек */
            border-radius: 4px;
            display: flex;
            text-align: left;
            flex-direction: column;
            justify-content: space-between; /* Текст вверх, картинку вниз */
            align-items: start; /* Прижимает картинку влево */
            margin-top: auto; /* Прижимает картинку к низу */
        }

        .product-image {
            max-width: 70%;
            max-height: 70%;
            margin: auto;
        }

        /* Выравнивание содержимого внутри карточки */
        .product-card h3 {
            margin: 15px 0 0 0; /* Убираем ненужные отступы */
            align-self: flex-start; /* Прижимаем заголовок к левому краю */
        }

        .irs--flat .irs-bar:before {
            --c-accent: var(--c-fuel);
            --c-btn-cta: var(--c-accent);
            background: #FF5005;
        }

        .irs--flat .irs-handle {
            --c-accent: var(--c-fuel);
            --c-btn-cta: var(--c-accent);
            border: 2px solid #FF5005;
        }

        .margin-top-40 {
            position: relative;
            top: -40px;
        }

        .line-spacing-40 {
            position: relative;
            margin-top: 40px
        }

        .leasing-font-title {
            font: 500 24px / 24px var(--ff-heading);
        }

        .leasing-font {
            font: 500 26px / 24px var(--ff-heading);
        }

        @media (max-width: 1200px) {
            .folder::before {
                content: none;
            }

            .left-folder-leasing-semitrailers::before {
                content: "";
                width: 88px;
                height: 24px;
                position: relative;
                top: -67px;
                left: 44px;
                float: right;
                background:url(/local/templates/main/assets/img/folder-top.svg) 0 100% no-repeat;
            }

            .sections-container::before {
                content: "";
                width: 88px;
                height: 24px;
                position: relative;
                top: 24px;
                left: 352px;
                float: right;
                background:url(/local/templates/main/assets/img/folder-top.svg) 0 100% no-repeat;
            }

            .sections-container {
                grid-template-columns: 1fr;
            }
            .section {
                width: auto;
            }

            .products-grid {
                grid-auto-rows: minmax(100px, auto);
            }
        }

        @media (max-width: 1000px) {
            .sections-container::before {
                content: "";
                width: 88px;
                height: 24px;
                position: relative;
                top: 30px;
                left: 232px;
                float: right;
                background:url(/local/templates/main/assets/img/folder-top.svg) 0 100% no-repeat;
            }

            .sections-container {
                gap: 30px;
                width: auto;

            }

            .products-grid {
                grid-template-columns: 1fr;
                height: auto;
            }

            .sections-container {
                grid-template-columns: 1fr; /* Меняем на одну колонку */
            }

            .section {
                width: auto;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 1.5rem;
            }

            .section-subtitle {
                font-size: 1rem;
            }

            .section {
                width: auto;
            }
        }
    </style>

    <section class="content-hero fuel__hero justify-content-normal ">
        <div class="folder-white folder-gray">
            <div class="folder-white__body gray-background">
                <div class="leasing-semitrailers-truck-banner">
                    <div class="content-hero__body">
                        <h1 class="content-hero__heading">Лизинг тягачей и полуприцепов по ценам, доступным только крупным ТК</h1>
                        <p class="content-hero__copy">В среднем на 20% дешевле и в 7 раз быстрее, чем в других лизинговых компаниях</p>
                        <p class="content-hero__cta">
                            <a href="#apply" class="btn-cta orange-background">Сократить расходы</a>
                        </p>
                    </div>
                    <img
                        class="content-hero__image"
                        src="<?= SITE_TEMPLATE_PATH ?>/assets/img/orange-truck.png"
                        alt=""
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="vacancies-us fuel-pros">
        <div class="vacancies-us__inner">
            <div class="vacancies-us__body.leasing-semitrailers">
                <h2 class="vacancies-us__heading">Быстрее, чем где-либо</h2>
                <div class="vacancies-us__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="vacancies-us__item vacancies-us__item-leasing-semitrailers folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Финансируем своими деньгами, без посредников</h3>
                                        <div class="vacancies-us__item-image">
                                            <img
                                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/finance-our-money.png" alt=""
                                            ></div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item vacancies-us__item-leasing-semitrailers folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Техника поставлена на учет, застрахована и готова в рейс</h3>
                                        <div class="vacancies-us__item-image"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/truck-cabin.png" alt=""
                                            ></div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item vacancies-us__item-leasing-semitrailers folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Одобряем заявки за один день</h3>
                                        <div class="vacancies-us__item-image"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/ok-icon.png" alt=""
                                            ></div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item vacancies-us__item-leasing-semitrailers folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Все документы подписываем по ЭДО</h3>
                                        <div class="vacancies-us__item-image"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/edo-icon.png" alt=""
                                            ></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vacancies-us fuel-pros">
        <div class="vacancies-us__inner">
            <div class="vacancies-us__body.leasing-semitrailers">
                <h2 class="vacancies-us__heading">И на 20% дешевле</h2>
                <div class="vacancies-us__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="vacancies-us__item-leasing-semitrailers">
                                    <h4 class="vacancies-us__item-heading gray-text">Что сравниваем</h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40">Цена фуры (с НДС 20%)</h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40">Первоначальный взнос</h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40">Срок договора</h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40">Что сравниваем</h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40">Итоговая цена</h4>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class=" vacancies-us__item-leasing-semitrailers">
                                    <h4 class="vacancies-us__item-heading gray-text">Покупка в Карго.Лизинг</h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>14 340 000 ₽ </strong></h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>2 868 000 ₽ </strong></h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>334 940 ₽ </strong></h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>60 мес. </strong></h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>22 964 400 ₽ </strong></h4>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class=" vacancies-us__item-leasing-semitrailers">
                                    <h4 class="vacancies-us__item-heading gray-text">Покупка в другой лизинговой</h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>14 340 000 ₽ </strong></h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>2 868 000 ₽ </strong></h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>378 235 ₽ </strong></h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>60 мес. </strong></h4>
                                    <h4 class="vacancies-us__item-heading line-spacing-40"><strong>25 562 100 ₽ </strong></h4>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item-leasing-semitrailers margin-top-40 folder-sm">
                                    <div class="folder-sm__body ">
                                        <h4 class="vacancies-us__item-heading leasing-font-title">Выгода на одной фуре</h4>
                                        <div class="line-spacing-40"> Цена фуры (с НДС 20%)</div>
                                        <h4 class="vacancies-us__item-heading leasing-font"><strong>14 340 000 ₽</strong></h4>
                                        <div class="line-spacing-40"> Переплата за 60 мес. в Карго.Лизинг</div>
                                        <h4 class="vacancies-us__item-heading leasing-font"><strong>8 624 400 ₽</strong></h4>
                                        <div class="line-spacing-40"> Переплата за 60 мес. в другой компании</div>
                                        <h4 class="vacancies-us__item-heading leasing-font"><strong>11 222 100 ₽</strong></h4>
                                        <div class="line-spacing-40"> Насколько покупка в Карго.Лизинг дешевле, чем в других компаниях </div>
                                        <h4 class="vacancies-us__item-heading leasing-font"><strong>23% &nbsp;&nbsp;&nbsp; 2 597 700 ₽</strong></h4>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-apply" id="apply">
        <div class="folder">
            <div class="home-apply__body">
                <div class="hind-form-section home-apply__body">
                    <form
                        action="#"
                        id="form"
                        class="form-apply form left-folder-leasing-semitrailers flex-55"
                        data-steps="2"
                    >
                        <h2 class="form-apply__heading">
                            Есть предложение от других лизинговых компаний? Сделаем дешевле </h2>

                        <div class="form-apply__body">
                            <div class="form-apply__progress">
                                <div class="form-apply__progress-label">
                                    <span>1</span> шаг <em>из 2</em>
                                </div>
                                <div class="form-apply__progress-bar orange-background">
                                    <div class="form-apply__progress-handler orange" style="width: 50%"></div>
                                </div>
                            </div>

                            <p class="form-apply__label">Заполните контактные данные</p>

                            <div
                                class="form-apply-form-step" data-step="1" data-title="Заполните контактные данные"
                            >
                                <div class="form__item">
                                    <input
                                        type="tel"
                                        class="form__input _tel"
                                        placeholder="Мобильный телефон"
                                        data-message="Введите номер телефона"
                                        required
                                    >
                                </div>
                                <div class="form__item">
                                    <input
                                        type="text"
                                        class="form__input _text"
                                        placeholder="Имя"
                                        data-message="Введите фамилию и имя"
                                        required
                                    >
                                </div>
                            </div>

                            <div
                                class="form-apply-form-step" data-step="2" data-title=""
                            >

                                <div class="tabs-select__select">
                                    <div class="select">
                                        <div class="select__label">Что планируете покупать?</div>
                                        <input type="hidden" value="" class="select__input">
                                        <div class="select__list">
                                            <div class="select__list-inner">
                                                <div class="select__list-item" data-val="1">Тягач</div>
                                                <div class="select__list-item" data-val="2">Полуприцеп</div>
                                                <div class="select__list-item" data-val="3">Фуру</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form__item">
                                    <input
                                        type="tel"
                                        class="form__input _digits orange-background"
                                        value="0"
                                        placeholder="С каким авансом?"
                                        data-message=""
                                        required
                                    >
                                    <div class="form__input-range" data-min="0" data-max="49" data-step="1">
                                        <input type="hidden" class="form__input-range-slider" placeholder="%">
                                        <div class="form__input-range-legend">
                                            <span>0 %</span> <span>49 %</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form__item">
                                    <input
                                        type="text"
                                        class="form__input _digits"
                                        placeholder="Сколько стоит предмет лизинга?"
                                        data-message="Введите сумму"
                                        required
                                    >
                                </div>
                            </div>

                            <div class="form__submit">
                                <button class="btn-cta orange-background" type="submit">
                                    Продолжить
                                </button>
                                <p class="form__submit-agreement">
                                    Нажимая на кнопку «<span class="form__submit-agreement-text">Продолжить</span>», вы принимаете согласие на
                                    <a href="/policy" target="_blank">обработку персональных данных</a>
                                </p>
                            </div>

                            <div class="form-apply__back">
                                    <span class="form-apply__back-link"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                        ><path
                                                fill="#20212B"
                                                fill-rule="evenodd"
                                                d="M13.09 5.777 7.527 11.34a.933.933 0 0 0 0 1.32l5.563 5.563 1.131-1.132L9.131 12l5.09-5.091-1.131-1.132Z"
                                                clip-rule="evenodd"
                                            /></svg>Назад</span>
                            </div>
                        </div>
                    </form>

                    <div class="folder__body-leasing-semitrailers">
                        <div class="home-apply__image">
                            <div class="wagnermaier-parent">
                                <h3 class="vacancies-us__item-heading">
                                    Забронируйте WAGNERMAIER на стенде и получите беспроцентную рассрочку на 3 года </h3>
                                <img
                                    class="freepik-translucent-orange-3d-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/assets/img/pricep.png"
                                    alt="Грузовой полуприцеп Wagnermaier"
                                >

                                <div class="btn-leasing">
                                    <button class="btn-cta orange-background" form="form">
                                        Забронировать
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="home-apply">
        <div class="home-apply__body">
            <div class="sections-container folder">
                <section class="section">
                    <h1 class="section-title">Продаем</h1>
                    <p class="section-subtitle dark-text">только самые эффективные марки тягачей и полуприцепов</p>

                    <div class="products-grid">

                        <div class="product-card dark-background">
                            <img
                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/w-icon.png"
                                alt="Wagnermaier"
                                class="product-image"
                            >
                        </div>

                        <div class="product-card white-background">
                            <img
                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/helfimmer.png"
                                alt="helfimmer"
                                class="product-image"
                            >
                        </div>
                        <div class="product-card white-background">
                            <img
                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/sitrak.png" alt="sitrak" class="product-image"
                            >
                        </div>
                        <div class="product-card dark-background">
                            <img
                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/dongfeng.png"
                                alt="dongfeng"
                                class="product-image"
                            >
                        </div>
                    </div>

                </section>
                <section class="section">
                    <h1 class="section-title">Как выбираем марки?</h1>
                    <p class="section-subtitle dark-text">каждый год проводим тендер по следующим показателям</p>

                    <div class="products-grid">
                        <div class="indicator-card white-background">
                            <h4>Требует меньше денег на ремонт и ТО</h4>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/calculator.png" alt="">
                        </div>
                        <div class="indicator-card white-background">
                            <h4>Ломается редко, а ремонтируется быстро</h4>
                            <img
                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/little-truck.png" alt=""
                            >
                        </div>
                        <div class="indicator-card white-background">
                            <h4>Медленно дешевеет с годами</h4>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/money.png" alt="">
                        </div>
                        <div class="indicator-card orange-background white-text">
                            <h4>Лучшая эффективность — это наименьшее количество расходов на один километр пути</h4>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </section>

    <section class="home-apply" id="apply">
        <div class="folder">
            <div class="folder__body">
                <div class="home-apply__body">
                    <form action="#" class="form-apply form" data-steps="1">
                        <h2 class="form-apply__heading">Начните снижать себестоимость перевозок уже сегодня</h2>
                        <div class="form-apply__body">
                            <p class="form-apply__label">Заполните контактные данные</p>
                            <div class="form-apply-form-step" data-step="1" data-title="Заполните контактные данные">
                                <div class="form__item">
                                    <input
                                        type="text"
                                        class="form__input _text"
                                        placeholder="Фамилия, имя и отчество"
                                        data-message="Введите фамилию и имя"
                                        required
                                    />
                                </div>
                                <div class="form__item">
                                    <input
                                        type="tel"
                                        class="form__input _tel"
                                        placeholder="Мобильный телефон"
                                        data-message="Введите номер телефона"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form__submit">
                                <button class="btn-cta" type="submit">Снизить расходы</button>
                                <p class="form__submit-agreement">Нажимая на&nbsp;кнопку «<span class="form__submit-agreement-btn">Продолжить</span>», вы&nbsp;принимаете согласие на&nbsp;<a
                                        href="/policy" target="_blank"
                                    >обработку персональных данных</a></p>
                            </div>
                            <div class="form-apply__back">
                                <span class="form-apply__back-link"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    ><path
                                            fill="#20212B"
                                            fill-rule="evenodd"
                                            d="M13.09 5.777 7.527 11.34a.933.933 0 0 0 0 1.32l5.563 5.563 1.131-1.132L9.131 12l5.09-5.091-1.131-1.132Z"
                                            clip-rule="evenodd"
                                        /></svg>Назад</span>
                            </div>
                        </div>
                    </form>
                    <div class="home-apply__image">
                        <video muted autoplay loop playsinline inline>
                            <source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/home-intro-m.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
