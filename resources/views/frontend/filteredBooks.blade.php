@extends('frontend.components.master') 
{{-- title --}}
@section('title','Books')
{{-- {{dd($books)}} --}}
@section('content')
<br><br><br><br>
<div class="container">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Filtered Books</li>
      </ol>
      
    </nav>
  </div>

<section id="main-filtered_books" class="py-5 my-5">
    <div class="container">
        <div class="text-center">
          <div class="container">
              <div class="text-left">
                @if ($books->count() == 0)
                  <h5 class="alter alert-danger p-3">Sorry !! No books available</h5>
                @else
                  <h2>Books for: </h2>
                  <h5><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i> {{$books[0]->college}} College</h5>
                  <h6><i class="fa fa-users fa-2x" aria-hidden="true"></i>  {{$books[0]->group}}</h6>
                @endif
              </div>
          </div>
        </div>
        <hr>
        <form action="{{route('cart')}}" method="post">
          @csrf
        <div class="filtered-books-container">
          @foreach ($books as $book)
          <div class="book">
            <img class="img-responsive" src="{{$book->cover}}" alt="book">
            <div class="book-content text-md-left text-center">
              <h6 class="text-center  m-0">{{$book->title}}</p>
              <span class="text-center edition"><b>Edition:</b> {{$book->edition}}</span><br>
              
            </div>
          
            <p class="item-price">
              <strike>Rs{{$book->price}}</strike> <span>Rs{{$book->price}}</span>
            </p>
            <input type="checkbox" name="books[]" value="{{$book->id}}" checked>
          </div> 
          @endforeach
        </div>
        @if ($books->count() != 0)
          <div class="text-center mt-5">
            <button type="submit" class=" btn btn-info">Check Out</button>
          </div>
        @endif
      </form>

</section>
@endsection