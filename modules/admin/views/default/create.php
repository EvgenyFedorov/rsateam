<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>
    <h1>This is my admin panel</h1>
    <div class="row">
        <div class="col-md-6">
            <?=$form->field($model, 'title')->textInput(); ?>
        </div>
        <div class="col-md-6">
            <?=$form->field($model, 'description')->textInput(); ?>
        </div>
        <div class="col-md-12">
            <?=Html::submitButton('Создать', ['class' => 'btn btn-success']); ?>
        </div>
    </div>


<?php ActiveForm::end();?>