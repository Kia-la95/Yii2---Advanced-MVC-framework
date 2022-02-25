<?php

use yii\helpers\Html;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Find Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>



<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php

echo $this->field($model, 'country')->widget(Select2::classname(), [
    'data' => $data,
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],


        'code',
        'name',
        'population',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>