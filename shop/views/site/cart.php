<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 ?>

<div class="bg0 p-t-75 p-b-85" style="margin-top: 100px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
                <?php if (!$_SESSION['cart']){
                  echo  'Ваша корзина пуста =( ';
                }else {?>
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>
              <?php } ?>
              <?php if ($_SESSION['cart']) : ?>
                <?php foreach ($_SESSION['cart'] as $id => $items): ?>

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="/images/<?= $items['img'] ?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?= $items['title'] ?></td>
									<td class="column-3">$ <?= $items['price'] ?></td>
									<td class="column-4">

											<div  class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?= $items['qty'] ?>" style="margin-left:90px; height:40px; border: 1px solid #e4e5e8; padding: 5px; border-radius:7px;"><?= $items['qty'] ?>
</div>
									</td>
									<td class="column-5">$ <?= $items['qty'] * $items['price'] ?></td>
								</tr>
              <?php endforeach;?>
            <?php endif ?>
							</table>
						</div>

						<?php if ($_SESSION['cart']): ?>
              <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
  							<div class="flex-w flex-m m-r-20 m-tb-5">
  								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

  								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
  									Apply coupon
  								</div>
  							</div>

  							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
  								Update Cart
  							</div>
  						</div>
            <?php endif; ?>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									QUANTITY :
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<?= $_SESSION['cart.qty'] ?>
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="S p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>

								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>
                  <?php
                    if (Yii::$app->session->hasFlash('success')): ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Успещно создана заявка</strong> Ожидайте ответа модератора.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php endif; ?>
                    <?php if (Yii::$app->session->hasFlash('error')): ?> ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Что то пошло не так</strong> Попробуйте ещё раз.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['cart']): ?>
                  <?php $form = ActiveForm::begin(['method' => 'post',]); ?>
                      <?= $form->field($order, 'name') ?>
                      <?= $form->field($order, 'email') ?>
                      <?= $form->field($order, 'phone') ?>
                      <?= $form->field($order, 'adres') ?>


									<!-- <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="time">
											<option>Select a country...</option>
											<option>USA</option>
											<option>UK</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
									</div>

									<div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Update Totals
										</div>
									</div> -->

								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									$ <?= $_SESSION['cart.price'] ?>
								</span>
							</div>
						</div>

						<!-- <button class="">
							Proceed to Checkout
						</button> -->
            <?= Html::submitButton('Proceed to Checkout', ['class' => 'flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer']) ?>
        <?php ActiveForm::end() ?>
      <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
