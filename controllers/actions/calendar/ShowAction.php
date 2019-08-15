<?php


namespace app\controllers\actions\calendar;


use app\base\BaseAction;

class ShowAction extends BaseAction
{
    public $classEntity;

    public function run(){

        $show = new $this->classEntity();

        return $this->controller->render('show',['model'=>$show]);
    }
}