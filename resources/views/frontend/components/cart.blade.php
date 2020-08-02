 <!-- cart -->
    <!-- Modal -->
    {{-- {{dd(Cart::content())}} --}}
<div
    
    class="modal right fade"
    id="cart"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModalLabel2"
    style="font-size: .8rem;"
>
    <div class="modal-dialog" role="document">
    <div class="modal-content" id="cart-items">
        <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">
            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Your Cart
        </h4>
        <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
        >
            <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <div class="modal-body">
        @if (Cart::content()->count() == 0)
            <div class=" text-center alert alert-danger">No items has been added to cart!</div>
            <a class="float-right mr-2" href="{{route('shop')}}">Go to Shop</a>
        @else
        <!-- Shopping cart table -->
        <div class="table-responsive" >
            <table class="table">
            <thead class="text-center">
                <tr>
                <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Book</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Qty</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">DEL</div>
                </th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach (Cart::content() as $cartItem)
                <tr>
                    <th scope="row" class="border-0">
                        <div class="p-2">
                        <img
                            src="{{$cartItem->options->cover}}"
                            alt=""
                            width="70"
                            class="img-fluid rounded shadow-sm"
                        />
                        <div class="align-middle">
                            <h6 class="mb-0">
                            <a
                                href="#"
                                class="text-dark d-inline-block align-middle"
                                >{{$cartItem->name}}</a
                            >
                            </h6>
                        </div>
                        </div>
                    </th>
                    <td class="border-0 align-middle">
                        <strong>Rs {{$cartItem->price}}</strong>
                    </td>
                    <td class="border-0 align-middle">
                        <input type="hidden" name="rowId" value="{{$cartItem->rowId}}" id="rowId{{$cartItem->rowId}}">
                        <input type="number" class="form-control cart-qty" name="qty" value="{{$cartItem->qty}}" id="cartQty{{$cartItem->id}}" required>
                        {{-- <strong> <i class="fa fa-plus-circle px-2 btn-plus" aria-hidden="true"></i>
    
                        {{$cartItem->qty}}
                        <i class="fa fa-minus-circle px-2 btn-minus" aria-hidden="true"></i></strong> --}}
                    </td>
                    <td class="border-0 align-middle">
                        
                            <button data-id="{{$cartItem->rowId}}"  class="text-dark cart-del" 
                        ><i class="fa fa-trash"></i
                        ></button>
                    </td>
                    </tr>  
                @endforeach
                

                
            </tbody>
            </table>
            <div class="float-right">
            <h4 class="">Total: <b>Rs {{Cart::subtotal()}}</b></h4>
            <a href="{{route('clear-cart')}}" class="btn btn-danger btn-block">
                clear cart
            </a>    
            <a href="{{route('checkout')}}" class="btn btn-outline-info btn-block">
                Check Out
            </a>
            </div>
        </div>
            
        @endif
        <!-- End -->
        </div>
    </div>
    <!-- modal-content -->
    </div>
    <!-- modal-dialog -->
</div>
<!-- modal -->

