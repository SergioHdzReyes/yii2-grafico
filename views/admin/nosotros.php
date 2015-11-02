<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Nosotros';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <h1>NOSOTROS</h1>
    <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Titulo</td>
                    <td>Imagen</td>
                    <td>Field</td>
                    <td>Contenido</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model as $key):?>
                    <tr>
                        <td>
                            <?php echo $key->id;?>
                        </td>
                        <td>
                            <?php echo $key->titulo;?>
                        </td>
                        <td>
                            <?php echo $key->image;?>
                        </td>
                        <td>
                            <?php echo $key->field;?>
                        </td>
                        <td>
                            <?php echo $key->contenido;?>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>