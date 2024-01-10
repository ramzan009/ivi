<?php require '../config/db.php'; ?>
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
                <?php 
                $selected_category = mysqli_query($connection, "SELECT * FROM `categories` WHERE `id`= " . $_GET['category_id']);
           
                 $selc_cat = mysqli_fetch_assoc($selected_category); ?>
                           
                <h1><?php echo $selc_cat['name']; ?></h1>
               
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
            <form action="/pages/select.php" method="GET">
                <div class="bouter">
                    <select name="category_id">
                        <option value="all">Жанры</option>
                        <?php 
                       $selects =  mysqli_query($connection, "SELECT * FROM `categories`");

                      while ($selc = mysqli_fetch_assoc($selects))
                       {
                           ?>
                        <option value="<?php echo $selc['id']; ?>" <?php if ($_GET['category_id']===$selc['id']) { echo 'selected' ; } ?>
                            >
                            <?php echo $selc['name']; ?>
                        </option>
                        <?php
                      }
                      ?>
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
                    <select name="year" id="">
                        <option value="all">Годы</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                    </select>
                    <select name="" id="">
                        <option value="">Рейтинг Иви</option>
                        <option value="">Артхаус</option>
                        <option value="">Вестерн</option>
                        <option value="">Для детей</option>
                        <option value="">Зарубежные</option>
                    </select>
                </div>
           <button class="buyters" type="submit">Отправить</button>
            </form>
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
                    <?php 
                        // Берем все фильмы
                        $query = "SELECT * FROM `films`  ";

                        // Для категории
                        if (isset($_GET['category_id']) && $_GET['category_id'] != 'all') {
                            $query .= "WHERE `category_id` = " . $_GET['category_id'];
                        }

                        if (isset($_GET['year']) && $_GET['year'] != 'all') {

                            if (isset($_GET['category_id']) && $_GET['category_id'] != 'all') {
                                $query .= " AND `year` = " . $_GET['year'];
                            } else {
                                 $query .= " WHERE `year` = " . $_GET['year'];
                            }

                        }


                        $kinifilms = mysqli_query($connection, $query);

                        while ($kinf = mysqli_fetch_assoc($kinifilms)) 
                        {
                           ?>
                    <a href="/pages/show.php?id=<?php echo $kinf['id']; ?>">
                        <div class="article">
                            <div class="info">
                                <h1>
                                    <?php echo $kinf['rating'];  ?>
                                </h1>
                                <p><?php echo $kinf['year']; ?>, Россия, Комедейные</p>
                                <span>1 сезона</span>
                            </div>
                            <img class="photo_k" src="<?php echo $kinf['image']; ?>">
                            <h1 class="fill">
                              <?php
                            if (strlen($kinf['name']) > 20) {
                                echo mb_substr($kinf['name'], 0, 13, 'utf-8') . '...';
                            } else {
                                echo $kinf['name'];
                            }
                          ?>,
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