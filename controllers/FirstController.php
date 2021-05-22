<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;

class FirstController extends \yii\web\Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'first-form'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionFirstForm()
    {
        $model = new \app\models\FirstTable();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->save()) {
                $this->dd(['a' => 'b']);
//                die('zapisano');
                // form inputs are valid, do something here
//                return;
//            }
            }


        }

        return $this->render('first_form', [
            'model' => $model,
        ]);
    }

//    public function

}

