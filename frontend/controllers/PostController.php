<?php


namespace frontend\controllers;


use frontend\models\PersonForm;
use yii\web\Controller;

class PostController extends Controller
{
//        public $defaultAction = 'salom';

    public function actionSalom(){
        return $this->render('salom');
    }

    public function actionIndex()
    {
        $model = new PersonForm();
        return $this->render('index', compact($model));
    }
}