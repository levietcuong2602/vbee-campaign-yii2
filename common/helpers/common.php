<?php
/**
 * Created by PhpStorm.
 * User: tridev
 * Date: 05/11/2018
 * Time: 17:47
 */

if (!function_exists('dd')) {
    function dd($data){
        \yii\helpers\VarDumper::dump($data, 10, true);
        exit();
    }
}
