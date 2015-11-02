<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\web\View;

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Menu;

//$this->registerCssFile('css/admin.css');
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
<div class="top-menu-bar">
	<?php
	/*NavBar::begin(['brandLabel'=>'Accesografico']);
	echo Nav::widget([
		'items'=>[
		['label'=>'Nosotros', 'url'=>['admin/nosotros']],
		['label'=>'Paquetes', 'url'=>['admin/paquetes']],
		['label'=>'Salir', 'url'=>['admin/logout']]
		],
		'options'=>['class'=>'navbar-nav'],
	]);
	NavBar::end();*/
	?>
</div>
		<?php if(!\Yii::$app->user->isGuest){ ?>
			<div id="wrapper">
			<div id="sidebar-wrapper">
				<?php
				//NavBar::begin(['brandLabel'=>'Accesografico']);
				echo Nav::widget([
					'items'=>[
					['label'=>'Home', 'url'=>['../web']],
					['label'=>'Admin', 'url'=>['../web/admin']],
					['label'=>'Nosotros', 'url'=>['admin/nosotros']],
					['label'=>'Paquetes', 'url'=>['admin/paquetes']],
					['label'=>'Salir', 'url'=>['admin/logout']]
					],
					'options'=>['class'=>'sidebar-nav'],
				]);
				//NavBar::end();
				?>
			</div>
			<?php }else{?>
			<div class="wrap">
		<?php } ?>

		<?php if(!\Yii::$app->user->isGuest){ ?><div id="page-content-wrapper"><?php } ?>
			<?php $this->beginBody() ?>
			<!--INIT-->
			<?= $content ?>
			<!--END-->
			<?php $this->endBody() ?>
		<?php if(!\Yii::$app->user->isGuest){ ?></div><?php } ?>

		<?php if(!\Yii::$app->user->isGuest) echo "</div>"; ?>
</body>
</html>
<?php $this->endPage() ?>
