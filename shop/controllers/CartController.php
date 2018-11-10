<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use app\models\Products;
use app\models\Cart;
use app\models\like;
use app\models\Delite;
use app\models\LoginForm;

class CartController extends AppController{

  public function behaviors()
  {
      return [
          'access' => [
              'class' => AccessControl::className(),
              'only' => ['logout'],
              'rules' => [
                  [
                      'actions' => ['logout'],
                      'allow' => true,
                      'roles' => ['@'],
                  ],
              ],
          ],
          'verbs' => [
              'class' => VerbFilter::className(),
              'actions' => [
                  'logout' => ['post'],
              ],
          ],
      ];
  }

  /**
   * {@inheritdoc}
   */
  public function actions()
  {
      return [
          'error' => [
              'class' => 'yii\web\ErrorAction',
          ],
          'captcha' => [
              'class' => 'yii\captcha\CaptchaAction',
              'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
          ],
      ];
  }

  public function actionAdd(){
    $id = Yii::$app->request->get('id');
    $my_qty = Yii::$app->request->get('qty');
    $this->layout = false;
    $product = Products::findOne($id);
    if(empty($product)) return false;
    $session = Yii::$app->session;
    $session->open();
    $cart = new Cart();
    $cart->addToCart($product, $my_qty);
    // exit;
    return $this->render('add');
  }

  public function actionLike(){
    $id = Yii::$app->request->get('id');
    $this->layout = false;
    $product = Products::findOne($id);
    if(empty($product)) return false;
    $cart = new Like();
    $cart->addToLike($product);
    exit;
  }

  public function actionDelite(){
    $this->layout = false;
    $id = Yii::$app->request->get('id');
    $product = Products::findOne($id);
    $cart = new Delite();
    $cart->delite($product);
    // exit;
    return $this->render('delite');
  }
  // $_SESSION['cart.qty']
    public function actionCliar(){
      $session = Yii::$app->session;
      $session->open();
      $session->remove('cart');
      $session->remove('cart.qty');
      $session->remove('cart.price');

    }

    

}
