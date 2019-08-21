<?php

namespace app\controllers\actions\activity;

use app\base\BaseAction;
use app\models\Users;

class ShowAllAction extends BaseAction
{
    public $classEntity;

    public function run($id){

        $user = Users::find()->andWhere(['id'=>$id])->one();
        if(!$user){

            throw new HttpException(404, 'User not found');
        }
//        print_r($user->getActivities()->all());exit;

                return $this->controller->render('viewall',['model'=> $user]);
    }
}