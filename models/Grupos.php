<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupos".
 *
 * @property string $id
 * @property string $nombre
 * @property string $n_carrera
 * @property string $n_semestre
 *
 * @property Carreras $nCarrera
 * @property Semestres $nSemestre
 * @property Periodosemestral[] $periodosemestrals
 */
class Grupos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'n_carrera', 'n_semestre'], 'required'],
            [['nombre'], 'string'],
            [['n_carrera', 'n_semestre'], 'integer'],
            [['n_carrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['n_carrera' => 'id']],
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
            'nombre' => Yii::t('app', 'Nombre'),
            'n_carrera' => Yii::t('app', 'N Carrera'),
            'n_semestre' => Yii::t('app', 'N Semestre'),
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
    public function getNSemestre()
    {
        return $this->hasOne(Semestres::className(), ['id' => 'n_semestre']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodosemestrals()
    {
        return $this->hasMany(Periodosemestral::className(), ['n_grupo' => 'id']);
    }
}
