<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PeriodoSemestral */

$this->title = Yii::t('app', 'Create Periodo Semestral');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Periodo Semestrals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periodo-semestral-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
