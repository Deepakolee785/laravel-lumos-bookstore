@extends('frontend.components.master') 
{{-- title --}}
@section('title','Check-out')

@section('content')
<br><br><br><br>
      <div class="mx-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Check-out</li>
            </ol>
            
          </nav>
        </div>
        <div class="mx-5"><a href="/shop" class="btn btn-outline-primary">continue shopping</a></div><br>
        @if (Cart::content()->count() == 0)
            <div style="margin-bottom:13rem" class="container text-center alert alert-danger">No items has been added to cart!</div>
        @else
        <section  class="mx-5" >
              
              <div  class="table-responsive" id="check-out-books" >
                  <br>
                  <table class="table table-striped text-center" id="cart-table">
                      <thead style="background-color: blueviolet; color: white;">
                        <tr>
                          <th scope="col">Book Name</th>
                          <th scope="col">Qty</th>
                          <th scope="col">Price</th>
                          <th scope="col">Delete</th>
                          
                        </tr>
                      </thead>
                      <tbody class="text-center">
                         @foreach (Cart::content() as $cartItem)
                        <tr>
                          <td>{{$cartItem->name}}</td>
                          <td class="text-center">
                           <input type="number" class="form-control cart-qty" name="qty" value="{{$cartItem->qty}}" id="cartQty{{$cartItem->id}}" required>
                            <input type="hidden" name="rowId" value="{{$cartItem->rowId}}" id="rowId{{$cartItem->rowId}}">
    
                            </td>
                          <td>Rs {{$cartItem->price}}</td>
                          <td>
                            <button data-id="{{$cartItem->rowId}}"  class="text-dark cart-del" 
                            ><i class="fa fa-trash"></i
                            ></button>
                          </td>
                        </tr>
                        @endforeach
                        <tr class="text-right">
                           <td colspan="5"><b>Total: Rs {{Cart::subtotal()}}</b></td>
                        </tr>
                      </tbody>
                    </table>
              </div>
              <div id="customer-details" class="py-4">
               <h2 class="text-center">
                  Fill Your<b style="color: #a517ba;"> Details</b>
                  </h2><hr>
                <div class="check-out">
                  <form>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Full Name</label>
                        <div class="col-md-8 inputGroupContainer">
                           <div class="input-group"><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>
                        <div class="col-md-8 inputGroupContainer">
                           <div class="input-group"><input id="addressLine1" name="addressLine1" placeholder="Address" class="form-control" required="true" value="" type="text"></div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-8 inputGroupContainer text-center">
                           <div class="input-group"><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8 inputGroupContainer">
                           <div class="input-group"><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                        </div>
                     </div>
                     <div class="form-group">
                       <label class="col-md-4 control-label">College</label>
                       <div class="col-md-8 inputGroupContainer">
                          <div class="input-group"><input id="college" name="college" placeholder="College Name" class="form-control" required="true" value="" type="text"></div>
                       </div>
                    </div>

                    <div class="form-group">
                       <div class="col-md-8 inputGroupContainer">
                          <div class="input-group text-center"><input class="btn btn-info" name="submit"class="form-control" value="Order Books" type="Submit"></div>
                       </div>
                    </div>
                   </form>
                </div>
      </section>
      @endif
@endsection

@section('script')
<script type="text/javascript">
   jQuery(document).ready(function (){
      jQuery('#cart-table').on('click','.cart-del', function(){
          var rowId = $(this).data('id');
         //  console.log(rowId);
          jQuery.ajax({
            url : '/deleteFromCart/' + rowId,
            type : "GET",
            dataType : "text",
            success:function(){
              $("#cart-count").load(location.href + " #cart-count");
              $("#cart-items").load(location.href + " #cart-items");
              $("#cart-table").load(location.href + " #cart-table");
            },
            error: function(){
              alert('error deleting item');
            } 
          })
         })


         // increase qty in cart
         @foreach(Cart::content() as $cartItem)
          $('#cart-table').on('input','#cartQty{{$cartItem->id}}', function(){
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
                  $("#cart-table").load(location.href + " #check-out-books");
                }
              })
          })
          @endforeach
   }) 
</script>
@endsection