<?php

/* @var $this yii\web\View */

$this->title = 'Acceso grafico';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Carousel;
?>


<div class="container-fluid">
	<div class="text-center">
		<h1>Bienvenido al Administrador</h1>
	<?php
	echo Carousel::widget([
	    'items' => [
	        // the item contains only the image
	        '<img src="http://getbootstrap.com/2.3.2/assets/img/example-sites/kippt.png"/>',
	        // equivalent to the above
	        ['content' => '<img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-02.jpg"/>'],
	        // the item contains both the image and the caption
	        [
	            'content' => '<img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-03.jpg"/>',
	            'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
	        ],
	    ]
	]);
	?>
	</div>
</div>