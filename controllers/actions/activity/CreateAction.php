<?php


namespace app\controllers\actions\activity;


use app\base\BaseAction;
use app\components\ActivityComponent;
use app\models\Activity;
//use yii\bootstrap\ActiveForm;
use yii\web\HttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;

class CreateAction extends BaseAction
{
    public $classEntity;

    public function run(){

//        $activityComponent = Yii::createObject(['class' => ActivityComponent::class,
//            'classEntity' => Activity::class]);
        if(!\Yii::$app->rbac->canCreateActivity()){

            throw new HttpException(403, 'Not authorize access');
        }

//        $activity = \Yii::$app->activity->getEntity();

        $activity = new Activity();

//        return var_dump($activity);

        if(\Yii::$app->request->isPost){
            $activity->load(\Yii::$app->request->post());

            if(\Yii::$app->request->isAjax){
                \Yii::$app->response->format=Response::FORMAT_JSON;
                return ActiveForm::validate($activity);
            }

            //if(\Yii::$app->activity->createActivity($activity)){
                $activity->user_id = \Yii::$app->user->getId();
                $activity->save();
//                return var_dump($activity->id, $activity->title);

                return $this->controller->redirect(["/activity/show",'id'=>$activity->id]);
            //}
        }

        return $this->controller->render('create', ['model'=>$activity]);
    }
}