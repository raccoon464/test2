<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>
  <body>
  <?php $this->beginBody() ?>

  <!-- Header -->

  	<header>
  		<!-- Header desktop -->
  		<div class="container-menu-desktop">
  			<div class="wrap-menu-desktop">
  				<nav class="limiter-menu-desktop container">

  					<!-- Logo desktop -->
  					<a href="#" class="logo">
  						<img src="/images/icons/logo.png" alt="IMG-LOGO">
  					</a>

  					<!-- Menu desktop -->
  					<div class="menu-desktop">
  						<ul class="main-menu">
  							<li class="active-menu">
  								<a href="/">Home</a>
  							</li>

  							<li>
  								<a href="/site/products">Product</a>
  							</li>

  							<li class="label1" data-label1="hot">
  								<a href="/site/cart">Features</a>
  							</li>

  							<li>
  								<a href="/site/blog">Blog</a>
  							</li>

  							<li>
  								<a href="/site/about">About</a>
  							</li>

  							<li>
  								<a href="/site/contact">Contact</a>
  							</li>
  						</ul>
  					</div>

  					<!-- Icon header -->
  					<div class="wrap-icon-header flex-w flex-r-m">

  						<div class="cart">
                <?php if( !$_SESSION['cart.qty']){ $_SESSION['cart.qty'] = 0 ;}?>
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?= $_SESSION['cart.qty'] ?>">
    							<i class="zmdi zmdi-shopping-cart"></i>
    						</div>
              </div>

              <div class="like">
  						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti likes" data-notify="<?= $_SESSION['like']['qtw'] ?>">
  							<i class="zmdi zmdi-favorite-outline"></i>
  						</a>
              </div>
  					</div>
  				</nav>
  			</div>
  		</div>

  		<!-- Header Mobile -->
  		<div class="wrap-header-mobile">
  			<!-- Logo moblie -->
  			<div class="logo-mobile">
  				<a href="index.html"><img src="/images/icons/logo-01.png" alt="IMG-LOGO"></a>
  			</div>

  			<!-- Icon header -->
  			<div class="wrap-icon-header flex-w flex-r-m m-r-15">

  				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
  					<i class="zmdi zmdi-shopping-cart"></i>
  				</div>

  				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
  					<i class="zmdi zmdi-favorite-outline"></i>
  				</a>
  			</div>

  			<!-- Button show menu -->
  			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
  				<span class="hamburger-box">
  					<span class="hamburger-inner"></span>
  				</span>
  			</div>
  		</div>


  		<!-- Menu Mobile -->
  		<div class="menu-mobile">

  			<ul class="main-menu-m">
  				<li>
  					<a href="index.php">Home</a>
  				</li>

  				<li>
  					<a href="product.php">Shop</a>
  				</li>

  				<li>
  					<a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
  				</li>

  				<li>
  					<a href="blog.php">Blog</a>
  				</li>

  				<li>
  					<a href="about.php">About</a>
  				</li>

  				<li>
  					<a href="contact.php">Contact</a>
  				</li>
  			</ul>
  		</div>

  		<!-- Modal Search -->
  		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
  			<div class="container-search-header">
  				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
  					<img src="/images/icons/icon-close2.png" alt="CLOSE">
  				</button>

  				<form class="wrap-search-header flex-w p-l-15">
  					<button class="flex-c-m trans-04">
  						<i class="zmdi zmdi-search"></i>
  					</button>
  					<input class="plh3" type="text" name="search" placeholder="Search...">
  				</form>
  			</div>
  		</div>
  	</header>
    <!-- Cart -->
    <div class="cart-modal">
      <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">

          <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
              Your Cart
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
              <i class="zmdi zmdi-close"></i>
            </div>
          </div>

            <div class="header-cart-content flex-w js-pscroll">

              <ul class="header-cart-wrapitem w-full ">
                <?php if($_SESSION['cart']) :?>
                <?php foreach ($_SESSION['cart'] as $id => $items){ ?>
                <li class="header-cart-item flex-w flex-t m-b-12">
                  <div class="header-cart-item-img delite-product" data-id="<?= $id ?>">
                    <img src="/images/<?= $items['img'] ?>" alt="IMG" class="delite-product" data-id="<?= $id ?>">
                  </div>

                  <div class="header-cart-item-txt p-t-8">
                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                      <?= $items['title'] ?>
                    </a>

                    <span class="header-cart-item-info">
                      <?= $items['qty'] ?> x <?= $items['price'] ?>
                    </span>
                  </div>
                </li>
              <?php } ?>
            <?php endif ?>
              </ul>

              <div class="w-full">
                <div class="header-cart-total w-full ">
                  Total: <?= "  ". $_SESSION['cart.price'] ?> $
                </div>
                <div class="header-cart-total  " style="margin: 20px 0px;">
                  Quantity: <?= "  ". $_SESSION['cart.qty'] ?>
                </div>

                <div class="header-cart-buttons flex-w w-full">
                  <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                    View Cart
                  </a>

                  <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                    Check Out
                  </a>
                </div>
              </div>
            </div>

        </div>
      </div>
  </div>




    <?= $content ?>


    <!-- Modal1 -->
    	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    		<div class="overlay-modal1 js-hide-modal1"></div>

    		<div class="container" id="getProduct">
    			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
    				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
    					<img src="/images/icons/icon-close.png" alt="CLOSE">
    				</button>

            <div class="text-center" style="height: 50%">
              <!-- <h1 class="display-3">Загрузка...</h1> -->
              <!-- <img src="/images/123.gif" alt="загрузка" width="200px"> -->
            </div>

    			</div>
    		</div>
    	</div>


    <!-- Footer -->
    	<!-- <footer class="bg3 p-t-75 p-b-32">
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-6 col-lg-3 p-b-50">
    					<h4 class="stext-301 cl0 p-b-30">
    						Categories
    					</h4>

    					<ul>
    						<li class="p-b-10">
    							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    								Women
    							</a>
    						</li>

    						<li class="p-b-10">
    							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    								Men
    							</a>
    						</li>

    						<li class="p-b-10">
    							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    								Shoes
    							</a>
    						</li>

    						<li class="p-b-10">
    							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    								Watches
    							</a>
    						</li>
    					</ul>
    				</div>

    				<div class="col-sm-6 col-lg-3 p-b-50">
    					<h4 class="stext-301 cl0 p-b-30">
    						Help
    					</h4>

    					<ul>
    						<li class="p-b-10">
    							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    								Track Order
    							</a>
    						</li>

    						<li class="p-b-10">
    							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    								Returns
    							</a>
    						</li>

    						<li class="p-b-10">
    							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    								Shipping
    							</a>
    						</li>

    						<li class="p-b-10">
    							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    								FAQs
    							</a>
    						</li>
    					</ul>
    				</div>

    				<div class="col-sm-6 col-lg-3 p-b-50">
    					<h4 class="stext-301 cl0 p-b-30">
    						GET IN TOUCH
    					</h4>

    					<p class="stext-107 cl7 size-201">
    						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
    					</p>

    					<div class="p-t-27">
    						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
    							<i class="fa fa-facebook"></i>
    						</a>

    						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
    							<i class="fa fa-instagram"></i>
    						</a>

    						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
    							<i class="fa fa-pinterest-p"></i>
    						</a>
    					</div>
    				</div>

    				<div class="col-sm-6 col-lg-3 p-b-50">
    					<h4 class="stext-301 cl0 p-b-30">
    						Newsletter
    					</h4>

    					<form>
    						<div class="wrap-input1 w-full p-b-4">
    							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
    							<div class="focus-input1 trans-04"></div>
    						</div>

    						<div class="p-t-18">
    							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
    								Subscribe
    							</button>
    						</div>
    					</form>
    				</div>
    			</div>

    			<div class="p-t-40">

    				<p class="stext-107 cl6 txt-center">
    					 Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    				<!-- </p>
    			</div>
    		</div>
    	</footer> -->



  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
