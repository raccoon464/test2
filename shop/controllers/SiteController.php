<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Products;
use app\models\Category;
use app\models\Order;
use app\models\Order_item;
use app\models\Users;
use yii\web\HttpException;
use app\models\Test;
use app\models\LoginForm;


class SiteController extends AppController
{
    /**
     * {@inheritdoc}
     */
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
                     'logout' => ['post', 'get'],
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


    public function actionIndex()
    {
        $this->setMeta('Главная', 'test', 'test');
        return $this->render('index');

    }


    public function actionProducts()
    {
        $this->setMeta('Shop | '. $category[$id]['title'], 'test', $category[$id]['title'] );
        $id = Yii::$app->request->get('id');

        $errors = '';
        if($id){

          $category = Category::find()->where(['id' => $id])->indexBy('id')->asArray()->all();
          if(empty($category)){
            throw new HttpException(404, 'The requested Item could not be found.');
          }

          $query =  Products::find()->where(['category_id' => $id]);
          if(empty($query)){
            throw new HttpException(404, 'The requested Item could not be found.');
          }

          $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2]);
          $products = $query->offset($pages->offset)->limit($pages->limit)->all();

          if (!$products) {
            $errors = 'Ничего не найдено :(';
            $this->setMeta('Ничего не найдено :(', 'test', 'test');
          }

        }else{
          $query =  Products::find();
          $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
          $products = $query->offset($pages->offset)->limit($pages->limit)->all();
          $this->setMeta('Shop', 'test', 'test');
        }
        if(empty($query)){
          throw new HttpException(404, 'The requested Item could not be found.');
        }
         return $this->render('products', [
           'products' => $products,
           'errors' => $errors,
           'category' => $category,
           'pages' => $pages,
         ]);

    }
      public function actionProduct($id){
        $id = Yii::$app->request->get('id');
        $product = Products::find()->where(['id' => $id])->asArray()->all();
        $this->layout = false;
        return $this->render('product',[
          'product' => $product,
        ]);
      }

      public function actionSearch(){
         $search = trim(Yii::$app->request->get('search'));

         if($search){
           $hint = 'Поиск по запросу '. $search;
           $products = Products::find()->where(['like', 'title', $search])->all();
         }else {
           $hint = "Введите что нибудь в поиск =) ";
         }
         $this->setMeta('Search');
         return $this->render('search', [
           'hint' => $hint,
           'products' => $products,
           'search'=> $search
         ]);
      }

      public function actionCart(){
        $session = Yii::$app->session;
        $session->open();
        $products = Products::find()->all();
        $order = new Order();
        if($order->load(Yii::$app->request->post())){
          $order->qty = $_SESSION['cart.qty'];
          $order->sum = $_SESSION['cart.price'];
          $order->status = '0';
          if( $order->save()){
            Yii::$app->mailer->compose('cart', ['session' => $session])
            ->setFrom('d0ktor.livsi@yandex.ru')
            ->setTo($order->email)
            ->setSubject('Тема сообщения')
            ->send();
            $order->seveOrderItems($session['cart'], $order->id);
            Yii::$app->session->setFlash('success');
            unset($_SESSION['cart']);
            unset($_SESSION['cart.price']);
            unset($_SESSION['cart.qty']);

            return $this->refresh();
          }else {
            Yii::$app->session->setFlash('error');
          }
        }
        return $this->render('cart',[
          'products' =>  $products,
          'order' =>  $order,
        ]);

      }

      public function actionUsers(){
        $users = new Users();
        $data = Yii::$app->request->post();
        if(Yii::$app->request->post()){
          // debug(Yii::$app->request->post());
          if($data['Users']['password'] == $data['Users']['password2']){
            $users->login = $data['Users']['login'];
            $users->mail = $data['Users']['mail'];
            $users->password = $data['Users']['password'];
            $users->save();
            Yii::$app->session->setFlash('success', 'Регистрация прошла успешно');
            return $this->refresh();
          }else {
            Yii::$app->session->setFlash('errors', 'Пароли не совпадают');
          }
        }
        return $this->render('users', [
          'users' => $users
        ]);
      }

      public function actionLogin()
      {

          if (!Yii::$app->user->isGuest) {
              return $this->goHome();
          }

          $model = new LoginForm();
          if ($model->load(Yii::$app->request->post()) && $model->login()) {
              return $this->goBack();
          }

          $model->password = '';
          return $this->render('login', [
              'model' => $model,
          ]);
      }

}
