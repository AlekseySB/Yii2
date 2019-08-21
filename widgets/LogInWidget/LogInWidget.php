<?php


namespace app\widgets\LogInWidget;


use app\models\Users;
use yii\base\Exception;
use yii\base\Widget;
use yii\web\HttpException;

class LogInWidget extends Widget
{

    public $classEntity;
    public function run()
    {
        $model = new Users();

        if(\Yii::$app->request->isPost){

            $model->load(\Yii::$app->request->post());

            $model->scenarioSignUp($model);

            try{
                if(!\Yii::$app->auth->signUp($model)){

                    throw new Exception();
                }
            }catch (Exception $e){

                print_r($e->getMessage());
            }
        }
        return $this->render('signin', ['model' => $model]);
    }
}