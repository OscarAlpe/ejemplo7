<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $foto
 * @property string|null $descripcion
 * @property float|null $precio
 * @property int|null $oferta
 *
 * @property Relacion[] $relacions
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['precio'], 'number'],
            [['oferta'], 'integer'],
            [['nombre', 'foto', 'descripcion'], 'string', 'max' => 255],
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
            'foto' => 'Foto',
            'descripcion' => 'Descripcion',
            'precio' => 'Precio',
            'oferta' => 'Oferta',
        ];
    }

    /**
     * Gets query for [[Relacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelacions()
    {
        return $this->hasMany(Relacion::className(), ['producto' => 'id']);
    }
}
