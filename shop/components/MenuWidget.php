<?php

namespace app\components;

use yii\base\Widget;
use app\models\Category;
use Yii;
/**
 *
 */
class MenuWidget extends Widget {

  public $data; // массив данных
  public $tree; // дeраво
  public $menuHtml; // теги Html
  public $tpl ;

  public function init(){
    parent::init();
    if( $this->tpl === null){
      $this->tpl = '';
    }
    // $this->tpl .= '.php';

  }

    public function run(){
      // get  cache
      $menu = Yii::$app->cache->get('menu');
      if($menu) return $menu ;


      // $this->data = Category::find()->indexBy('id')->asArray()->all();
      $titles = Category::find()->indexBy('id')->asArray()->all();
      // var_dump($titles);
      foreach ($titles as $title) {
        echo '<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*"><a href="products?id='.$title['id'].'">'
        .$title['title'].
        '</a></button>';
      }
      return $this->tpl;

      // set cache
       Yii::$app->cache->set('menu', $titles, 60);
    }

}
