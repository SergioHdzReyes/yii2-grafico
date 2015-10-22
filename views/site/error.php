<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="container site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        El error anterior ha ocurrido mientras el servidor web procesaba tu peticion
    </p>
    <p>
        Porfavor contactanos si piensas que es un error del servidor. Gracias.
    </p>

</div>
