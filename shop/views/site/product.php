<div class="data-notify" data-notify="<?= $_SESSION['cart.qty'] ?>">
 <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
  <button class="how-pos3 hov3 trans-04 js-hide-modal1">
    <img src="/images/icons/icon-close.png" alt="CLOSE">
  </button>

  <div class="row">
    <div class="col-md-6 col-lg-7 p-b-30">
      <div class="p-l-25 p-r-30 p-lr-0-lg">
        <div class="wrap-slick3 flex-sb flex-w">
          <div class="wrap-slick3-dots"></div>
          <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

          <div class="slick3 gallery-lb">
            <div class="item-slick3" data-thumb="/images/<?= $product[0]['img']; ?>">
              <div class="wrap-pic-w pos-relative">
                <img src="/images/<?= $product[0]['img']; ?>" alt="IMG-PRODUCT">

                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/images/<?= $product[0]['img']; ?>">
                  <i class="fa fa-expand"></i>
                </a>
              </div>
            </div>

            <div class="item-slick3" data-thumb="/images/<?= $product[0]['img']; ?>">
              <div class="wrap-pic-w pos-relative">
                <img src="/images/<?= $product[0]['img']; ?>" alt="IMG-PRODUCT">

                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/images/<?= $product[0]['img']; ?>">
                  <i class="fa fa-expand"></i>
                </a>
              </div>
            </div>

            <div class="item-slick3" data-thumb="/images/<?= $product[0]['img']; ?>">
              <div class="wrap-pic-w pos-relative">
                <img src="/images/<?= $product[0]['img']; ?>" alt="IMG-PRODUCT">

                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/images/<?= $product[0]['img']; ?>">
                  <i class="fa fa-expand"></i>
                </a>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-5 p-b-30">
      <div class="p-r-50 p-t-5 p-lr-0-lg">
        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
          <?= $product[0]['title']; ?>
        </h4>

        <span class="mtext-106 cl2">
          $<?= $product[0]['price']; ?>
        </span>

        <p class="stext-102 cl3 p-t-23">
          <?=$product[0]['discription'];  ?>
        </p>


        <div class="p-t-33">
          <div class="flex-w flex-r-m p-b-10">
            <div class="size-203 flex-c-m respon6">
              Size
            </div>

            <div class="size-204 respon6-next">
              <div class="rs1-select2  bg0">
                <select class="js-select2" name="time" style="width:100%; height: 40px; border-radius: 20px; border:1px solid #c1c3c2; padding:5px; outline:none;">
                  <option>Choose an option</option>
                  <option>Size S</option>
                  <option>Size M</option>
                  <option>Size L</option>
                  <option>Size XL</option>
                </select>
                <div class="dropDownSelect2"></div>
              </div>
            </div>
          </div>

          <div class="flex-w flex-r-m p-b-10">
            <div class="size-203 flex-c-m respon6">
              Color
            </div>

            <div class="size-204 respon6-next">
              <div class="rs1-select2 bg0">
                <select class="js-select2" name="time" style="width:100%; height: 40px; border-radius: 20px; border:1px solid #c1c3c2; padding:5px; outline:none;">
                  <option>Choose an option</option>
                  <option>Red</option>
                  <option>Blue</option>
                  <option>White</option>
                  <option>Grey</option>
                </select>
                <div class="dropDownSelect2"></div>
              </div>
            </div>
          </div>

          <div class="flex-w flex-r-m p-b-10">
            <div class="size-204 flex-w flex-m respon6-next">
              <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                  <i class="fs-16 zmdi zmdi-minus"></i>
                </div>

                <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                  <i class="fs-16 zmdi zmdi-plus"></i>
                </div>
              </div>

              <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail addToCart" data-id="<?= $product[0]['id']; ?>">
                Add to cart
              </button>
            </div>
          </div>
        </div>


        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
          <div class="flex-m bor9 p-r-10 m-r-11">
            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
              <i class="zmdi zmdi-favorite"></i>
            </a>
          </div>

          <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
            <i class="fa fa-facebook"></i>
          </a>

          <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
            <i class="fa fa-twitter"></i>
          </a>

          <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
            <i class="fa fa-google-plus"></i>
          </a>
        </div>
      </div>

    </div>
    <div class="bor10 m-t-50 p-t-43 p-b-40" style="width:100%; margin: 0px 40px;">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Weight
											</span>

											<span class="stext-102 cl6 size-206">
												0.79 kg
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Dimensions
											</span>

											<span class="stext-102 cl6 size-206">
												110 x 33 x 100 cm
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Materials
											</span>

											<span class="stext-102 cl6 size-206">
												60% cotton
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>

											<span class="stext-102 cl6 size-206">
												Black, Blue, Grey, Green, Red, White
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Size
											</span>

											<span class="stext-102 cl6 size-206">
												XL, L, M, S
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->
										<div class="flex-w flex-t p-b-68">
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="/images/avatar-01.jpg" alt="AVATAR">
											</div>

											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														Ariana Grande
													</span>

													<span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
												</div>

												<p class="stext-102 cl6">
													Quod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
												</p>
											</div>
										</div>

										<!-- Add review -->
										<form class="w-full">
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

  </div>
