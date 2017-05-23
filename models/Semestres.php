<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "semestres".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Grupos[] $grupos
 * @property Periodosemestral[] $periodosemestrals
 */
class Semestres extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'semestres';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(Grupos::className(), ['n_semestre' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodosemestrals()
    {
        return $this->hasMany(Periodosemestral::className(), ['n_semestre' => 'id']);
    }
}
