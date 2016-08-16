<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Radacct */

$this->title = Yii::t('app', 'Create Radacct');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Radaccts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radacct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