</div>

<script >

$('.addToCart').on('click', function(e){
  // e.preventDefault();
  var id = $(this).data('id');
  var num_cart = $('.data-notify').data('notify');
  num_cart++
  $('.cart').html('<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="'+ num_cart +'"><i class="zmdi zmdi-shopping-cart"></i></div>');
  var qty =  $('.num-product').val();
  $.ajax({
    url: '/cart/add',
    data: {id: id, qty:qty},
    type: 'GET',
    success: function (res){
      if(!res)alert('ошибка');
      // console.log(res);
      $('.cart-modal').html(res);
      $('.js-panel-cart').addClass('show-header-cart');
      $('.js-modal1').removeClass('show-modal1');
    },
    error: function () {
      alert('Errors');
    }

  });

});
// [ Show modal1 ]
function product() {
  $('.js-show-modal1').on('click',function(e){
      e.preventDefault();
      $('.js-modal1').addClass('show-modal1');
  });

  $('.js-hide-modal1').on('click',function(){
      $('.js-modal1').removeClass('show-modal1');
  });

  $('#adToCart').on('click', function(e){
    // console.log('ghbdn');
      e.preventDefault();

  });
}

/*==================================================================
[ Cart ]*/
$('.js-show-cart').on('click',function(){
    $('.js-panel-cart').addClass('show-header-cart');
});

$('.js-hide-cart').on('click',function(){
    $('.js-panel-cart').removeClass('show-header-cart');
});

// [ Show modal1 ]*/
$('.js-show-modal1').on('click',function(e){
    e.preventDefault();
    $('.js-modal1').addClass('show-modal1');
});

$('.js-hide-modal1').on('click',function(){
    $('.js-modal1').removeClass('show-modal1');
});

$('#adToCart').on('click', function(e){
  // console.log('ghbdn');
    e.preventDefault();

});

// [ +/- num product ]*/
$('.btn-num-product-down').on('click', function(){
    var numProduct = Number($(this).next().val());
    if(numProduct > 0) $(this).next().val(numProduct - 1);
});

$('.btn-num-product-up').on('click', function(){
    var numProduct = Number($(this).prev().val());
    $(this).prev().val(numProduct + 1);
});

// [ Slick3 ]*/
$('.wrap-slick3').each(function(){
    $(this).find('.slick3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 6000,

        arrows: true,
        appendArrows: $(this).find('.wrap-slick3-arrows'),
        prevArrow:'<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow:'<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

        dots: true,
        appendDots: $(this).find('.wrap-slick3-dots'),
        dotsClass:'slick3-dots',
        customPaging: function(slick, index) {
            var portrait = $(slick.$slides[index]).data('thumb');
            return '<img src=" ' + portrait + ' "/><div class="slick3-dot-overlay"></div>';
        },
    });
});
$('.delite-product').on('click', function(){
    var id = $(this).data('id');
    $('.header-cart-wrapitem').html('<img src="/images/123.gif" alt="загрузка" width="200px">');
    $.ajax({
      url: '/cart/cliar',
      data: {id: id},
      type: 'GET',
      success: function (res){
        if(!res)alert('ошибка');
        // console.log(res);
        $('.js-hide-cart').html(res);
      },
      error: function () {
        alert('Errors');
      }

    });
});
</script>
