<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "generos".
 *
 * @property string $nombre
 */
class Generos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'generos';
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
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }
    public static function getAll() {
        $generos []  = "Seleccione la carrera"; 
    
        foreach (Generos :: find()->all() as $registro) {
            $generos [$registro -> id] = $registro-> nombre;
            
        }
        return $generos;
    }
}
