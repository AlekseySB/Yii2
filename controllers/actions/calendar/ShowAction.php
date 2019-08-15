<?php


namespace app\controllers\actions\calendar;


use app\base\BaseAction;
use app\models\Activity;

class ShowAction extends BaseAction
{
    public $classEntity;

    public function run(){

        //$show = new $this->classEntity();
        $user_id = \Yii::$app->user->getId();

        $model = Activity::find()
                                ->select(['startday'])

                                ->andWhere('user_id=:user_id', [':user_id' => $user_id])
                                ->distinct()
                                ->groupBy(['startday'])
                                ->all();

        return $this->controller->render('show',['model'=>$model]);
    }
}