<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relacion".
 *
 * @property int $id
 * @property int|null $producto
 * @property int|null $categoria
 *
 * @property Categorias $categoria0
 * @property Productos $producto0
 */
class Relacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producto', 'categoria'], 'integer'],
            [['categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['categoria' => 'id']],
            [['producto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['producto' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producto' => 'Producto',
            'categoria' => 'Categoria',
        ];
    }

    /**
     * Gets query for [[Categoria0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria0()
    {
        return $this->hasOne(Categorias::className(), ['id' => 'categoria']);
    }

    /**
     * Gets query for [[Producto0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducto0()
    {
        return $this->hasOne(Productos::className(), ['id' => 'producto']);
    }
}
