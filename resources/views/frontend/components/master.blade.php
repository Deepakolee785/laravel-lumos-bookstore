<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A level Books">
    <meta name="keywords" content="Books,A-level,A level, Nepal">
    <meta name="author" content="Lumos">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- Title icon --}}
    <link rel="shortcut icon" href="{{asset('frontend/assets/logo16x16.ico')}}" />
    {{-- title --}}
    <title>Lumos | @yield('title')</title>
    {{-- bootstrap 4 import --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    {{-- fontawesome 4 import --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" />
</head>
<body>
  <div class="wrapper">
    {{-- {{dd($cartItem)}} --}}
    {{-- navigation menu --}}
    @include('frontend.components.navbar')
    @yield('content')
    @include('frontend.components.footer')
    @include('frontend.components.cart')


    {{-- @if(session('message'))
      {{session('message')}}
    @endif --}}
    <h1 class="myBtn" id="status-area"><i class="fa fa-info-circle info-icon" aria-hidden="true"></i> </h1>
    <a href="#" id="toTop"></a>
  </div>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    {{-- custom js --}}
    <script src="{{asset('frontend/js/main.js')}}"></script>
    @yield('script')
    <script type="text/javascript">
      jQuery(document).ready(function ()
      { 
        // add to cart 
         jQuery('.add-cart').click(function(){
          var book_id = $(this).data('id');
          // console.log(book_id)
          jQuery.ajax({
                  url : '/addToCart/' + book_id,
                  type : "GET",
                  dataType : "text",
                  success:function(data)
                  {
                    $("#cart-count").load(location.href + " #cart-count");
                    $("#cart-items").load(location.href + " #cart-items");
                  },
                  
                  error: function () {
                      alert('error');
                  }
              }); 
         }) 


         // remove from cart
         jQuery('#cart').on('click','.cart-del', function(){
          var rowId = $(this).data('id');
          // console.log(rowId);
          jQuery.ajax({
            url : '/deleteFromCart/' + rowId,
            type : "GET",
            dataType : "text",
            success:function(){
              $("#cart-count").load(location.href + " #cart-count");
              $("#cart-items").load(location.href + " #cart-items");
            },
            error: function(){
              alert('error deleting item');
            } 
          })
         })

         // increase qty in cart
          @foreach(Cart::content() as $cartItem)
          $('#cart').on('input','#cartQty{{$cartItem->id}}', function(){
              var newQty = $('#cartQty{{$cartItem->id}}').val();
              var rowId = $('#rowId{{$cartItem->rowId}}').val();
              jQuery.ajax({
                url:'{{url('/cart/update')}}',
                data: 'rowId='+ rowId + '&newQty=' + newQty,
                type: 'get',
                success: function(res){
                  // console.log(res)
                  $("#cart-count").load(location.href + " #cart-count");
                  $("#cart-items").load(location.href + " #cart-items");
                  // $("#check-out-books").load(location.href + " #check-out-books");
                }
              })
          })
          @endforeach
    });

      // added to cart message
    (function($) {
    $.fn.flash_message = function(options) {
      
      options = $.extend({
        text: 'Done',
        time: 1500,
        how: 'before',
        class_name: ''
      }, options);
      
      return $(this).each(function() {
        if( $(this).parent().find('.flash_message').get(0) )
          return;
        
        var message = $('<span />', {
          'class': 'flash_message ' + options.class_name,
          text: options.text
        }).hide().fadeIn('fast');
        
        $(this)[options.how](message);
        
        message.delay(options.time).fadeOut('normal', function() {
          $(this).remove();
        });
        
      });
    };
})(jQuery);

$('.add-cart').click(function() {
    $('#status-area').flash_message({
        text: 'Added to cart!',
        how: 'append'
    });
    $('#status-area').css({backgroundColor: '#26ae60'});
    $(".fa-info-circle").removeClass( "info-icon" )      
    setTimeout(function(){
        $('#status-area').css({backgroundColor: ''});
        $(".fa-info-circle").addClass( "info-icon" )
    },1000);

});

      </script>
</body>
</html>