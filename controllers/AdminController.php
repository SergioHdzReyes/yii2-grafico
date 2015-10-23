<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;

class AdminController extends Controller
{
    public $layout = 'admin';

    public function actionIndex()
    {
        //public $layout = 'login';

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
}

?>