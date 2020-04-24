<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'doc_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firts_time_visit')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'male,female other' => 'Male,female other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'birth_order')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education_level')->dropDownList([ 'Elementary,Cycle,High school,Associate,Masters,the doctor,PhD post' => 'Elementary,Cycle,High school,Associate,Masters,the doctor,PhD post', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maritalـstatus')->dropDownList([ 'Single' => 'Single', ',' => ',', 'Married' => 'Married', 'Widow / Widower' => 'Widow / Widower', 'Divorced' => 'Divorced', 'Engaged' => 'Engaged', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'child_count')->textInput() ?>

    <?= $form->field($model, 'job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primary_hand')->dropDownList([ 'Left' => 'Left', ',' => ',', 'Right' => 'Right', 'Both' => 'Both', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mobile_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_phones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referrer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'medicalـallergy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'old_document')->textInput() ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
