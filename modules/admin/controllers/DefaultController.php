<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii;
use app\models\MyList;

class DefaultController extends Controller
{

    public function actionIndex()
    {
        $array_content = MyList::getAll();
        return $this->render('index', ['model' => $array_content]);
    }
    public function actionCreate()
    {
        $model = new MyList();

        if(isset($_POST['MyList'])){

            $model->title = $_POST['MyList']['title'];
            $model->description = $_POST['MyList']['description'];

            if($model->validate() && $model->save()){
                return $this->redirect(['index']);
            }

        }
        return $this->render('create', ['model' => $model]);
    }
    public function actionEdit()
    {
        return $this->render('edit');
    }
    public function actionDelete()
    {
        return $this->render('delete');
    }
}
