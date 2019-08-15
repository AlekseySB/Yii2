<?php


namespace app\controllers;


use app\base\BaseController;
use app\models\Day;
use app\controllers\actions\calendar\ShowDayAction;

class SingleController extends BaseController
{
    public function actions()
    {

        return ['day'=>['class'=>ShowDayAction::class,'classEntity'=>Day::class]];
    }
}