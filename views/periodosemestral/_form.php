<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeriodoSemestral */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periodo-semestral-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'n_carrera')->textInput() ?>

    <?= $form->field($model, 'n_semestre')->textInput() ?>

    <?= $form->field($model, 'n_grupo')->textInput() ?>

    <?= $form->field($model, 'periodo')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
