<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\components\MenuWidget;
use yii\helpers\Url;

?>

<!-- Header -->
  <div class="h80"></div>


<div class="bg0 m-t-23 p-b-140">
  <div class="container">
    <div class="flex-w flex-sb-m p-b-52">
      <div class="flex-w flex-l-m filter-tope-group m-tb-10">
        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*"><a href="products">All</a></button>
        <?= MenuWidget::widget(['tpl' => '']); ?>
      </div>

      <div class="flex-w flex-c-m m-tb-10">
        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
          <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
          <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
          <a href="<?= Url::to(['site/search']) ?>">Search</a>
        </div>
      </div>

    </div>

    <div class="row isotope-grid">
      <?php echo $errors  ?>

      <?php foreach ($products as $product ) { ?>
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="/images/<?= $product->img ?>" alt="IMG-PRODUCT">

            <a href="product?id=<?= $product->id  ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 goToProduct js-show-modal1" data-product="<?= $product->id ?>">
              Quick View
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                <?= $product->title  ?>
              </a>

              <span class="stext-105 cl3">
                $ <?= $product->price  ?>
              </span>
            </div>

            <div class="like-block">
              <div class="block2-txt-child2 flex-r p-t-3 heard-block" data-id="<?= $product->id ?>" data-click="<?= $_SESSION['like'][$product->id] ?>">
                <?php
                if($_SESSION['like'][$product->id] == 0){
                  echo '<i class="zmdi zmdi-favorite-outline heard"></i>';
                }else {
                  echo '<i class="zmdi zmdi-favorite heard-go"></i>';
                }
                 ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>
  </div>

<div class="">
  <?php // display pagination
echo LinkPager::widget(['pagination' => $pages ]);
?>
<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
  <span class="symbol-btn-back-to-top">
    <i class="zmdi zmdi-chevron-up"></i>
  </span>
</div>

<script type="text/javascript">
  // $('.heard').on('click', function(){
  //     $('.heard-block').html('<i class="zmdi zmdi-favorite heard-go"></i>');
  // })
</script>
