@extends('frontend.components.master') 
{{-- title --}}
@section('title','Shop')
{{-- {{dd($books)}} --}}
@section('content')
<br><br><br><br>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </ol>
        
      </nav>
    </div>
    <form action="{{route('search')}}" method="get">
      @csrf
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100 mt-5">
        <input class="form-control" type="text" name="query_input" placeholder="Search by book name or publisher.." required>
        <input type="submit" value="Search" name="submit" class="btn btn-info ml-3">
        {{-- <div class="searchbar">
          <b style="color: rgb(247, 241, 241);padding: 1rem;">Search book ::</b>
          <input class="search_input" type="text" name="query_input">
          <button type="submit" class="search_icon"><i class="fa fa-search" aria-hidden="true">Submit</i></button>
        </div> --}}
      </div>
    </div>
  </form>
@if ($books->count() == 0)
<div class="container alert alert-danger text-center my-5">
<h5 class="">No results found of your query <span style="color:blue;text-decoration:underline">{{$q}}</span></h5>
</div>
@else
    

  <section id="main-shop" class="py-5 my-5">
    <div class="container">
      <div class="books-container">
        @foreach ($books as $book)
        <div class="book">
          <img class="img-responsive" src="{{$book->cover}}" alt="book">
          <div class="book-content text-md-left text-center">
            <h4 class="m-0">{{$book->title}}</h4>
            <span class="edition"><b>Edition:</b> {{$book->edition}}</span><br>
            <span class="publisher"><b>Publisher:</b>{{$book->publisher}}</span><br>
            <span class="description">
              <b>Description:</b> {{$book->description ?? 'N/A'}}
            </span>
          </div>
         
          <p class="item-price">
            <strike>Rs {{$book->price}}</strike> <span>Rs {{$book->price}}</span>
          </p>
          <button data-id="{{$book->id}}" class="btn btn-primary add-cart">Add to Cart</button>
        </div> 
        @endforeach
      </div>
      <div class="d-flex justify-content-center mt-5">
        {{ $books->links()}}
      </div>
    </div>
  </section>
  @endif
@endsection