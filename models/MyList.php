<?php

namespace app\models;

Class MyList extends \yii\db\ActiveRecord{

    public static function tableName(){

        return 'list';

    }
    public static function getAll(){

        $array_content = self::find()->all();

        return $array_content;

    }
    public static function getOne(){

        $array_content = self::find()->where(['id'=>1])->one();

        return $array_content;

    }

}

?>