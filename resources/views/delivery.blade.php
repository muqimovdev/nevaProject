<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>NevaTime | Catalog</title>

    <style>
        h3 {
            font-weight: 100;
            margin-bottom: 3rem;
        }

        h1 {
            font-size: 3rem;
            font-weight: 400;
            margin-bottom: 2rem;
        }

        ul li {
            margin-bottom: 1.5rem;
        }
    </style>

    <!-- Font Awesome 6.5.2 -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- Site Icon -->
    <link
        rel="shortcut icon"
        href="/Home/home_img/compressed_2ea441a6f353c35be598169052dadd0b.webp"
        type="image/x-icon"
    />
    <link rel="stylesheet" href="{{asset('css/google_font.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/root.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/delivery.css')}}"/>
</head>
<body>
<header>
    <div class="container">
        <div class="nav_contact">
            <div class="shopping_bag">
                <img src="{{ asset('img/Shopping bag.png') }}" alt="shopping_bag"/>
                <div>
                    <h5>Корзина (5):</h5>
                    <h4>34 000 ₽</h4>
                </div>
            </div>
            <div class="title">
                <h1>Neva Time</h1>
                <h4>
                    Фирменные аксессуары Michael Kors с доставкой по всей России
                </h4>
            </div>
            <div class="phone_number">
                <h2>8 (800) 302 79 15</h2>
                <p>Заказать обратный звонок</p>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#">Главная</a></li>
                <li>
                    <a href="#">Часы</a> <i class="fas fa-thin fa-chevron-down"></i>
                </li>
                <li><a href="#">Сумки</a></li>
                <li><a href="#">Рюкзаки</a></li>
                <li><a href="#">Кошельки</a></li>
                <li><a href="#">Браслеты</a></li>
                <li><a href="#">Гарантия</a></li>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Отзывы</a></li>
                <li>
                    <a href="#">Для покупателей</a>
                    <i class="fas fa-thin fa-chevron-down"></i>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header_content">
        <div class="container" style="display: flex">
            <div style="margin-top: 5rem">
                <h3>Главная/Доставка</h3>
                <h1>Доставка</h1>
                <ul>
                    <li>
                        &#183; Бесплатная и быстрая курьерская доставка в любую точку
                        России.
                    </li>
                    <li>
                        &#183; В среднем доставка по России занимает от 2-х до 5-ти
                        дней.
                    </li>
                    <li>&#183; Оплата производится после осмотра и примерки.</li>
                    <li>
                        &#183; В случае если Вам что-то не подойдет или не понравится,
                        доставка все равно будет бесплатной.
                    </li>
                    <li>&#183; Мы работаем с транспортными компаниями «СДЭК».</li>
                </ul>
            </div>
            <div class="delivery-car-map" style="margin-top: 10rem">
                <img
                    src="{{ asset('img/Map_of_Russia_-_Black_Earth 1.png') }}"
                    class="img-2"
                    style="position: relative; left: 20rem"
                    alt=""
                />
                <img
                    src="{{ asset('img/Group 2.png') }}"
                    class="img-1"
                    style="position: relative; left: 10rem; top: -15rem"
                    alt=""
                />
            </div>
        </div>
    </div>
</header>
<main>
    <section class="address">
        <div class="container">
            <h1>У нашей компании есть пункты выдачи в городах:</h1>
            <div class="groups">
                <div class="group-1">
                    <ul>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Москва</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i>
                                Санкт-Петербург</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Новосибирск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Екатеринбург</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Нижний
                                Новгород</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Казань</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Челябинск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Омск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Самара</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i>
                                Ростов-на-Дону</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Уфа</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="group-2">
                    <ul>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Красноярск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Пермь</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Воронеж</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Волгоград</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Краснодар</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Саратов</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Тюмень</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Тольятти</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Ижевск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Барнаул</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Иркутск</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="group-3">
                    <ul>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Ульяновск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Хабаровск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Ярославль</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Владивосток</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Махачкала</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Омск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Оренбург</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Кемерово</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Новокузнецк</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Рязань</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Астрахань</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="group-4">
                    <ul>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Пенза</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Липецк</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Тула</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Калининград</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Ставрополь</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Курск</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Улан — Удэ</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Тверь</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Белгород</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Симферополь</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fas fa-thin fa-location-dot"></i> Севастополь</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container">
            <div class="title">
                <h1>Остались вопросы?</h1>
                <h3>Заполните форму и мы свяжемся с Вами</h3>
            </div>
            <div class="inputs">
                <div class="inp">
                    <form action="#">
                        <input
                            type="text"
                            name="fullname"
                            id="firstInp"
                            placeholder="Ваше имя"
                        />
                        <input
                            type="text"
                            name="phone"
                            id="secondInp"
                            placeholder="Телефон"
                        />
                    </form>
                </div>
                <input
                    type="text"
                    name="comment"
                    id="thirdInp"
                    placeholder="Комментарий"
                />
            </div>
            <button id="newsletter-btn">ОТПРАВИТЬ</button>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="title">
            <div>
                <h1>Neva Time</h1>
                <h4>
                    Фирменные аксессуары Michael Kors с доставкой по всей России
                </h4>
                <h3>Подпишись на новинки и скидки</h3>
                <div class="inp-sub">
                    <input type="email" name="email" placeholder="E-mail"/>
                    <button>ОТПРАВИТЬ</button>
                </div>
            </div>
        </div>
        <div class="nav">
            <ul>
                <li><a href="#">Женские часы</a></li>
                <li><a href="#">Мужские часы</a></li>
                <li><a href="#">Сумки</a></li>
                <li><a href="#">Рюкзаки</a></li>
                <li><a href="#">Кошельки</a></li>
                <li><a href="#">Браслеты</a></li>
            </ul>
            <ul>
                <li><a href="#">Гарантия</a></li>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Другие бренды</a></li>
                <li><a href="#">Корпоративные подарки</a></li>
                <li><a href="#">О компании</a></li>
            </ul>
        </div>
        <div class="contact">
            <div>
                <h1>8 (800) 302 79 15</h1>
                <h3>Заказать обратный звонок</h3>
                <div class="social-account">
                    <img src="{{ asset('img/004-youtube.png(1)') }}" alt="004-youtube"/>
                    <img src="{{ asset('img/015-vkontakte.png(1)') }}" alt="015-wkontakte"/>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
