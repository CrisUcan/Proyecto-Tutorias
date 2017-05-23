<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SesionesdelPlanTutorial */

$this->title = Yii::t('app', 'Create Sesionesdel Plan Tutorial');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sesionesdel Plan Tutorials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sesionesdel-plan-tutorial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
