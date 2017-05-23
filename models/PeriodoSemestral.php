<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "periodosemestral".
 *
 * @property string $id
 * @property string $n_carrera
 * @property string $n_semestre
 * @property string $n_grupo
 * @property string $periodo
 *
 * @property Carreras $nCarrera
 * @property Grupos $nGrupo
 * @property Semestres $nSemestre
 */
class PeriodoSemestral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periodosemestral';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['n_carrera', 'n_semestre', 'n_grupo', 'periodo'], 'required'],
            [['n_carrera', 'n_semestre', 'n_grupo'], 'integer'],
            [['periodo'], 'string'],
            [['n_carrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['n_carrera' => 'id']],
            [['n_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupos::className(), 'targetAttribute' => ['n_grupo' => 'id']],
            [['n_semestre'], 'exist', 'skipOnError' => true, 'targetClass' => Semestres::className(), 'targetAttribute' => ['n_semestre' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'n_carrera' => Yii::t('app', 'N Carrera'),
            'n_semestre' => Yii::t('app', 'N Semestre'),
            'n_grupo' => Yii::t('app', 'N Grupo'),
            'periodo' => Yii::t('app', 'Periodo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNCarrera()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'n_carrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNGrupo()
    {
        return $this->hasOne(Grupos::className(), ['id' => 'n_grupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNSemestre()
    {
        return $this->hasOne(Semestres::className(), ['id' => 'n_semestre']);
    }
}
