<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
// use yii\grid\GridView;
use frontend\models\User;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'moduleId' => 'gridviewKrajee',
         'responsive'=>true,
         'hover'=>true,
         'pjax'=>false,
         'headerContainer' => ['class' => 'kv-table-header', 'style' => 'top: 50px'],
         'pageSummaryPosition' => GridView::POS_BOTTOM,
         'pjaxSettings'=>[
             'neverTimeout'=>true,
             'beforeGrid'=>'My fancy content before.',
             'afterGrid'=>'My fancy content after.',
             
         ],
         
         'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'firstname',
            'lastname',
            'dob',
            'createdat',
            'updated_at',
            [
                'class' => ActionColumn::className(),
                // 'urlCreator' => function ($action, User $model, $key, $index, $column) {
                //     return Url::toRoute([$action, 'id' => $model->id]);
                //  }
            ],
            
        ],

         'toolbar' => [
        [
            'content'=>
                Html::button('<i class="fas fa-plus"></i>', [
                    'type'=>'button', 
                    'title'=>Yii::t('kvgrid', 'Add Book'), 
                    'class'=>'btn btn-success'
                ]) . ' '.
                Html::a('<i class="fas fa-redo"></i>', ['grid-demo'], [
                    'class' => 'btn btn-secondary btn-default', 
                    'title' => Yii::t('kvgrid', 'Reset Grid')
                ]),
        ],
        'toggleDataContainer' => ['class' => 'btn-group-sm'],
    'exportContainer' => ['class' => 'btn-group-sm'],
    ]

    ]); ?>

   
        <button id="button111" class ="button-panel" data-button="button1">Button 1</button>
        <button  class ="button-panel" data-button="button2">Button 2</button>
        <button  class ="button-panel" data-button="button3">Button 3</button>
        <button  class ="button-panel" data-button="button4">Button 4</button>


        <div class="tab-panels">
            <ul class="tabs">
                <li rel="panel1" class="active">panel1</li>
                <li rel="panel2">panel2</li>
                <li rel="panel3">panel3</li>
                <li rel="panel4">panel4</li>
            </ul>

            <div id="panel1" class="panel active">
                content1<br/>
                content1<br/>
                content1<br/>
                content1<br/>
                content1<br/>
            </div>
            <div id="panel2" class="panel">
                content2<br/>
                content2<br/>
                content2<br/>
                content2<br/>
                content2<br/>
            </div>
            <div id="panel3" class="panel">
                content3<br/>
                content3<br/>
                content3<br/>
                content3<br/>
                content3<br/>
            </div>
            <div id="panel4" class="panel">
                content4<br/>
                content4<br/>
                content4<br/>
                content4<br/>
                content4<br/>
            </div>
        </div>



        <div class="tab-panels">
            <ul class="tabs">
                <li rel="panel5" class="active">panel5</li>
                <li rel="panel6">panel6</li>
                <li rel="panel7">panel7</li>
                <li rel="panel8">panel8</li>
            </ul>

            <div id="panel5" class="panel active">
                content5<br/>
                content5<br/>
                content5<br/>
                content5<br/>
                content5<br/>
            </div>
            <div id="panel6" class="panel">
                content6<br/>
                content6<br/>
                content6<br/>
                content6<br/>
                content6<br/>
            </div>
            <div id="panel7" class="panel">
                content7<br/>
                content7<br/>
                content7<br/>
                content7<br/>
                content7<br/>
            </div>
            <div id="panel8" class="panel">
                content8<br/>
                content8<br/>
                content8<br/>
                content8<br/>
                content8<br/>
            </div>
        </div>



</div>

<script src="bower_components/jquery/jquery.js"></script>
<!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->

<script>

    $(document).ready(function(){

        $('#button111').on('click',function(){
           console.log("dlasdkjhasjkd");
        }); 

    });

$(function() {

    $('.button-panel').on('click',function(){ 
       var button2Content = $(this).attr('data-button').val();
       alert(button2Content);
   
    });


});


</script>
