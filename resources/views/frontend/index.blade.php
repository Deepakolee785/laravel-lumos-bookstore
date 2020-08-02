@extends('frontend.components.master') 
{{-- title --}}
@section('title','Home')
{{-- {{dd(Cart::content())}} --}}
@section('content')

<!-- banner -->
<section id="banner">
    <div class="container">
        <div class="row">
        <div class="col-md-6 ">
            <h5 class="logo-title">LUMOS</h5>
            <!-- <img src="assets/logo.png" alt=""> -->
            <form action="{{route('search')}}" method="get" class="form-group d-flex text-center">
                @csrf
            <input
                class="form-control"
                type="text"
                placeholder="Search book"
                name="query_input"
                required
            />
            <button
                type="submit"
                name="submit"
                class="mx-1 btn btn-outline-warning search-btn"
            >
                Search
            </button>
            </form>
            <div class="banner-title text-md-left text-center">
            Choose Your College <br />Get your A Levels Books
            </div>
            <p class="sub-text text-md-left text-center">As simple as that.</p>
            <div class="banner-buttons text-md-left text-center mt-md-5">
            <a
                href="/"
                class="btn-choose btn"
                data-toggle="modal"
                data-target="#exampleModalLong"
                ><i class="fa fa-filter" aria-hidden="true"></i> Choose
                College</a
            >
            <a href="{{route('shop')}}" class="btn-shop btn btn-outline-warning mt-2"
                ><i class="fa fa-shopping-basket" aria-hidden="true"></i> Shop
                Now</a
            >
            </div>
        </div>
        <div class="col-md-6 text-center bookslef-img">
            <img src="{{asset('frontend/assets/bookshelves.png')}}" class="img-fluid" alt="Img" />
        </div>
        </div>
    </div>  
    <div class="wave">
        <!-- <img src="assets/wave.png" alt="" class=""> -->
    </div>
    </section>

    <!-- model -->
    <div
    class="modal fade"
    id="exampleModalLong"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLongTitle"
    aria-hidden="true"
    >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">
            Choose your college and Group!
            </h5>
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
            <form action="/filtered-books" method="get">
            @csrf
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"
                >Choose Your College</label
            >
            <select
                name="college_id"
                class="custom-select my-1 mr-sm-2"
                id="inlineFormCustomSelectPref"
                required
                value="{{ old('college_id') }}"
            >
            <option selected>---Select College---</option>
            @foreach ($colleges as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
            </select>
            @error('group_id')
                <div class="alert alert-danger">{{ $message }}</div>
             @enderror
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"
                >Choose Your Group</label
            >
            <select
                name="group_id"
                class="custom-select my-1 mr-sm-2"
                id="inlineFormCustomSelectPref"
                value="{{ old('group_id') }}"
            >
            <option disabled>---Select Group---</option>
            </select>
            @error('group_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
        </div>
        <div class="modal-footer">
            <button
            type="button"
            class="btn btn-outline-danger mr-auto"
            data-dismiss="modal"
            >
            Close
            </button>
            <button type="submit" class="btn btn-outline-info"> 
                {{-- href="{{route('filtered-books')}}" --}}
            Search <i class="fa fa-search" aria-hidden="true"></i>
            </butto>
        </div>
        </form>
        </div>
    </div>
    </div>

    <br /><br /><br />
    <section id="services">
    <h2 class="text-center text-capitalize mb-5">
        we provide the best for you!
    </h2>
    <div class="container">
        <div class="row">
        <div class="col-md-3 service">
            <h5>
            <i class="fa fa-money fa-2x" aria-hidden="true"></i>&nbsp
            &nbspReasonable prices
            </h5>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. voluptas
            necessitatibus
            </p>
        </div>
        <div class="col-md-3 service">
            <h5>
            <i class="fa fa-home fa-2x" aria-hidden="true"></i>&nbsp &nbspFree
            Home delivery
            </h5>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. voluptas
            necessitatibus
            </p>
        </div>
        <div class="col-md-3 service">
            <h5>
            <i class="fa fa-map-marker  fa-2x" aria-hidden="true"></i>&nbsp
            <span>Cash on delivery</span>
            </h5>

            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. voluptas
            necessitatibus
            </p>
        </div>
        <div class="col-md-3 service">
            <h5>
            <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
            &nbsp<span>Help & Support</span>
            </h5>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. voluptas
            necessitatibus
            </p>
        </div>
        </div>
    </div>
    </section>

    <section id="popular-books">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">
            Popular<b style="color: #a517ba;">Books</b>
            </h2>
            <div
            id="myCarousel"
            class="carousel slide"
            data-ride="carousel"
            data-interval="0"
            >
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li
                data-target="#myCarousel"
                data-slide-to="0"
                class="active"
                ></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                <div class="row">
                    @foreach ($books->take(4) as $book)
                    <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                            <img
                                src="{{$book->cover}}"
                                class="img-responsive img-fluid"
                                alt=""
                            />
                            </div>
                            <div class="thumb-content">
                            <h4>{{$book->title}}</h4>
                            <p class="item-price">
                                <strike>Rs {{$book->price}}</strike> <span>Rs {{$book->price}}</span>
                            </p>
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button data-id="{{$book->id}}" class="btn btn-primary add-cart">Add to Cart</button>
                        </div>
                        {{-- <div id="status-area"></div> --}}
                        </div>
                        </div>
                    @endforeach
                </div>
                </div>

                <div class="item carousel-item">
                <div class="row">
                    @foreach ($books->take(4) as $book)
                    <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                            <img
                                src="{{$book->cover}}"
                                class="img-responsive img-fluid"
                                alt=""
                            />
                            </div>
                            <div class="thumb-content">
                            <h4>{{$book->title}}</h4>
                            <p class="item-price">
                                <strike>Rs {{$book->price}}</strike> <span>Rs {{$book->price}}</span>
                            </p>
    
                                <button data-id="{{$book->id}}" class="btn btn-primary add-cart">Add to Cart</button>
                                <span>
                                 
                                </span>
                            </div>
                            {{-- <div id="status-area"></div> --}}
                        </div>
                        </div>
                    @endforeach
                </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <a
                class="carousel-control left carousel-control-prev"
                href="#myCarousel"
                data-slide="prev"
            >
                <i class="fa fa-angle-left"></i>
            </a>
            <a
                class="carousel-control right carousel-control-next"
                href="#myCarousel"
                data-slide="next"
            >
                <i class="fa fa-angle-right"></i>
            </a>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script type="text/javascript">
    jQuery(document).ready(function ()
    {
        jQuery('select[name="college_id"]').on('change',function(){
            var collegeID = jQuery(this).val();
            if(collegeID)
            {
                jQuery.ajax({
                    url : '/getGroups/' + collegeID,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                    console.log(data);
                    jQuery('select[name="group_id"]').empty();
                    jQuery.each(data, function(key,value){
                        $('select[name="group_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                    }
                });
            }
            else
            {
                $('select[name="group_id"]').empty();
            }
        });

       
    });
    </script>
    
@endsection
