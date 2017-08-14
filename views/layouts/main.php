<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container">


<!--    Заголовок страницы-->
    <!--    выпадающее меню-->

    <menu class="menu">
        <ul>
            <li class="buttom_menu active active_menu"><a href="#">Меню</a></li>
            <li class="buttom_menu"><a href="#">Вход</a></li>
            <li class="buttom_menu"><a href="#">О проекте</a></li>
            <li class="buttom_menu"><a href="#">Контакты</a></li>
            <li class="buttom_menu"><a href="#">Мы в соцсетях</a></li>
        </ul>
    </menu>
    <!--    конец выпадающего меню-->
    <div class="container header">
        <div class="site_name"><img src="img/logo.png" alt="Навсегда онлайн"></div>
        <div><input type="text" id="enter-name" placeholder="Введите Фамилию Имя и Отчество "></div>
    </div>
<!--    конец заголовка-->


    <div class="container content">
        <?= $content ?>
    </div>
    .
</div>
<div class="counters">
    <div class="counters_full"><span>Сообщений с 2017 года</span><div class="counters_value"><p>1000</p></div></div>
    <div class="counters_full"><span>Сообщений за <?= date('F') ?></span><div class="counters_value"><p>100</p></div></div>
    <div class="counters_full"><span>Сообщений за день</span><div class="counters_value"><p>10</p></div></div>

</div>
    <div class="clear"></div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; НАВСЕГДА ОНЛАЙН <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>



<div id="trailer" class="is_overlay">
    <video id="video" width="100%" height="auto"  autoplay="autoplay" loop="loop" preload="auto" >
        <source src="video/fon.mp4">
        <source src="book.webm" type="video/webm">
    </video>
    <div id="preloader">
        <i id="wait" class="fa fa-spinner"></i>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
