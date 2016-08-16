<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Radgroupcheck */

$this->title = Yii::t('app', 'Create Radgroupcheck');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Radgroupchecks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radgroupcheck-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
