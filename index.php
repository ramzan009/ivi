<?php require 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $config['title']; ?>
    </title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,600;6..12,700;6..12,900&display=swap"
          rel="stylesheet">
</head>

<body>
<?php require 'pages/includes/menu.php'; ?>
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
            <h1 class="dram"><a href="">Боевик</a> <i class="fa-solid fa-chevron-right" style="color: #f7f7f7;"></i>
            </h1>
            <?php
            $boeviks = mysqli_query($connection, "SELECT * FROM `films` WHERE `category_id` = 2 ORDER BY `created_at` DESC LIMIT 7");

            while ($boevik = mysqli_fetch_assoc($boeviks)) {
                ?>
                <a href="pages/show.php?id=<?php echo $boevik['id']; ?>">
                    <div class="article">
                        <div class="info">
                            <h1>
                                <?php echo $boevik['rating']; ?>
                            </h1>
                            <p>
                                <?php echo $boevik['year']; ?> США, Боевик</p>
                            <span>1 сезона</span>
                        </div>
                        <img class="photo_k" src="<?php echo $boevik['image']; ?>">
                        <h1 class="fill">
                            <?php
                            if (strlen($boevik['name']) > 20) {
                                echo mb_substr($boevik['name'], 0, 13, 'utf-8') . '...';
                            } else {
                                echo $boevik['name'];
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
        <div class="articles_block">
            <h1 class="dram"><a href="">Драмы </a><i class="fa-solid fa-chevron-right" style="color: #f7f7f7;"></i></h1>
            <?php
            $drames = mysqli_query($connection, "SELECT * FROM `films` WHERE `category_id` = 8 ORDER BY `created_at` DESC LIMIT 7");

            while ($dram = mysqli_fetch_assoc($drames)) {
                ?>
                <a href="pages/show.php?id=<?php echo $dram['id']; ?>">
                    <div class="article">
                        <div class="info">
                            <h1>
                                <?php echo $dram['rating']; ?>
                            </h1>
                            <p>
                                <?php echo $dram['year']; ?> Турция, Драмы</p>
                            <span>85 минут</span>
                        </div>
                        <img class="photo_k" src="<?php echo $dram['image']; ?>">
                        <h1 class="fill">
                            <?php
                            if (strlen($dram['name']) > 20) {
                                echo mb_substr($dram['name'], 0, 13, 'utf-8') . '...';
                            } else {
                                echo $dram['name'];
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
        <div class="articles_block">
            <h1 class="dram"><a href="">Захватывающее кино </a><i class="fa-solid fa-chevron-right"
                                                                  style="color: #f7f7f7;"></i></h1>
            <?php
            $zahvats = mysqli_query($connection, "SELECT * FROM `films` WHERE `category_id` = 20 ORDER BY `created_at` DESC LIMIT 7");

            while ($zah = mysqli_fetch_assoc($zahvats)) {
                ?>
                <a href="pages/show.php?id=<?php echo $zah['id']; ?>">
                    <div class="article">
                        <div class="info">
                            <h1>
                                <?php echo $zah['rating']; ?>
                            </h1>
                            <p>
                                <?php echo $zah['year']; ?>, Китай, Фэнтези</p>
                            <span>1 сезон</span>
                        </div>
                        <img class="photo_k" src="<?php echo $zah['image'] ?>">
                        <h1 class="fill">
                            <?php
                            if (strlen($zah['name']) > 20) {
                                echo mb_substr($zah['name'], 0, 13, 'utf-8') . '...';
                            } else {
                                echo $zah['name'];
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
        <?php require 'pages/includes/footer.php'; ?>
    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a86f8867e8.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="../js/index.js"></script>
<script src="../js/main.js"></script>
</body>

</html>