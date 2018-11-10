

$('.goToProduct').on('click', function(e){
  e.preventDefault();
  var id = $(this).data('product');
  $('#getProduct').html('<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent"><div class="text-center" style="height: 50%"><img src="/images/123.gif" alt="загрузка" width="200px"></div></div>');

  $.ajax({
    url: '/site/product',
    data: {id: id},
    type: 'GET',
    success: function (res){
      if(!res)alert('ошибка');
      // console.log(res);
      $('#getProduct').html(res);
    },
    error: function () {
      alert('Errors');
    }

  });

});


$('.heard-block').on('click', function(e){
  var click = $(this).data('click');
  var id = $(this).data('id');
  var likes = $('.likes').data('notify');

  if(click == 0){
    $(this).html('<i class="zmdi zmdi-favorite heard-go"></i>')
    click++
    $(this).data('click', click);
    likes++
    $('.like').html('<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti likes" data-notify="'+likes+'"><i class="zmdi zmdi-favorite-outline"></i></a>');
  }else{
    $(this).html('<i class="zmdi zmdi-favorite-outline heard"></i>')
    click = 0;
    $(this).data('click', click);
    likes--
    $('.like').html('<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti likes" data-notify="'+likes+'"><i class="zmdi zmdi-favorite-outline"></i></a>');
  }

  $.ajax({
    url: '/cart/like',
    data: {id: id},
    type: 'GET',
    success: function (res){}

  });


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
        // console.log(res);
        $('.header-cart').html(res);
      },
      error: function () {
        alert('Errors');
      }

    });
});

// $("родитель").on('click', 'объект', function functionName() {
// console.log('hi');
// })
