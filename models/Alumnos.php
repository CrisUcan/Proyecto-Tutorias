<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property string $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property integer $edad
 * @property string $telefono
 * @property string $correo
 * @property string $genero
 * @property string $n_carrera
 *
 * @property Carreras $nCarrera
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno'], 'required'],
            [['nombre', 'paterno', 'materno', 'telefono', 'correo', 'genero'], 'string'],
            [['edad', 'n_carrera'], 'integer'],
            [['n_carrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['n_carrera' => 'id']],
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
            'paterno' => Yii::t('app', 'Paterno'),
            'materno' => Yii::t('app', 'Materno'),
            'edad' => Yii::t('app', 'Edad'),
            'telefono' => Yii::t('app', 'Telefono'),
            'correo' => Yii::t('app', 'Correo'),
            'genero' => Yii::t('app', 'Genero'),
            'n_carrera' => Yii::t('app', 'N Carrera'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNCarrera()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'n_carrera']);
    }
}
