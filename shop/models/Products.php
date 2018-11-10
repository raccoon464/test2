<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
// use app\model\Category;

class Products extends ActiveRecord{

  public static function tableName(){
    return 'products'; // находим нужную нам таблицу
  }

  public function getCategory(){
    return $this->hasOne(Category::className(), ['id' => 'category_id']);
  }

}
