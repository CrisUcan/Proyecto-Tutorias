<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carreras".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Alumnos[] $alumnos
 * @property Grupos[] $grupos
 * @property Periodosemestral[] $periodosemestrals
 */
class Carreras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carreras';
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
    public function getAlumnos()
    {
        return $this->hasMany(Alumnos::className(), ['n_carrera' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(Grupos::className(), ['n_carrera' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodosemestrals()
    {
        return $this->hasMany(Periodosemestral::className(), ['n_carrera' => 'id']);
    }
 
    
    public static function getAll() {
        $carreras []  = "Seleccione la carrera"; 
    
        foreach (Carreras :: find()->all() as $registro) {
            $carreras [$registro -> id] = $registro-> nombre;
            
        }
        return $carreras;
    }
    
    }
    
