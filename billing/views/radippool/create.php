<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Radippool */

$this->title = Yii::t('app', 'Create Radippool');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Radippools'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radippool-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
