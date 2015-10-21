<?php

/* @var $this yii\web\View */

$this->title = 'Acceso grafico';

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!--_____________NOSOTROS________________-->
<div class="nosotros">
    <div class="container">
        <div class="moduletable">
            <h3>NOSOTROS</h3>
            <div class="custom">
                <div class="barra">&nbsp;</div>
                <?php foreach($nosotros as $we):?>
                    <?php echo $we->contenido;?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

<!--_____________SERVICIOS________________-->
<div class="servicios" style="height: 600px;">
    Servicios
</div>

<!--_____________PORTAFOLIO________________-->
<div class="container">
    Portafolio
</div>

<!--_____________NUESTRO EQUIPO________________-->
<div class="nuestro-equipo" style="height: 600px;">
    <div class="container">
        <p>Nuestro Equipo</p>
        <span><i>"Somos Profesionales para tu marca"</i></span>
        <div class="row">
            <div class="col-md-4"><img src="img/eq1.jpg" alt=""></div>
            <div class="col-md-4"><img src="img/eq2.jpg" alt=""></div>
            <div class="col-md-4"><img src="img/eq3.jpg" alt=""></div>
        </div>
    </div>
</div>

<!--_____________PAQUETES________________-->
<div class="paquetes">
    <div class="container">
        <p>PAQUETES</p>
        <?php foreach($paquetes as $paq): ?>
            <div class="col-sm-4">
                <p class="blue-gray paq-titles"><?php echo $paq->nombre;?></p>
                <div class="paq-body">
                    <p class="black-white paq-titles">$<?php echo $paq->precio;?><small>+IVA</small></p>
                    <p class="blue-gray paq-height"><?php echo $paq->contenido;?></p>
                    <p class="black-white paq-titles"><a class="contratar black-white" href="#contactanos">CONTRATAR</a></p>
                </div>
                <p class="vermas black-white paq-titles">LEER MAS</p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!--_____________CONTACTANOS________________-->
<div class="container contact">
    <div class="text-center">
        <h2>Contáctanos</h2>
        <p>Encantados de hablar contigo</p>
    </div>
    <div class="col-md-7">
        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'name')->label(false)->textInput(array('placeholder'=>'Nombre...'))?>
            <?= $form->field($model, 'email')->label(false)->textInput(array('placeholder'=>'Email'))?>
            <?= $form->field($model, 'comments')->label(false)->textArea(['rows' => '5', 'placeholder'=>'Mensaje...'])?>
            <div class="form-group">
                <?= Html::submitButton('Enviar', ['class'=>'btn enviar']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-md-5">
        <p class="font-blue">Lunes-Viernes 9:00-16:30</p>
        <div><img class="img-rounded" alt="telefono" src="img/telefono.png" height="40" width="40"><span>Teléfono<br> (81) 1934-2276 (81) 1968-050</span></div>
        <div><br> <img class="img-rounded" alt="mail" src="img/mail.png" height="40" width="40"><span>E-mail<br> <a href="mailto:prueba@gruposarg.com">contacto@accesografico.com</a></span></div>
        <div><br><img class="img-rounded" alt="map" src="img/map.png" height="40" width="40"><span>Dirección<br> Batallón de San Patricio 109 Valle Oriente San Pedro Garza García C.P. 66269</span></div>
    </div>
</div>
