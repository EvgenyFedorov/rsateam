<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>
<h1>This is my admin panel</h1>
<table class="table">
    <?php foreach($model as $items): ?>
        <tr>
            <td>#<?=$items['id']; ?></td>
            <td><?=$items['title']; ?></td>
            <td><?=$items['description']; ?></td>
            <td><a href="/admin/default/edit/<?=$items['id']; ?>">Редактировать</a></td>
            <td><a href="/admin/default/delete/<?=$items['id']; ?>">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="5" style="text-align: right;">
            <a href="/admin/default/create" class="btn btn-success">Добавить запись</a>
        </td>
    </tr>
</table>

<?php ActiveForm::end();?>