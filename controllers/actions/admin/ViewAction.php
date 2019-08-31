<?php


namespace app\controllers\actions\admin;


use app\base\BaseAction;
use yii\web\HttpException;

class ViewAction extends BaseAction
{

    public function run(){


//        print_r(\Yii::$app->user->getIdentity()->id);exit;

        if (\Yii::$app->rbac->canAdmin()) {

            return $this->controller->render('view');
        }
        throw new HttpException(403, 'Not Permitted');
    }
}