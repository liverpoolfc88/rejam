<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TumansShaharsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tumans Shahars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tumans-shahars-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tumans Shahars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
//            'img',
            'slug',
            'status',
            'template_id',
            'viloyat_id',
            'create_date',
            'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
