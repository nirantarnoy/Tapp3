<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Car4Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายชื่อรถยนต์';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car4-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Car', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'car4_id',
            'brand',
            'gen',
            'o1',
            'o2',
            // 'o3',
            // 'o4',
            // 'o5',
            // 'o6',
            // 'o7',
            // 'o8',
            // 'o9',
            // 'o10',
            // 'o11',
            // 'o12',
            // 'o13',
            // 'o14',
            // 'o15',
            // 'o16',
            // 'o17',
            // 'o18',
            // 'o19',
            // 'o20',
            // 'year',
            // 'id',
            // 'close',
            // 'open',
            // 'tabain',
            // 'mile',
            // 'serialbox',
            // 'serialmachine',
            // 'arena',
            // 'datearena',
            // 'detail:ntext',
            // 'pricevat',
            // 'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
