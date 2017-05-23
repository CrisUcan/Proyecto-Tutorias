<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diag_grupal".
 *
 * @property string $id
 * @property string $n_docente
 * @property string $descripcion_general
 * @property string $alumno_irregular
 * @property string $plan_estudio
 *
 * @property Docentes $nDocente
 */
class DiagGrupal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diag_grupal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['n_docente', 'descripcion_general', 'plan_estudio'], 'required'],
            [['n_docente', 'plan_estudio'], 'integer'],
            [['descripcion_general', 'alumno_irregular'], 'string'],
            [['n_docente'], 'exist', 'skipOnError' => true, 'targetClass' => Docentes::className(), 'targetAttribute' => ['n_docente' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'n_docente' => Yii::t('app', 'N Docente'),
            'descripcion_general' => Yii::t('app', 'Descripcion General'),
            'alumno_irregular' => Yii::t('app', 'Alumno Irregular'),
            'plan_estudio' => Yii::t('app', 'Plan Estudio'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNDocente()
    {
        return $this->hasOne(Docentes::className(), ['id' => 'n_docente']);
    }
}
