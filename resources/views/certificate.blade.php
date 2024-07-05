<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>NevaTime | Certificate</title>

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
        href="./home_img/compressed_2ea441a6f353c35be598169052dadd0b.webp"
        type="image/x-icon"
    />
    <!-- Font Awesome 6.5.2 -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('css/google_font.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/root.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/certificate.css')}}"/>
</head>
<body>
<header>
    <div class="container">
        <div class="nav_contact">
            <div class="shopping_bag">
                <img src="{{ asset('img/Shopping bag.png')  }}" alt="shopping_bag"/>
                <div>
                    <h5>Корзина (5):</h5>
                    <h4>34 000 ₽</h4>
                </div>
            </div>
            <div class="title">
                <h1>NEVA TIME</h1>
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
                <li><a href="{{ route('home.page') }}">Главная</a></li>
                <li>
                    <a href="{{ route('catalog.page') }}">Часы</a>
                </li>
                <li><a href="#cumka">Сумки</a></li>
                <li><a href="#rugzag">Рюкзаки</a></li>
                <li><a href="#kashlog">Кошельки</a></li>
                <li><a href="#braslet">Браслеты</a></li>
                <li><a href="{{ route('certificate.page') }}">Гарантия</a></li>
                <li><a href="{{ route('delivery.page') }}">Доставка</a></li>
                <li><a href="#">Отзывы</a></li>
                <li>
                    <a href=""
                    >Для покупателей</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="header_title">
                    <h1><a href="{{ route('home.page')  }}">Главная</a>/Подарочный сертификат</h1>

                    <div class="gift">
                        <h1>Подарочный сертификат</h1>
                        <p>
                            У Вашего близкого человека День Рождения, праздник, годовщина или Вы просто хотите
                            порадовать его, но не можете определиться с подарком? Тогда Вам идеально подойдут наши
                            подарочные сертификаты на 10.000, 15.000, 20.000 или 30.000 рублей!
                        </p>
                    </div>
                </div>
                <img src="./img/certifikat.png" alt=""/>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="adv">
        <h1 class="title_adv">Как это работает?</h1>
        <div class="services">
            <div class="service">
                <div><h1 class="servicetitle">01</h1></div>
                <h2>Официальный сайт, интернет магазин Michael Kors</h2>
                <h3>
                    Остерегайтесь контрафактных товаров Майкл Корс. На них не
                    распространяется официальная гарантия производителя.
                </h3>
            </div>
            <div class="service">
                <div><h1 class="servicetitle">02</h1></div>
                <h2>Официальный сайт, интернет магазин Michael Kors</h2>
                <h3>
                    Остерегайтесь контрафактных товаров Майкл Корс. На них не
                    распространяется официальная гарантия производителя.
                </h3>
            </div>
            <div class="service">
                <div><h1 class="servicetitle">03</h1></div>
                <h2>Официальный сайт, интернет магазин Michael Kors</h2>
                <h3>
                    Остерегайтесь контрафактных товаров Майкл Корс. На них не
                    распространяется официальная гарантия производителя.
                </h3>
            </div>
        </div>
    </div>
    <div class="adv1">
        <h1>Условия предельно просты</h1>
        <div class="ads">
            <div class="ad">
                <div><img src="./img/Calendar.png" alt=""/></div>
                <h2>Официальный сайт, интернет магазин Michael Kors</h2>
            </div>
            <div class="ad">
                <div><img src="./img/Calendar.png" alt=""/></div>
                <h2>Официальный сайт, интернет магазин Michael Kors</h2>
            </div>
            <div class="ad">
                <div><img src="./img/Calendar.png" alt=""/></div>
                <h2>Официальный сайт, интернет магазин Michael Kors</h2>
            </div>
        </div>
    </div>
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
                    <img src="{{ asset('img/004-youtube(1).png') }}" alt="004-youtube"/>
                    <img src="{{ asset('img/015-vkontakte(1).png') }}" alt="015-wkontakte"/>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
