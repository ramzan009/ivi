<?php require 'config/db.php';?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $config['title'];?>
    </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,600;6..12,700;6..12,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php require 'pages/includes/menu.php';?>
    <div class="wraper">
        <div class="slider">
            <div class="slider__item">
                <img src="images/photos.jpg">
            </div>
            <div class="slider__item">
                <img src="images/xas.jpg">
            </div>
            <div class="slider__item">
                <img src="images/dns.jpg">
            </div>
            <div class="slider__item">
                <img src="images/voin.jpg">
            </div>
            <div class="slider__item">
                <img src="images/brigada.jpg">
            </div>
        </div>
    </div>
    <main class="main_block">
        <div class="center_block">
            <div class="articles_block">
                <h1 class="dram"><a href="">Сериалы с высоким рейтингом по подписке </a><i class="fa-solid fa-chevron-right" style="color: #f7f7f7;"></i></h1>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>1 сезона</span>
                        </div>
                        <img class="photo_k" src="images/киносайт.jpg">
                        <h1 class="fill">Заснеженное Рож...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,1</h1>
                            <p>2022, Турция, Турецкие</p>
                            <span>2 сезона</span>
                        </div>
                        <img class="photo_k" src="images/kino.jpg">
                        <h1 class="fill">Отель &laquo;Белград&raquo; </h1>
                        <p class="fousred">Подписк</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,6</h1>
                            <p>2018-2023, Россия,...</p>
                            <span>6 сезона</span>
                        </div>
                        <img class="photo_k" src="images/rojulun.jpg">
                        <h1 class="fill">Семья</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,3</h1>
                            <p>2015, Детективы</p>
                            <span>6 сезона</span>
                        </div>
                        <img class="photo_k" src="images/dowload.jpg">
                        <h1 class="fill">Пёс</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,4</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>2 сезона</span>
                        </div>
                        <img class="photo_k" src="images/img.jpg">
                        <h1 class="fill">Такси под прикры...</h1>
                        <p class="fousred">Подписка</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,7</h1>
                            <p>2020-2021, Турция,...</p>
                            <span>2 сезона</span>
                        </div>
                        <img class="photo_k" src="images/hore.jpg">
                        <h1 class="fill">Постучись в мою...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,4</h1>
                            <p>2023, Турция, Мелодрамы</p>
                            <span>1 сезона</span>
                        </div>
                        <img class="photo_k" src="images/haver.jpg">
                        <h1 class="fill">Правосудие (Приг...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
            </div>
            <div class="articles_block">
                <h1 class="dram"><a href="">Драмы </a><i class="fa-solid fa-chevron-right" style="color: #f7f7f7;"></i></h1>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,3</h1>
                            <p>2010, Россия, Комедейные</p>
                            <span>85 минут</span>
                        </div>
                        <img class="photo_k" src="images/киносайт.jpg">
                        <h1 class="fill">Заснеженное Рож...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,0</h1>
                            <p>2023, Россия, Фэнтези</p>
                            <span>89 минут</span>
                        </div>
                        <img class="photo_k" src="images/kino.jpg">
                        <h1 class="fill">Отель &laquo;Белград&raquo;</h1>
                        <p class="fousred">Подписк</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>7,4</h1>
                            <p>2017, Россия, Комедейные</p>
                            <span>80 минут</span>
                        </div>
                        <img class="photo_k" src="images/rojulun.jpg">
                        <h1 class="fill">Семья</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,4</h1>
                            <p>2023, Россия, Семейные</p>
                            <span>112 минут</span>
                        </div>
                        <img class="photo_k" src="images/dowload.jpg">
                        <h1 class="fill">Пёс</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>7,5</h1>
                            <p>2016, Россия, Комедейные</p>
                            <span>86 минут</span>
                        </div>
                        <img class="photo_k" src="images/img.jpg">
                        <h1 class="fill">Такси под прикры...</h1>
                        <p class="fousred">Подписка</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,1</h1>
                            <p>2020, Россия, Драмы</p>
                            <span>101 минута</span>
                        </div>
                        <img class="photo_k" src="images/hore.jpg">
                        <h1 class="fill">Постучись в мою..</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>7,2</h1>
                            <p>2022, Россия, Комедейные</p>
                            <span>94 минуты</span>
                        </div>
                        <img class="photo_k" src="images/haver.jpg">
                        <h1 class="fill">Правосудие (Приг...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
            </div>
            <div class="articles_block">
                <h1 class="dram"><a href="">Захватывающее кино </a><i class="fa-solid fa-chevron-right" style="color: #f7f7f7;"></i></h1>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>1 сезон</span>
                        </div>
                        <img class="photo_k" src="images/киносайт.jpg">
                        <h1 class="fill">Заснеженное Рож...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,7</h1>
                            <p>2015, США, Драмы</p>
                            <span>108 минут</span>
                        </div>
                        <img class="photo_k" src="images/kino.jpg">
                        <h1 class="fill">Отель &laquo;Белград&raquo; </h1>
                        <p class="fousred">Подписк</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2022, Россия, Комедии</p>
                            <span>106 минут</span>
                        </div>
                        <img class="photo_k" src="images/rojulun.jpg">
                        <h1 class="fill">Семья</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,8</h1>
                            <p>2018, Россия, Комедейные</p>
                            <span>290 минут</span>
                        </div>
                        <img class="photo_k" src="images/dowload.jpg">
                        <h1 class="fill">Пёс</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2012, Россия, Комедейные</p>
                            <span>8 сезон</span>
                        </div>
                        <img class="photo_k" src="images/img.jpg">
                        <h1 class="fill">Такси под прикры...</h1>
                        <p class="fousred">Подписка</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>8,9</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>1 сезон</span>
                        </div>
                        <img class="photo_k" src="images/hore.jpg">
                        <h1 class="fill">Постучись в мою...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
                <a href="pages/about_me.html">
                    <div class="article">
                        <div class="info">
                            <h1>6,9</h1>
                            <p>2023, Россия, Комедейные</p>
                            <span>1 сезон</span>
                        </div>
                        <img class="photo_k" src="images/haver.jpg">
                        <h1 class="fill">Правосудие (Приг...</h1>
                        <p class="cats">бесплатно</p>
                    </div>
                </a>
            </div>
            <?php require 'pages/includes/footer.php';?>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a86f8867e8.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
</body>

</html>