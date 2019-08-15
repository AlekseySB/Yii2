<?php


namespace app\controllers;


use app\base\BaseController;
use app\controllers\actions\calendar\ShowAction;
use app\models\calendar\Show;


class CalendarController extends BaseController
{
    public function actions()
    {
        return ['show'=>['class'=>ShowAction::class,'classEntity'=>Show::class]];
    }
}