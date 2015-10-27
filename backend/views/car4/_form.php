<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Car4 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car4-form">

    <?php $form = ActiveForm::begin(['id' => 'form-upload', 'options' => ['enctype' => 'multipart/form-data']]); ?>
   
  
    <div class="form-group">
                 <?php
            echo '<label class="control-label">เพิ่มไฟล์</label>';
            echo FileInput::widget([
                'model' => $model,
              //  'attribute' => 'myfile[]',
                'attribute' => 'myfile',
                'options' => ['multiple' => true,'accept' => '.xlsx','style'=>'width: 300px'],
                 'pluginOptions' => [
                 'showUpload'=>false,
                 'maxFileCount'=>1,
                 ], 
            ]);
            ?>
            </div>

    <?= $form->field($model, 'brand')->textInput()?>
   <?= $form->field($model, 'gen')->textInput()?>
   <?= $form->field($model, 'o1')->textInput()?>
   <?= $form->field($model, 'o2')->textInput()?>
   <?= $form->field($model, 'o3')->textInput()?>
   <?= $form->field($model, 'o4')->textInput()?>
  <?= $form->field($model, 'o5')->textInput()?>
  <?= $form->field($model, 'o6')->textInput()?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึกข้อมูล' : 'แก้ไขข้อมูล', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
