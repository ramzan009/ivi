<?php require '../config/db.php';?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комедии смотреть онлайн бесплатно</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,600;6..12,700;6..12,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="menu">
        <div class="inside">
            <div class="logo">
                <a href="../index.html"><img class="img_log" src="../images/logo.svg"></a>
            </div>
            <div class="menu_ivi">
                <ul>
                    <li><a href="">Мой Иви</a></li>
                    <li><a href="">Что нового</a></li>
                    <li class="dropdown">
                        <a href="" class="dropdown-link">Фильмы</a>
                        <div class="block_show">
                            <div class="dropdown-link-shows">
                                <h1>Жанры</h1>
                                <a href="">Биография</a>
                                <a href="">Боевик</a>
                                <a href="">Военные</a>
                                <a href="">Детективы</a>
                                <a href="">Для всей семьи</a>
                                <a href="">Документальные</a>
                                <a href="">Дорамы</a>
                                <a href="">Драма</a>
                                <a href="">Исторические</a>
                                <a href="">Катастро</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1></h1>
                                <a href="pages/select.html">Комедия</a>
                                <a href="">Мелодрамы</a>
                                <a href="">Мистические</a>
                                <a href="">Приключение</a>
                                <a href="">Романтические</a>
                                <a href="">Телешоу</a>
                                <a href="">Триллеры</a>
                                <a href="">Турецкие</a>
                                <a href="">Ужасы</a>
                                <a href="">Фантастика</a>
                                <a href="">Фзнтези</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1>Страны</h1>
                                <a href="">Русские</a>
                                <a href="">Зарубежные</a>
                                <a href="">Американские</a>
                                <a href="">Корейские</a>
                                <a href="">Турецкие</a>
                                <h1>Годы</h1>
                                <a href="">Фильмы 2023 года</a>
                                <a href="">Фильмы 2022 года</a>
                                <a href="">Фильмы 2021 года</a>
                                <a href="">Фильмы 2020 года</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1></h1>
                                <a href="">Новинки</a>
                                <a href="">Иви.Рейтинг</a>
                                <a href="">Сериалы в HD</a>
                                <a href="">Бесплатные сериалы</a>
                                <a href="">Сериалы Amediateka</a>
                                <a href="">Сериалы Paramount Play</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-link">Сериалы</a>
                        <div class="block_show">
                            <div class="dropdown-link-shows">
                                <h1>Жанры</h1>
                                <a href="">Биография</a>
                                <a href="">Боевик</a>
                                <a href="">Военные</a>
                                <a href="">Детективы</a>
                                <a href="">Для всей семьи</a>
                                <a href="">Документальные</a>
                                <a href="">Дорамы</a>
                                <a href="">Драма</a>
                                <a href="">Исторические</a>
                                <a href="">Катастро</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1></h1>
                                <a href="">Медицинские</a>
                                <a href="">Мелодрамы</a>
                                <a href="">Мистические</a>
                                <a href="">Приключение</a>
                                <a href="">Романтические</a>
                                <a href="">Телешоу</a>
                                <a href="">Триллеры</a>
                                <a href="">Турецкие</a>
                                <a href="">Ужасы</a>
                                <a href="">Фантастика</a>
                                <a href="">Фзнтези</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1>Страны</h1>
                                <a href="">Русские</a>
                                <a href="">Зарубежные</a>
                                <a href="">Американские</a>
                                <a href="">Корейские</a>
                                <a href="">Турецкие</a>
                                <h1>Годы</h1>
                                <a href="">Фильмы 2023 года</a>
                                <a href="">Фильмы 2022 года</a>
                                <a href="">Фильмы 2021 года</a>
                                <a href="">Фильмы 2020 года</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1></h1>
                                <a href="">Новинки</a>
                                <a href="">Иви.Рейтинг</a>
                                <a href="">Сериалы в HD</a>
                                <a href="">Бесплатные сериалы</a>
                                <a href="">Сериалы Amediateka</a>
                                <a href="">Сериалы Paramount Play</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-link">Мультфильмы</a>
                        <div class="block_show">
                            <div class="dropdown-link-shows">
                                <h1>Жанры</h1>
                                <a href="">Аниме</a>
                                <a href="">Боевик</a>
                                <a href="">Детективы</a>
                                <a href="">Для взрослых</a>
                                <a href="">Для всей семьи</a>
                                <a href="">Для детей</a>
                                <a href="">Драма</a>
                                <a href="">История</a>
                                <a href="">Комедия</a>
                                <a href="">Кримильные</a>
                                <a href="">Мюзикл</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1></h1>
                                <a href="">Полнометражные</a>
                                <a href="">Приключение</a>
                                <a href="">Развивающие</a>
                                <a href="">Сериалы</a>
                                <a href="">Спорт</a>
                                <a href="">Триллер</a>
                                <a href="">Триллеры</a>
                                <a href="">Ужасы</a>
                                <a href="">Фантастика</a>
                                <a href="">Фзнтези</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1>Страны</h1>
                                <a href="">Советские</a>
                                <a href="">Русские</a>
                                <a href="">Американские</a>
                                <a href="">Зарубежные</a>
                                <h1>Годы</h1>
                                <a href="">Фильмы 2023 года</a>
                                <a href="">Фильмы 2022 года</a>
                                <a href="">Фильмы 2021 года</a>
                                <a href="">Фильмы 2020 года</a>
                            </div>
                            <div class="dropdown-link-shows">
                                <h1></h1>
                                <a href="">Новинки</a>
                                <a href="">Мультики в HD</a>
                                <a href="">Мультики Paramount Play</a>
                                <a href="">Мульфилмы Dreamworks</a>
                                <a href="">Мультфильмы СТС Kids</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="">TV+</a></li>
                </ul>
            </div>
            <div class="profile">
                <ul>
                    <li class="group"><i class="fa-solid fa-magnifying-glass search"><a href=""> Поиск</a></i></li>
                    <li><a href=""><i class="fa-regular fa-bell bores"></i></a></li>
                    <li><i class="fa-regular fa-user ofice"><a href=""> Войти</a></i></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="revision">
        <div class="botver">
            <a href="">Мой Иви / </a>
            <a href="">Фильмы / </a>
            <a href="">Комедии</a>
        </div>
        <div class="rechar">
            <div class="noyters">
                <h1>Комедии</h1>
                <p class="gordes">Комедии, Все страны, Все годы</p>
                <p class="gordes">Любишь смотреть онлайн комедии с участием Эдди Мёрфи, Джима Керри или Адама Сэндлера? Считаешь лучшим кино именно комедийные фильмы, которые вызывают смех и улыбки? В таком случае добро пожаловать на Иви! Любая кинокомедия из списка – это отличный способ поднять себе настроение. Но что долго говорить: лучше смотреть культовые фильмы – комедии со всего света прямо сейчас.</p><br>
                <p class="gordes">Если начинаешь смотреть бесплатно комедии, остановиться уже тяжело. Тем более что на Иви найдётся что-то интересное для всех ценителей юмора и веселья. Советская классика, оригинальные российские хиты, лучшие комедии зарубежного производства: в коллекции Иви можно подыскать себе картину на свой вкус.</p><br>
                <p class="gordes">Многим может ошибочно показаться, что этот жанр – один из самых простых в кинематографе. На самом деле, смешить людей – особое искусство. Но для талантливых режиссёров нет невозможного. И чтобы убедиться в этом, смотри новые отечественные и зарубежные комедии бесплатно онлайн в отличном качестве.</p><br>
                <p class="gordes">Смотреть кинокомедии-новинки онлайн – значит, неустанно удивляться разнообразию тем, сюжетов и курьёзных ситуаций. Так, например, фильм может представлять собой игру с переодеванием, пародию, политическую сатиру, юмористический рассказ об отношениях между мужчинами и женщинами и т. д. Смотреть комедии в хорошем качестве онлайн легко и удобно вместе с Иви!</p>
            </div>
            <div class="divser">
                <p class="wargers">Развернуть</p>
            </div>
        </div>
        <div class="selct_block">
            <div class="bouter">
                <select name="" id="">
                    <option value="">Жанры</option>
                    <option value="">Артхаус</option>
                    <option value="">Вестерн</option>
                    <option value="">Для детей</option>
                    <option value="">Зарубежные</option>
                </select>
                <select name="" id="">
                    <option value="">Поджанры</option>
                    <option value="">Артхаус</option>
                    <option value="">Вестерн</option>
                    <option value="">Для детей</option>
                    <option value="">Зарубежные</option>
                </select>
                <select name="" id="">
                    <option value="">Страны</option>
                    <option value="">Артхаус</option>
                    <option value="">Вестерн</option>
                    <option value="">Для детей</option>
                    <option value="">Зарубежные</option>
                </select>
                <select name="" id="">
                    <option value="">Годы</option>
                    <option value="">Артхаус</option>
                    <option value="">Вестерн</option>
                    <option value="">Для детей</option>
                    <option value="">Зарубежные</option>
                </select>
                <select name="" id="">
                    <option value="">Рейтинг Иви</option>
                    <option value="">Артхаус</option>
                    <option value="">Вестерн</option>
                    <option value="">Для детей</option>
                    <option value="">Зарубежные</option>
                </select>
            </div>
            <div class="fotres_grvniy">
                <div class="setnins_block">
                    <a href=""> <i class="fa-solid fa-plus" style="color: #ffffff;"></i> Бесплатные</a>
                </div>
                <div class="setnins_block">
                    <a href=""> <i class="fa-solid fa-plus" style="color: #ffffff;"></i> По подписке</a>
                </div>
                  <div class="setnins_block">
                    <a href=""> <i class="fa-solid fa-plus" style="color: #ffffff;"></i> На языке оригинала</a>
                </div>
                  <div class="setnins_block">
                    <a href=""> <i class="fa-solid fa-plus" style="color: #ffffff;"></i> С субтитрами</a>
                </div>
                  <div class="setnins_block">
                    <a href=""> <i class="fa-solid fa-plus" style="color: #ffffff;"></i> Объёмный звук</a>
                </div>
            </div>
            <div class="utersmer">
                <a href=""> <i class="fa-solid fa-x" style="color: #f7f7f7;"></i> Сбросить фильтры</a>
            </div>
        </div>
          <main class="main_block">
        <div class="center_block">
            <div class="articles_block">
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>1 сезона</span>
                        </div>
                        <img class="photo_k" src="../images/киносайт.jpg">
                        <h1 class="fill">Заснеженное Рож...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,1</h1>
                            <p>2022, Турция, Турецкие</p>
                            <span>2 сезона</span>
                        </div>
                        <img class="photo_k" src="../images/kino.jpg">
                        <h1 class="fill">Отель &laquo;Белград&raquo; </h1>
                        <p class="fousred">Подписк</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,6</h1>
                            <p>2018-2023, Россия,...</p>
                            <span>6 сезона</span>
                        </div>
                        <img class="photo_k" src="../images/rojulun.jpg">
                        <h1 class="fill">Семья</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,3</h1>
                            <p>2015, Детективы</p>
                            <span>6 сезона</span>
                        </div>
                        <img class="photo_k" src="../images/dowload.jpg">
                        <h1 class="fill">Пёс</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,4</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>2 сезона</span>
                        </div>
                        <img class="photo_k" src="../images/img.jpg">
                        <h1 class="fill">Такси под прикры...</h1>
                        <p class="fousred">Подписка</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,7</h1>
                            <p>2020-2021, Турция,...</p>
                            <span>2 сезона</span>
                        </div>
                        <img class="photo_k" src="../images/hore.jpg">
                        <h1 class="fill">Постучись в мою...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,4</h1>
                            <p>2023, Турция, Мелодрамы</p>
                            <span>1 сезона</span>
                        </div>
                        <img class="photo_k" src="../images/haver.jpg">
                        <h1 class="fill">Правосудие (Приг...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
            </div>
            <div class="articles_block">
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,3</h1>
                            <p>2010, Россия, Комедейные</p>
                            <span>85 минут</span>
                        </div>
                        <img class="photo_k" src="../images/киносайт.jpg">
                        <h1 class="fill">Заснеженное Рож...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,0</h1>
                            <p>2023, Россия, Фэнтези</p>
                            <span>89 минут</span>
                        </div>
                        <img class="photo_k" src="../images/kino.jpg">
                        <h1 class="fill">Отель &laquo;Белград&raquo; </h1>
                        <p class="fousred">Подписк</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>7,4</h1>
                            <p>2017, Россия, Комедейные</p>
                            <span>80 минут</span>
                        </div>
                        <img class="photo_k" src="../images/rojulun.jpg">
                        <h1 class="fill">Семья</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,4</h1>
                            <p>2023, Россия, Семейные</p>
                            <span>112 минут</span>
                        </div>
                        <img class="photo_k" src="../images/dowload.jpg">
                        <h1 class="fill">Пёс</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>7,5</h1>
                            <p>2016, Россия, Комедейные</p>
                            <span>86 минут</span>
                        </div>
                        <img class="photo_k" src="../images/img.jpg">
                        <h1 class="fill">Такси под прикры...</h1>
                        <p class="fousred">Подписка</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,1</h1>
                            <p>2020, Россия, Драмы</p>
                            <span>101 минута</span>
                        </div>
                        <img class="photo_k" src="../images/hore.jpg">
                        <h1 class="fill">Постучись в мою...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>7,2</h1>
                            <p>2022, Россия, Комедейные</p>
                            <span>94 минуты</span>
                        </div>
                        <img class="photo_k" src="../images/haver.jpg">
                        <h1 class="fill">Правосудие (Приг...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
            </div>
            <div class="articles_block">
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>1 сезон</span>
                        </div>
                        <img class="photo_k" src="../images/киносайт.jpg">
                        <h1 class="fill">Заснеженное Рож...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,7</h1>
                            <p>2015, США, Драмы</p>
                            <span>108 минут</span>
                        </div>
                        <img class="photo_k" src="../images/kino.jpg">
                        <h1 class="fill">Отель &laquo;Белград&raquo; </h1>
                        <p class="fousred">Подписк</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2022, Россия, Комедии</p>
                            <span>106 минут</span>
                        </div>
                        <img class="photo_k" src="../images/rojulun.jpg">
                        <h1 class="fill">Семья</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,8</h1>
                            <p>2018, Россия, Комедейные</p>
                            <span>290 минут</span>
                        </div>
                        <img class="photo_k" src="../images/dowload.jpg">
                        <h1 class="fill">Пёс</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2012, Россия, Комедейные</p>
                            <span>8 сезон</span>
                        </div>
                        <img class="photo_k" src="../images/img.jpg">
                        <h1 class="fill">Такси под прикры...</h1>
                        <p class="fousred">Подписка</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>1 сезон</span>
                        </div>
                        <img class="photo_k" src="../images/hore.jpg">
                        <h1 class="fill">Постучись в мою...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="../pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>6,9</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>1 сезон</span>
                        </div>
                        <img class="photo_k" src="../images/haver.jpg">
                        <h1 class="fill">Правосудие (Приг...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
            </div>
        </div>
                <footer>
            <div class="fopwer">
                <div class="footer_block">
                    <h1>О нас</h1>
                    <ul>
                        <li><a href="">О компании</a></li>
                        <li><a href="">Вакансии</a></li>
                        <li><a href="">Программа бета-тестирования</a></li>
                        <li><a href="">Информация для партнёров</a></li>
                        <li><a href="">Размещение рекламы</a></li>
                        <li><a href="">Пользовательское соглашение</a></li>
                        <li><a href="">Политика конфиденциальности</a></li>
                        <li><a href="">Комплаенс</a></li>
                    </ul>
                </div>
                <div class="footer_block">
                    <h1>Разделы</h1>
                    <ul>
                        <li><a href="">Мой Иви</a></li>
                        <li><a href="">Что нового</a></li>
                        <li><a href="">Фильмы</a></li>
                        <li><a href="">Сериалы</a></li>
                        <li><a href="">Мультфильмы</a></li>
                        <li><a href="">TV+</a></li>
                        <li><a href="">Что посмотреть</a></li>
                        <li><a href="">Активация сертификата</a></li>
                    </ul>
                </div>
                <div class="footer_block">
                    <h1>Служба поддержки</h1>
                    <ul>
                        <li><a href="">Мы всегда готовы вам помочь.24/7</a></li>
                        <li><button class="bat_block">Написать в чате</button></li>
                        <li><a href=""><i class="fa-regular fa-envelope gosres" style="color: #ffffff;"></i></a> <a href=""><i class="fa-solid fa-phone gosres" style="color: #ffffff;"></i></a></li>
                        <li><a href="">ask.ivi.ru</a></li>
                        <li><a href="">Ответы на вопросы</a></li>
                    </ul>
                </div>
            </div>
            <p class="store">© 2023 ООО «Иви.ру»</p>
            <p class="order_work">HBO ® and related service marks are the property of Home Box Office, Inc</p><br>
        </footer>
    </div>
    <div class="modal">
        <div class="close_block">
            <i class="fa-solid fa-xmark item_modal" style="color: #9f9da4;"></i>
        </div>
        <div class="selection">
            <div class="cores_block">
                <h1 class="joiter">Поиск</h1>
                <div class="icon_block">
                    <input class="input_block" type="text" placeholder="Фильмы,персены,жанры">
                    <i class="fa-solid fa-magnifying-glass search_glass"></i>
                </div>
            </div>
            <div class="presets">
                <p class="presets_content"><a href="">Премьеры фильмов</a></p>
                <p class="presets_content"><a href="">Новинки подписки</a></p>
                <p class="presets_content"><a href="">Сериалы Amediateka</a></p>
                <p class="presets_content"><a href="">Высокий рейтинг</a></p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a86f8867e8.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/select.js"></script>
</body>

</html>