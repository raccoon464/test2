<div class="data-notify" data-notify="<?= $_SESSION['cart.qty'] ?>">

</div>
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

        <ul class="header-cart-wrapitem w-full">
          <?php foreach ($_SESSION['cart'] as $id => $items){ ?>
          <li class="header-cart-item flex-w flex-t m-b-12">
            <div class="header-cart-item-img delite-product">
              <img src="/images/<?= $items['img'] ?>" alt="IMG" class="delite-product">
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

<script type="text/javascript">
$('.js-hide-cart').on('click',function(){
    $('.js-panel-cart').removeClass('show-header-cart');
});

$('.delite-product').on('click', function(){
    var id = $(this).data('id');

    $('.header-cart-wrapitem').html('Загрузка...');

    $.ajax({
      url: '/cart/delite',
      data: {id: id},
      type: 'GET',
      success: function (res){
        if(!res)alert('ошибка');
        console.log(res);
        $('.js-panel-cart').addClass('show-header-cart');
        $('.header-cart').html(res);
      },
      error: function () {
        alert('Errors');
      }

    });
});
</script>
