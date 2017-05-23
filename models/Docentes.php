<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docentes".
 *
 * @property string $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property string $telefono
 * @property string $correo
 * @property string $direccion
 * @property string $facebook
 *
 * @property DiagGrupal[] $diagGrupals
 */
class Docentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'docentes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno', 'telefono', 'correo'], 'required'],
            [['nombre', 'paterno', 'materno', 'telefono', 'correo', 'direccion', 'facebook'], 'string'],
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
            'telefono' => Yii::t('app', 'Telefono'),
            'correo' => Yii::t('app', 'Correo'),
            'direccion' => Yii::t('app', 'Direccion'),
            'facebook' => Yii::t('app', 'Facebook'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagGrupals()
    {
        return $this->hasMany(DiagGrupal::className(), ['n_docente' => 'id']);
    }
}
