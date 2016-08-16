<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RadacctSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Radaccts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radacct-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Radacct'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'radacctid',
            'acctsessionid',
            'acctuniqueid',
            'username',
            //'groupname',
            'realm',
            // 'nasipaddress',
            // 'nasportid',
            // 'nasporttype',
            'acctstarttime',
            'acctstoptime',
            'acctsessiontime:datetime',
            'acctauthentic',
            'connectinfo_start',
            'connectinfo_stop',
            'acctinputoctets',
            'acctoutputoctets',
            'calledstationid',
            'callingstationid',
            'acctterminatecause',
            'servicetype',
            'framedprotocol',
            'framedipaddress',
            'acctstartdelay',
            
            'acctstopdelay',
            'xascendsessionsvrkey',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
