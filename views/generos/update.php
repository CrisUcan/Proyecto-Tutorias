<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Generos */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Generos',
]) . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Generos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->nombre]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="generos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
