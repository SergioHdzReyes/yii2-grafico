<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!--------------NOSOTROS---------------->
<div class="nosotros">
    Nosotros
</div>

<!--------------SERVICIOS---------------->
<div class="servicios" style="height: 600px;">
    Servicios
</div>

<!--------------PORTAFOLIO---------------->
<div class="container">
    Portafolio
</div>

<!--------------NUESTRO EQUIPO---------------->
<div class="nuestro-equipo" style="height: 600px;">
    Nuestro Equipo
</div>

<!--------------PAQUETES---------------->
<div class="paquetes">
    Paquetes
</div>

<!--------------CONTACTANOS---------------->
<div class="container contact">
    <div class="text-center">
        <h2>Contáctanos</h2>
        <p>Encantados de hablar contigo</p>
    </div>
    <div class="col-md-6">
        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'name')?>
            <?= $form->field($model, 'email')?>
            <?= $form->field($model, 'comments')?>
            <div class="form-group">
                <?= Html::submitButton('Enviar', ['class'=>'btn enviar']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-md-6">
        
    </div>
</div>
