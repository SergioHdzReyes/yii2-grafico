<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\Nosotros;
use app\models\Paquetes;

class AdminController extends Controller
{
    public $layout = 'admin';

    public function actionIndex()
    {
        //public $layout = 'login';

        if (!\Yii::$app->user->isGuest) {
            //return $this->goHome();
            return $this->render('index');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //return $this->goBack();
            return $this->render('index');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
        //return $this->redirect(['login']);
    }
    public function actionNosotros()
    {
        if(!\Yii::$app->user->isGuest)
        {
            $model = Nosotros::find()->orderBy('id')->all();
            return $this->render('nosotros', ['model'=>$model]);
        }else{
            return $this->redirect(['/admin']);
        }
    }
    public function actionPaquetes()
    {
        if(!\Yii::$app->user->isGuest)
        {
            $model = Paquetes::find()->orderBy('id')->all();
            return $this->render('paquetes', ['model'=>$model]);
        }else{
            return $this->redirect(['/admin']);
        }
    }
}

?>