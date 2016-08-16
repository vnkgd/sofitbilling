<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RadippoolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="radippool-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pool_name') ?>

    <?= $form->field($model, 'framedipaddress') ?>

    <?= $form->field($model, 'nasipaddress') ?>

    <?= $form->field($model, 'calledstationid') ?>

    <?php // echo $form->field($model, 'callingstationid') ?>

    <?php // echo $form->field($model, 'expiry_time') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'pool_key') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
