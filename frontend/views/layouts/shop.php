<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;


AppAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <title>Document</title>
</head>

<body>
<?php $this->beginBody() ?>

<header>
    <div class="container-fluid">
    <div class="nav">
        <div class="container">
        <div class="nav__wrapper">
            <ul class="nav__ul">
            <li class="nav__ul__li"><a href="#">Payment</a></li>
            <li class="nav__ul__li"><a href="#">Delivery</a></li>
            <li><a href="#">Something else</a></li>
            </ul>
            <div class="nav__contact">
            <p class="nav__contact__phone__number">+7(495) 988-43-44</p>
            <p class="nav__contact__time">C 10:00 до 22:00</p>
            </div>
            <div class="nav__enter">
            <div class="nav__enter__wrapper nav__enter__wrapper_first">
                <img class="phone__img" src="/img/phone.png" alt="" />
                <p><a href="#">Заказать звонок</a></p>
            </div>
            <div class="nav__enter__wrapper">
                <img
                class="enter-logo__img"
                src="/img/enter-logo.png"
                alt=""
                />
                <p><a href="#">Войти</a></p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="menu__block">
        <div class="logo__wrapper">
            <a href="#"><img src="/img/logo.png" alt="" /></a>
        </div>
        <div class="menu__block__input__wrapper">
            <input
            type="text"
            class="menu__block__input"
            placeholder="Поиск по сайту"
            />
            <img class="glass" src="/img/glass.png" alt="" />
        </div>

        <div class="buscet__wrapper">
            <div class="nav__hidden">
            <a href="#"
                ><img
                class="enter-logo__img"
                src="/img/enter-logo.png"
                alt=""
            /></a>
            </div>

            <div
            class="menu__block__item__wrapper menu__block__item__wrapper_first"
            >
            <a href="#">
                <img class="heart" src="/img/heart.png" alt="" />
                <p class="menu__block__item menu__block__item_first">
                Избранное
                </p>
            </a>
            </div>

            <div class="menu__block__item__wrapper">
            <a href="#">
                <img src="/img/buscet.png" alt="" />
                <p class="menu__block__item">Корзина</p>
            </a>
            </div>
        </div>
        </div>
    </div>
    <div class="nav__bottom">
        <div class="container">
        <div class="nav__bottom__wrapper">
            <ul class="menu__box">
            <li><a class="menu__item" href="#">Menu 1</a></li>
            <li><a class="menu__item" href="#">Menu 2</a></li>
            <li><a class="menu__item" href="#">Menu 3</a></li>
            <li><a class="menu__item" href="#">Menu 4</a></li>
            <li><a href="#">Menu 5</a></li>
            </ul>
        </div>
        </div>
    </div>
    <!-- burger-menu -->
    <div class="nav__hidden nav_burger">
        <input type="checkbox" id="menu__toggle" />
        <label class="menu__btn" for="menu__toggle">
        <span></span>
        </label>
        <ul class="menu__box">
        <li><a class="menu__item" href="#">Menu 1</a></li>
        <li><a class="menu__item" href="#">Menu 2</a></li>
        <li><a class="menu__item" href="#">Menu 3</a></li>
        <li><a class="menu__item" href="#">Menu 4</a></li>
        <li><a class="menu__item" href="#">Menu 5</a></li>
        </ul>
    </div>
    <!-- end burger-menu -->
    </div>
</header>

<!-- Swiper -->
<div class="swiper_hidden">
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="#">Brands</a></div>
        <div class="swiper-slide"><a href="#">Categories</a></div>
        <div class="swiper-slide"><a href="#">Ingredients</a></div>
        <div class="swiper-slide"><a href="#">Medications</a></div>
        <div class="swiper-slide"><a href="#">Purpose</a></div>
        </div>
    </div>
</div>



<?= $content ?>



<div class="container-fluid">
    <footer>
        <div class="container">
            <div class="footer">
                <div class="about about_margin">
                    <h3 class="about__item_heading">О нас</h3>
                    <p class="about__item about__item_bold">Индивидуальный предприниматель:</p>
                    <p class="about__item about__item_margin">Сингх Даршан</p>
                    <p class="about__item">ИНН 773434132400</p>
                    <p class="about__item about__item_margin">ОГРНИП 319774600472688</p>
                    <p class="about__item about__item_bold">Банковские реквизиты:</p>
                    <p class="about__item">АО Тинькоф Банк</p>
                    <p class="about__item">БИК 044525974</p>
                    <p class="about__item">к/с 30101810145250000974</p>
                    <p class="about__item about__item_margin">р/с 40802810700001386550</p>
                    <p class="about__item about__item_bold">Адрес:</p>
                    <p class="about__item">г.Москва, м.Чертановская, мкрн.Северное</p>
                    <p class="about__item about__item_margin">чертаново, 208, ТЦ Каспий, павильон 13</p>
                    <p class="about__item about__item_bold">Тел.:+7(495) 988-43-44</p>
                </div>

                <div class="links">
                    <h3 class="about__item_heading">Some important links</h3>
                    <ul>
                        <li>
                            <a href="#">Some links</a>
                            <a href="#">Some links</a>
                            <a href="#">Some links</a>
                            <a href="#">Some important link</a>
                            <a href="#">Some important link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
    </footer>   
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>