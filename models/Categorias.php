<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property string|null $foto
 *
 * @property Relacion[] $relacions
 */
class Categorias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'foto' => 'Foto',
        ];
    }

    /**
     * Gets query for [[Relacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelacions()
    {
        return $this->hasMany(Relacion::className(), ['categoria' => 'id']);
    }
}
