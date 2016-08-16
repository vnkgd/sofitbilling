<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Radacct */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Radacct',
]) . $model->radacctid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Radaccts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->radacctid, 'url' => ['view', 'id' => $model->radacctid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="radacct-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
