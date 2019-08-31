<?php

namespace app\controllers\actions\users;


use app\base\BaseAction;
use app\models\Activity;

class CabinetAction extends BaseAction
{
//    public $classEntity;

    public function run(){

        $user = \Yii::$app->user->getIdentity();
        /**
         * @var Activity[] $activities
         */
        $activities = $user->getActivities()->orderBy('startday')->cache(60)->all();

//        print_r($activities[0]);exit();

        return $this->controller->render('cabinet',['user'=>$user, 'activities' => $activities]);
    }
}