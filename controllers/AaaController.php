<?php

namespace app\controllers;

use app\models\Customer;

class AaaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * testuje zapytania do bazy i relacje
     */
    public function actionCustomer()
    {
        $customer = Customer::find()->asArray()->count();

//        echo '<pre>';
        foreach (Customer::find()->batch(2) as $customers) {
//            SiteController::d;
            SiteController::dd($customers);
//            var_dump($customers);
        }
//        echo '</pre>';

        var_dump($customer);
    }

}
