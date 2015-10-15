<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

$this->registerCssFile('css/style.css');
//$this->registerJs('js/myscript.js');
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="menus">
        <?php
        NavBar::begin([
            'brandLabel' => 'My Company',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-default',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'nav menu'],
            'items' => [
                ['label' => 'HOME', 'url' => ['/site/index']],
                ['label' => 'NOSOTROS', 'url' => ['/site/about']],
                ['label' => 'SERVICIOS', 'url' => ['/site/contact']],
                ['label' => 'PORTAFOLIO', 'url' => ['/site/contact']],
                ['label' => 'EQUIPO', 'url' => ['/site/contact']],
                ['label' => 'PAQUETES', 'url' => ['/site/contact']],
                ['label' => 'CONTACTO', 'url' => ['/site/contact']],
            ],
        ]);
        NavBar::end();
        ?>
    </div>

    <?= $content ?>
</div>

<footer class="piedepagina">
    <p>Batallón de San Patricio 109, Valle Oriente San Pedro Garza García C.P. 66269  T: (81) 1934-2276 T: (81) 1968-050</p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
