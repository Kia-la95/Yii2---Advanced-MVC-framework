<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use kartik\select2\Select2;



/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--    --><?php
//    if(\Yii::$app->user->can('createCountry')) {
//    ?>
    <p>
        <?=
            Html::a('Create Country', ['create'], ['class' => 'btn btn-success'])
        ?>
    </p>
<!--    --><?php //}?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php echo Select2::widget([
        'model' => $searchModel,
        'attribute' => 'code',
        'data' => [1 => "First", 2 => "Second", 3 => "Third", 4 => "Fourth", 5 => "Fifth"],
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= GridView::widget([

        'moduleId' => 'gridviewKrajee',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'responsive'=>true,
         'hover'=>true,
        'resizableColumns' => true,
        'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'filterRowOptions' => ['class' => 'kartik-sheet-style'],
            'panel' => [
                    'type' => GridView::TYPE_INFO,
                    'heading' => 'Countries',
                    'footer' => '<h3 class="panel-footer">For more info please refer to...</h3>',
                ],

//        'showPageSummary' => true,
        'toolbar' =>  [
            [
                'content' =>
                    Html::button('<i class="fas fa-plus"></i>Country', [
                        'class' => 'btn btn-success',
                        'title' => Yii::t('kvgrid', 'Add Book'),
                        'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this demo!");'
                    ]) . ' '.
                    Html::a('<i class="fas fa-redo">Refresh</i>', ['index'], [
                        'class' => 'btn btn-outline-secondary',
                        'title'=>Yii::t('kvgrid', 'Reset Grid'),
                        'data-pjax' => 0,
                    ]),
                'options' => ['class' => 'btn-group mr-2 me-2']
            ],
            '{export}',
            '{toggleData}',
        ],
        'toggleDataContainer' => ['class' => 'btn-group mr-2 me-2'],
        'toggleDataOptions' => ['minCount' => 10],



//         set export properties
//        'export' => [
//            'fontAwesome' => true
//        ],

        'pjax'=>true,
//        'pjaxSettings'=>[
//        'neverTimeout'=>true,
//        'beforeGrid'=>'My fancy content before.',
//        'afterGrid'=>'My fancy content after.',
//    ],



        'columns' => [    # if we don't include this column, it will include all the columns from database by default
            ['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\RadioColumn'],

//            ['class'=>'kartik\grid\EditableColumn',
//                'attribute'=>'code',
//                 'pageSummary'=>true,
//                 'editableOptions'=>  [
//                    'header'=>'code',
//                    'size'=>'md',
//                    'formOptions'=>['action' => ['/site/editcountry']],
//                    'inputType'   => \kartik\editable\Editable::INPUT_TEXT,
//                    ],
//
//            ],



            'code',
            'name',
            'population',
            'tag',
            'image',
            ['class' => '\kartik\grid\CheckboxColumn'],
            ['class' => 'yii\grid\ActionColumn'], # View, edit, delete button
        ],



    ]); ?>


</div>
