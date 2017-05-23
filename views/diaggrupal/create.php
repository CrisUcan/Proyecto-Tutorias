<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiagGrupal */

$this->title = Yii::t('app', 'Create Diag Grupal');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diag Grupals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diag-grupal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
