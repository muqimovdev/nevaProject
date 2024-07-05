<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>NevaTime | Catalog</title>

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
        href="{{ asset('img/compressed_2ea441a6f353c35be598169052dadd0b.webp')  }}"
        type="image/x-icon"
    />
    <link rel="stylesheet" href="{{asset('css/google_font.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/root.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}"/>
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
                <li><a href="{{ route('home.page') }}">Главная</a></li>
                <li>
                    <a href="{{ route('catalog.page')  }}">Часы</a>
                </li>
                <li><a href="#">Сумки</a></li>
                <li><a href="#">Рюкзаки</a></li>
                <li><a href="#">Кошельки</a></li>
                <li><a href="#">Браслеты</a></li>
                <li><a href="{{ route('certificate.page') }}">Гарантия</a></li>
                <li><a href="{{ route('delivery.page') }}">Доставка</a></li>
                <li><a href="#">Отзывы</a></li>
                <li>
                    <a href="#">Для покупателей</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header-content">
        <div class="container">
            <div>
                <h1>Сезонные скидки в фирменном магазине Michael Kors</h1>
                <p>
                    Только сейчас скидки на оригинальные аксессуары MICHAEL KORS до
                    40% ! Успей купить наручные часы, браслеты, сумки, рюкзаки и
                    кошельки по лучшей цене!
                </p>
                <h4>* Акция действительна до 31.03.2024 года включительно.</h4>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <h3><a href="{{ route('home.page') }}" style="color: black; border-bottom: 1px solid black">Главная</a>/Женские
            часы Michael Kors Оригинал</h3>

        <section class="watches">
            <div class="title">
                <h1>Женские часы Michael Kors</h1>
                <div class="modal-search">
                    <i class="fas fa-thin fa-magnifying-glass"></i>
                    <input
                        type="search"
                        name="search"
                        id=""
                        placeholder="Поиск часов по артикулу"
                    />
                </div>
            </div>
            <div class="items">
                <div>
                    <div class="group-1">
                        <div class="watch_1">
                            <img src="{{ asset('img/image 1.png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_2">
                            <img src="{{ asset('img/image 1(1).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_3">
                            <img src="{{ asset('img/image 1(2).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_4">
                            <img src="{{ asset('img/image 1(3).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                    </div>
                    <div class="group-2">
                        <div class="watch_5">
                            <img src="{{ asset('img/image 1(2).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_6">
                            <img src="{{ asset('img/image 1(3).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_7">
                            <img src="{{ asset('img/image 1(1).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_8">
                            <img src="{{ asset('img/image 1.png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                    </div>
                    <div class="group-3">
                        <div class="watch_9">
                            <img src="{{ asset('img/image 1.png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_10">
                            <img src="{{ asset('img/image 1(1).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_11">
                            <img src="{{ asset('img/image 1(2).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_12">
                            <img src="{{ asset('img/image 1(3).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                    </div>
                    <div class="group-4">
                        <div class="watch_13">
                            <img src="{{ asset('img/image 1(2).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_14">
                            <img src="{{ asset('img/image 1(3).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_15">
                            <img src="{{ asset('img/image 1(1).png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                        <div class="watch_16">
                            <img src="{{ asset('img/image 1.png')  }}" alt="rolex-1"/>
                            <h2>Часы Michael Kors MK3178</h2>
                            <h3>
                                <del style="text-decoration-line: line-through">25 000 ₽</del>
                                11 900₽
                            </h3>
                            <button>В КОРЗИНУ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn">
                <button class="btn-view-more">ПОКАЗАТЬ ЕЩЕ</button>
            </div>
        </section>
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
                <li><a href="{{ route('catalog.page') }}">Женские часы</a></li>
                <li><a href="{{ route('catalog.page') }}">Мужские часы</a></li>
                <li><a href="#">Сумки</a></li>
                <li><a href="#">Рюкзаки</a></li>
                <li><a href="#">Кошельки</a></li>
                <li><a href="#">Браслеты</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('certificate.page') }}">Гарантия</a></li>
                <li><a href="{{ route('delivery.page') }}">Доставка</a></li>
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
                    <img src="{{ asset('img/004-youtube(1).png')  }}" alt="004-youtube"/>
                    <img src="{{ asset('img/015-vkontakte(1).png')  }}" alt="015-wkontakte"/>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
