<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cid',
            'doc_no',
            'firts_time_visit',
            'first_name',
            'last_name',
            //'father_name',
            //'gender',
            //'birth_date',
            //'birth_order',
            //'birth_place',
            //'education_level',
            //'major',
            //'maritalـstatus',
            //'child_count',
            //'job',
            //'primary_hand',
            //'mobile_number',
            //'home_phone',
            //'other_phones',
            //'referrer',
            //'address:ntext',
            //'comment:ntext',
            //'medicalـallergy:ntext',
            //'old_document',
            //'picture',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
