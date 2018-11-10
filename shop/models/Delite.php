<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Delite extends ActiveRecord{
  public function delite($product){
    unset($_SESSION['cart'][$product->id]);
    // debug($_SESSION['cart']);

    foreach ($_SESSION['cart'] as $id => $items){
      $price = $price + ( $items['price'] * $items['qty'] );
      $qty = $qty + $items['qty'];
    }
    $_SESSION['cart.qty'] = $qty;
    $_SESSION['cart.price'] = $price;
  }
}
