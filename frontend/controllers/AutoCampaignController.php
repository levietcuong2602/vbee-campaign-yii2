<?php 
namespace frontend\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AutoCampaignController extends Controller {
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}