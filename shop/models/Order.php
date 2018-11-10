<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $phone
 * @property int $qty
 * @property int $sum
 * @property string $status
 * @property string $adres
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    public function behaviors()
   {
       return [
           [
               'class' => TimestampBehavior::className(),
               'attributes' => [
                   ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                   // ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
               ],
               // если вместо метки времени UNIX используется datetime:
               'value' => new Expression('NOW()'),
           ],
       ];
   }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'adres'], 'required',  'message' => 'Заполните поле'],
            [['name', 'email', 'status', 'adres'], 'string'],
            [['phone', 'qty', 'sum'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'adres' => 'Adress',
        ];
    }


          public function seveOrderItems($items, $order_id){
            // die(debug($items));
              foreach ($items as $id => $item) {
                $order_items = new Order_item();
                $order_items->order_id = $order_id;
                $order_items->product_id = $id;
                $order_items->title = $item['title'];
                $order_items->qty = $item['qty'];
                $order_items->sum = $item['qty'] * $item['price'];
                $order_items->img = $item['img'];
                $order_items->save();

              }

          }
}
