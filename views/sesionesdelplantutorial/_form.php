<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SesionesdelPlanTutorial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sesionesdel-plan-tutorial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'actividad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'objetivo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fecha')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
