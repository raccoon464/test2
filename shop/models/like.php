<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Like extends ActiveRecord{
    public function addTolike($product){
      // if($_SESSION['cart'][$product->id]['like'] == 0){
      //   $_SESSION['cart'][$product->id]['like'] = 1;
      // }else {
      //   $_SESSION['cart'][$product->id]['like'] = 0;
      // }
      if($_SESSION['like'][$product->id] == 0){
        $_SESSION['like'][$product->id] = 1;
        $_SESSION['like']['qtw'] +=1;
      }else{
        $_SESSION['like'][$product->id] = 0;
        $_SESSION['like']['qtw'] -=1;
      }
      // $_SESSION['like']['qtw'] = 0;
      debug($_SESSION['like']);
    }

}
