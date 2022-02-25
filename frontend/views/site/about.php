<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\jui\DatePicker;
use app\models\Country;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

$model = new Country;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>
    <?php echo $model->getAttributeLabel('name') ?>


    <code><?= __FILE__ ?></code>
</div>
