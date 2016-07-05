<?php

namespace app\models;

Class MyList extends \yii\db\ActiveRecord{

    public function rules(){

        return [
            [['title', 'description'], 'required'],
        ];

    }

    public static function tableName(){

        return 'list';

    }
    public static function getAll(){

        $array_content = self::find()->all();

        return $array_content;

    }
    public static function getOne($id){

        $array_content = self::find()->where(['id'=>$id])->one();

        return $array_content;

    }

}

?>