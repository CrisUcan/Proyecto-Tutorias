<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PeriodoSemestral */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Periodo Semestral',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Periodo Semestrals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="periodo-semestral-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
