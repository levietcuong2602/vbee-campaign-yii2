<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\User;

class DemoController extends Controller {

    public function actionIndex() {
        $id = 400;
        $user = User::findOne($id);
        dd($user);

        return $this->render('index');
    }

    public function actionInsert() {
        $model = new User();
        $model ->username= 'Nguyen Anh Hien';
        $model ->save();

        dd($model);
        return $this->render('insert');
    }
}