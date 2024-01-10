<?php 

require '../config/db.php';

$film = mysqli_query($connection, "SELECT * FROM `films` WHERE `id` = " . $_GET['id']); 

$film_item = mysqli_fetch_assoc($film);  

if($film_item == false) {
    header('Location: /');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $config['title']; ?>
    </title>

    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,600;6..12,700;6..12,900&display=swap" rel="stylesheet">
</head>

<body>

<?php require '../pages/includes/menu.php';?>
    <div class="orders">
        <h1 class="parentmesh1">Фильмы-Комедии</h1>
        <div class="fotre">
            <div class="parentmes">
                <video controls width="715" height="400">
                  <source src="<?=$film_item['video']?>" type="video/mp4" />
                </video>
            </div>
            <div class="default">
                <h1><?php echo $film_item['name']; ?></h1>
                <div class="dicript">
                    <p class="padal"><?php echo $film_item['year']; ?>, 1ч.46 мин. <?php echo $film_item['age']; ?></p>
                    <?php
                        $category = mysqli_query($connection, "SELECT * FROM `categories` WHERE `id` = " . $film_item['category_id']);
                     
                       $cat = mysqli_fetch_assoc($category);

                     ?>
                    <p class="goter">Россия. <?php echo $cat['name']; ?>. Русские</p>
                    <p class="spiun">FullHD <i class="fa-solid fa-volume-low" style="color: #C4C2C3;"> РУС</i></p>
                </div>
                <div class="entries">
                    <a href="">
                        <div class="watch">
                            <p class="rating__film"><?php echo $film_item['rating']; ?></p>
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
                                <?=$film_item['description']?>
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
           <?php require '../pages/includes/footer.php'; ?>
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
    <script src="../js/main.js"></script>
    <script src="../js/about_me.js"></script>
</body>

</html>