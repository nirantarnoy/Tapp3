<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Car4Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car4-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'car4_id') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'gen') ?>

    <?= $form->field($model, 'o1') ?>

    <?= $form->field($model, 'o2') ?>

    <?php // echo $form->field($model, 'o3') ?>

    <?php // echo $form->field($model, 'o4') ?>

    <?php // echo $form->field($model, 'o5') ?>

    <?php // echo $form->field($model, 'o6') ?>

    <?php // echo $form->field($model, 'o7') ?>

    <?php // echo $form->field($model, 'o8') ?>

    <?php // echo $form->field($model, 'o9') ?>

    <?php // echo $form->field($model, 'o10') ?>

    <?php // echo $form->field($model, 'o11') ?>

    <?php // echo $form->field($model, 'o12') ?>

    <?php // echo $form->field($model, 'o13') ?>

    <?php // echo $form->field($model, 'o14') ?>

    <?php // echo $form->field($model, 'o15') ?>

    <?php // echo $form->field($model, 'o16') ?>

    <?php // echo $form->field($model, 'o17') ?>

    <?php // echo $form->field($model, 'o18') ?>

    <?php // echo $form->field($model, 'o19') ?>

    <?php // echo $form->field($model, 'o20') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'close') ?>

    <?php // echo $form->field($model, 'open') ?>

    <?php // echo $form->field($model, 'tabain') ?>

    <?php // echo $form->field($model, 'mile') ?>

    <?php // echo $form->field($model, 'serialbox') ?>

    <?php // echo $form->field($model, 'serialmachine') ?>

    <?php // echo $form->field($model, 'arena') ?>

    <?php // echo $form->field($model, 'datearena') ?>

    <?php // echo $form->field($model, 'detail') ?>

    <?php // echo $form->field($model, 'pricevat') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
