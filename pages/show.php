<?php require '../config/db.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                                <a href="">Комедии</a>
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
    <div class="orders">
        <h1 class="parentmesh1">Фильмы-Комедии</h1>
        <div class="fotre">
            <div class="parentmes">
                <img src="../images/grodxa.jpg">
            </div>
            <div class="default">
                <h1>На Рубле без рубля (Фильм 2023)</h1>
                <div class="dicript">
                    <p class="padal">2023 1ч.46 мин. 18+</p>
                    <p class="goter">Россия. Комедии. Русские</p>
                    <p class="spiun">FullHD <i class="fa-solid fa-volume-low" style="color: #C4C2C3;"> РУС</i></p>
                </div>
                <div class="entries">
                    <a href="">
                        <div class="watch">
                            <img src="../images/imged.jpg">
                            <p>Рейтинг Иви</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="watch">
                            <img src="../images/desc.jpg">
                            <p>Джемре Байсел</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="watch">
                            <img src="../images/noober.jpg">
                            <p>Асуде Калебек</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="watch">
                            <img src="../images/photo.jpg">
                            <p>Шенай Гюрлер</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="watch">
                            <img src="../images/imged.jpg">
                            <p>Ураз Кайгыла</p>
                        </div>
                    </a>
                </div>
                <div class="button_block">
                    <div class="article_button">
                        <button><i class="fa-solid fa-play" style="color: #c5c5c8;"></i> Трейлер</button>
                    </div>
                    <div class="book_mak_block">
                        <button><i class="fa-regular fa-bookmark" style="color: #c5c5c8;"></i></button>
                    </div>
                    <div class="share_block">
                        <button><i class="fa-solid fa-share" style="color: #c5c5c8;"></i></button>
                    </div>
                </div>
                <div class="clause_text">
                    <div class="topper">
                        <div class="text_detalis">
                            <p class="report">История жизни и невероятных спортивных достижений великой лыжницы Елены Вяльбе. Ещё в раннем детстве она вступила на тяжёлый путь профессионального спорта и добилась головокружительных высот вопреки непростым испытаниям. Вдохновляющая биографическая драма.</p><br>
                            <p class="report">Восьмилетняя девочка Лена из Магадана начинает заниматься лыжным спортом. Она сталкивается с трудностями, но не сдаётся и добивается важнейшей победы. В 1997 году Елена устанавливает рекорд на чемпионате мира в Норвегии – она выигрывает золото во всех пяти видах женской лыжной программы. Чтобы узнать, как сложилась жизнь знаменитой чемпионки, смотри онлайн на Иви «Белый снег».</p><br>
                            <p class="report">Приглашаем посмотреть фильм «Белый снег» в нашем онлайн-кинотеатре совершенно бесплатно в хорошем HD качестве. Приятного просмотра!</p>
                        </div>
                        <div class="watch_options">
                            <div class="gourd">
                                <p class="language_block">Языки</p>
                                <p class="art_block">Русский</p>
                            </div>
                            <div class="goper">
                                <p class="language_block">Субитры</p>
                                <p class="art_block">Русский Al</p>
                            </div>
                            <div class="botres">
                                <p class="vouin"><a href="">Изображение и звук.</a>Фактическое качество зависит от устройства и ограничений правообладателя.</p>
                            </div>
                            <div class="bosher">
                                <p class="setting_block">FullHD</p>
                                <p class="setting_block">HD</p>
                                <p class="setting_block">1080</p>
                                <p class="setting_block">720</p>
                                <p class="setting_block">5.1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="svernut">
                    <p class="topin">Свернуть детали</p>
                </div>
            </div>
        </div>
        <div class="fointer">
            <h1>Отзывы</h1>
            <p>о сериале «Папины дочки. Новые»</p>
        </div>
        <div class="responsive">
            <a href="">
                <div class="comment_block">
                    <h1 class="resourse">Лена</h1>
                    <p class="centrum">Папины дочки новые, любимый ситком вернулся, спустя столько лет
                    </p>
                    <div class="iconses_">
                        <p class="gopew">9 октября 2023</p>
                        <i class="fa-regular fa-thumbs-up" style="color: #a8ab98;"></i>
                        <i class="fa-regular fa-thumbs-down fa-flip-horizontal" style="color: #a8ab98;"></i>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="comment_block">
                    <h1 class="resourse">Лена</h1>
                    <p class="centrum">С удовольствием посмотрю новые приключения семейства Васнецовых
                    </p>
                    <div class="iconses_">
                        <p class="gopew">9 октября 2023</p>
                        <i class="fa-regular fa-thumbs-up" style="color: #a8ab98;"></i>
                        <i class="fa-regular fa-thumbs-down fa-flip-horizontal" style="color: #a8ab98;"></i>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="comment_block">
                    <h1 class="resourse">Лена</h1>
                    <p class="centrum">В детстве смотрела сериал с другим ощущением. .
                    </p>
                    <div class="iconses_">
                        <p class="gopew">9 октября 2023</p>
                        <i class="fa-regular fa-thumbs-up" style="color: #a8ab98;"></i>
                        <i class="fa-regular fa-thumbs-down fa-flip-horizontal" style="color: #a8ab98;"></i>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="comment_block">
                    <h1 class="resourse">Лена</h1>
                    <p class="centrum">В детстве смотрела сериал с другим ощущением. .
                    </p>
                    <div class="iconses_">
                        <p class="gopew">9 октября 2023</p>
                        <i class="fa-regular fa-thumbs-up" style="color: #a8ab98;"></i>
                        <i class="fa-regular fa-thumbs-down fa-flip-horizontal" style="color: #a8ab98;"></i>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="comment_block">
                    <h1 class="resourse">Лена</h1>
                    <p class="centrum">Хот здесь без закадрового смеха. Старую часть из за этого тупого
                    </p>
                    <div class="iconses_">
                        <p class="gopew">9 октября 2023</p>
                        <i class="fa-regular fa-thumbs-up" style="color: #a8ab98;"></i>
                        <i class="fa-regular fa-thumbs-down fa-flip-horizontal" style="color: #a8ab98;"></i>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="comment_block">
                    <h1 class="resourse">Лена</h1>
                    <p class="centrum">Честно,не ожидал такого!!! молодцы!!! самое главное что есть посыл.
                    </p>
                    <div class="iconses_">
                        <p class="gopew">9 октября 2023</p>
                        <i class="fa-regular fa-thumbs-up" style="color: #a8ab98;"></i>
                        <i class="fa-regular fa-thumbs-down fa-flip-horizontal" style="color: #a8ab98;"></i>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="comment_block">
                    <h1 class="resourse">Лена</h1>
                    <p class="centrum">ВЫ все такие классные очень хорошо как будто хорошо!!!!
                    </p>
                    <div class="iconses_">
                        <p class="gopew">9 октября 2023</p>
                        <i class="fa-regular fa-thumbs-up" style="color: #a8ab98;"></i>
                        <i class="fa-regular fa-thumbs-down fa-flip-horizontal" style="color: #a8ab98;"></i>
                    </div>
                </div>
            </a>
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
        <script src="../js/about_me.js"></script>
        <script src="../js/main.js"></script>
</body>

</html>