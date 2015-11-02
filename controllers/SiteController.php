<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use app\models\Paquetes;
use app\models\Nosotros;
use app\models\Footer;

class SiteController extends Controller
{
    public $layout = 'main';
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $form = new ContactForm();
        $paquetes = Paquetes::find()->orderBy('id')->where(['status'=>'1'])->all();
        $nosotros = Nosotros::find()->orderBy('id')->all();
        $footer = Footer::find()->orderBy('id')->all();

        $variables = ['model'=>$form, 'paquetes'=>$paquetes, 'nosotros'=>$nosotros, 'footer'=>$footer];

        if($form->load(Yii::$app->request->post()) && $form->validate()){
            //DATOS
            return $this->render('entry-form', $variables);
        }else{
            return $this->render('index', $variables);
        }
    }
}
