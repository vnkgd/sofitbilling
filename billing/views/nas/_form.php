<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nasname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ports')->textInput() ?>

    <?= $form->field($model, 'secret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'server')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'community')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
