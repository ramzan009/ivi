<?php require '../config/db.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход и Регистрация</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,600;6..12,700;6..12,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php require '../pages/includes/menu.php'?>
    <div class="entrance">
        <h1 class="reg">Регистрация</h1>
                <?php 
        $data = $_POST;
        if ( isset($data['registration']) )
         {
            $errors = array();
            if ( trim($data['name']) == '') 
            {
                $errors[] = 'Введите email!';
            }


             if ( trim($data['email']) == '') 
            {
                $errors[] = 'Введите name!';
            }


            if ( trim($data['password']) == '') 
            {
                $errors[] = 'Введите пароль!';
            }


            if ( $data['password_2'] != $data['password']) 
            {
                $errors[] = 'Повторный пароль введён не верно!';
            }


            if (!empty($data['email'])) {

                $user = mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = '" . $data['email']."'");
 
              if ( mysqli_num_rows($user) > 0) {
                  
                  $errors[] = 'Пользавель с таким email существует!';
              }
            }


            if (empty($errors))
             {
                $password_hash = password_hash($data['password'], PASSWORD_DEFAULT);

                 mysqli_query($connection, "INSERT INTO `users` (`name`, `email`, `password`, `created_at`) VALUES ('".$data['name']."', '".$data['email']."', '".$password_hash."', NOW())");

                 echo '<div style="color: green; margin:20px 20px;">Вы успешно зарегистрировались!</div>';
                
            } else
            {
              echo '<div style="color: red; margin:20px 20px;">'.array_shift($errors).'</div>';
            }

        }

         ?>
        <div class="logins">
            <form action="/pages/registration.php" method="POST">
                <label for="name" class="tsaerch">Имя</label>
                <input id="name" class="inputer" type="text" value="<?php echo @$data['name']; ?>" name="name" placeholder="Ввести имя..">
                <label for="email" class="tsaerch">Электронная почта</label>
                <input id="email" class="inputer" type="text" name="email" value="<?php echo @$data['email']; ?>" placeholder="Ввести логин..">
                <div class="horter">
                    <label for="password" class="sonder">Пароль</label>
                    <input id="password" class="rihter" type="password" name="password" value="<?php echo @$data['password']; ?>" placeholder="Ввести пароль..">
                </div>
                <label for="password" class="sonder">Подтвердить пароль</label>
                <input id="password" class="rihter" type="password" name="password_2" value="<?php echo @$data['password_2']; ?>" placeholder="Пишите пароль еще раз..">
                <input class="checkb" type="checkbox"> <label class="labels" for="">Не запомнить логин и пароль</label>
                <div class="ugres">
                    <button type="submit" name="registration">Зарегистрироваться</button>
                </div>
                <p class="ecprept"><a href="/pages/login.php">Войти существующий аккаунт</a></p>
            </form>
        </div>
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