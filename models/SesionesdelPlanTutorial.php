<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sesionesdelplantutorial".
 *
 * @property string $id
 * @property string $actividad
 * @property string $objetivo
 * @property string $fecha
 */
class SesionesdelPlanTutorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sesionesdelplantutorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actividad', 'objetivo', 'fecha'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'actividad' => Yii::t('app', 'Actividad'),
            'objetivo' => Yii::t('app', 'Objetivo'),
            'fecha' => Yii::t('app', 'Fecha'),
        ];
    }
}
