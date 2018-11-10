<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property int $id
 * @property int $order_id
 * @property string $title
 * @property int $qty
 * @property int $price
 * @property string $img
 */
class Order_item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'title', 'qty', 'sum'], 'required'],
            [['order_id', 'qty'], 'integer'],
            [['title', 'img'], 'string'],
        ];
    }
}
