<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Radippool */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="radippool-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pool_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'framedipaddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nasipaddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calledstationid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'callingstationid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expiry_time')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pool_key')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
