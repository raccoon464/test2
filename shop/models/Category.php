<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
// use app\model\Products;

class Category extends ActiveRecord{

  public static function tableName(){
    return 'category'; // находим нужную нам таблицу
  }

  public function getProducts(){
    return $this->hasMany(Prodact::className(), ['category_id' => 'id']);
  }

}
