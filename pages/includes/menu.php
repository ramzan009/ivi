<div class="menu">
    <div class="inside">
        <div class="logo">
           <a href="/"><img class="img_log" src="/images/logo.svg"></a> 
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
                            <?php 
                            $categories = mysqli_query($connection, "SELECT * FROM `categories` LIMIT 10");
                             ?>
                            <?php
                             while ($cat = mysqli_fetch_assoc($categories) )
                              {
                                   ?>
                            <a href="/pages/select.php?category_id=<?php echo $cat['id'];?>">
                                <?php echo $cat['name'];?></a>

                        <?php
                                 } 
                                 ?>

                          </div>

                        <div class="dropdown-link-shows">
                            <h1></h1>
                            <?php 
                            $categories_2 = mysqli_query($connection, "SELECT * FROM `categories` LIMIT 10 OFFSET 11");
                               
                               while ($cat_2 = mysqli_fetch_assoc($categories_2) )
                                {
                                  ?> 
                                  <a href="/pages/select.php?category_id=<?php echo $cat_2['id']?>"><?php echo $cat_2['name'];?></a>
                              <?php    
                               }
                            ?>                            
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
                <li><a href="/pages/registration.php"><i class="fa-regular fa-user ofice"> Войти</i></a></li>
            </ul>
        </div>
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
                <form action="/pages/search.php" method="GET">
                <input  class="input_block" name="search"  type="text" placeholder="Фильмы,персены,жанры">
                <i class="fa-solid fa-magnifying-glass search_glass"></i>
                </form>
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