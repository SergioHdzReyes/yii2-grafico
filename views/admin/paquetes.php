<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Paquetes';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <h1>Paquetes</h1>
    <div class="col-md-12">
        <a href="../paquetes/create">Crear registro</a>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>status</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model as $key):?>
                    <tr>
                        <td>
                            <?php echo $key->id;?>
                        </td>
                        <td>
                            <a href="../paquetes/view?id=<?php echo $key->id;?>"><?php echo $key->nombre;?></a>
                        </td>
                        <td>
                            <?php echo $key->precio;?>
                        </td>
                        <td>
                            <?php echo $key->status;?>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>