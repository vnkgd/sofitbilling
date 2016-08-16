<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nas */

$this->title = Yii::t('app', 'Create Nas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
