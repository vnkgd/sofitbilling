<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Radreply */

$this->title = Yii::t('app', 'Create Radreply');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Radreplies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radreply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
