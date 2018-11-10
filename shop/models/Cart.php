<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord{
  public function addToCart($product, $qty = 1){
    if($my_qty){
      $qty = $my_qty;
    }

    if(!empty($_SESSION['cart'][$product->id])){
      $_SESSION['cart'][$product->id]['qty'] += $qty;
    }else{
        $_SESSION['cart'][$product->id] = [
          'qty' => $qty,
          'title' => $product->title,
          'price' => $product->price,
          'img' => $product->img,
        ];
    }
    foreach ($_SESSION['cart'] as $id => $items){
      $price = $price + ( $items['price'] * $items['qty'] );
      $qty_go = $qty_go + $items['qty'];
    }
    $_SESSION['cart.qty'] = $qty_go;
    $_SESSION['cart.price'] = $price;
    // debug($_SESSION['cart']);
    // debug($_SESSION['cart.qty']);
    // debug($_SESSION['cart.price']);

  }

}
?>
