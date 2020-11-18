<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel app\models\BanerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Baners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baner-index">


    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Baner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'image:ntext',
            'contant',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
