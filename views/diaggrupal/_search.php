<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiagGrupalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diag-grupal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'n_docente') ?>

    <?= $form->field($model, 'descripcion_general') ?>

    <?= $form->field($model, 'alumno_irregular') ?>

    <?= $form->field($model, 'plan_estudio') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
