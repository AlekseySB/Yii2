<?php


namespace app\controllers\calendar;


use app\base\BaseAction;

class ShowAction extends BaseAction
{
    public $classEntity;

    public function run(){

        $activity = new $this->classEntity();

        return $this->controller->render('show',['model'=>$activity]);
    }
}