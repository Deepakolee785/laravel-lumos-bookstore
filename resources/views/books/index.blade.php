@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Books</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('books.create') }}"><i class="fas fa-plus-square"></i> Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        <br>
            <form action="{{route('admin-search-book')}}" method="get">
                <input type="text" name="search_term" placeholder="Search by title or publisher" required style="width:40%;height:3.5rem;border:none;padding:5px">
                <input type="submit" class="btn btn-primary"value="Search">
                <a href="/books" class="btn btn-warning"><i class="fa fa-refresh fa-2x" aria-hidden="true"></i>
                </a>
            </form>
        <br>
        @if ($books->count() === 0)
        <h4 class="text-danger">No books for your query</h4>
        @endif
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('books.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

