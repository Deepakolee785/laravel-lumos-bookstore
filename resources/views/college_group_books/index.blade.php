@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">College Group Books</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('collegeGroupBooks.create') }}"><i class="fas fa-plus-square"></i> Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        <br>
            <form action="{{route('admin-search-cgb')}}" method="get">
                @csrf
                <input type="text" name="search_term" required placeholder="Search by college, book or group" style="width:50%;height:3.5rem;border:none;padding:5px">
                <input type="submit" class="btn btn-primary"value="Search">
                <a href="/collegeGroupBooks" class="btn btn-warning"><i class="fa fa-refresh fa-2x" aria-hidden="true"></i>
                </a>
            </form>
            @if ($collegeGroupBooks->count() === 0)
            <h4 class="text-danger">No results found for your query</h4>
            @endif
        <br>
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('college_group_books.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

