<?php require '../config/db.php';  

$serchs = mysqli_query($connection, "SELECT * FROM `films` WHERE `name` LIKE '%" .$_GET['search'] . "%'");
?>
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
    <?php require '../pages/includes/menu.php'?>
    <div class="revision">
        <div class="botver">
            <a href="">Мой Иви / </a>
            <a href="">Фильмы / </a>
            <a href="">Комедии</a>
        </div>
        <div class="rechar">
            <div class="noyters">
                <h1>
                    Поиск по запросу: <?php echo $_GET['search']; ?>
                </h1>
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
        <main class="main_block">
            <div class="center_block">
                <div class="articles_block">
                    <?php
					while ($sech = mysqli_fetch_assoc($serchs) )
					{
					 ?>
                    <a href="/pages/show.php?id=<?php echo $sech['id']; ?>">
                        <div class="article">
                            <div class="info">
                                <h1>
                                    <?php echo $sech['rating'];  ?>
                                </h1>
                                <p>
                                    <?php echo $sech['year']; ?>, Россия, Комедейные</p>
                                <span>1 сезона</span>
                            </div>
                            <img class="photo_k" src="<?php echo $sech['image']; ?>">
                            <h1 class="fill">
                                <?php
                            if (strlen($sech['name']) > 20) {
                                echo mb_substr($sech['name'], 0, 13, 'utf-8') . '...';
                            } else {
                                echo $sech['name'];
                            }                    
                          ?>

                            </h1>
                            <p class="cats">бесплатно</p>
                        </div>
                        </a>
                <?php    
                }
                ?>
                </div>
            </div>
            <footer>
                <?php require '../pages/includes/footer.php'; ?>
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