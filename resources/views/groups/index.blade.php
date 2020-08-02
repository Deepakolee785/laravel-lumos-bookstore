@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Groups</h1>
        
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-bottom: 5px" href="{{ route('groups.create') }}"><i class="fas fa-plus-square"></i> Add New</a>
        </h1>
    </section>
    <div class="content">
        
        <div class="clearfix"></div>

        @include('flash::message')
        <br>
        <form action="{{route('admin-search-groups')}}" method="get">
                @csrf
                <input type="text" name="search_term"placeholder="Search by college or group" required style="width:40%;height:3.5rem;border:none;padding:5px">
                <input type="submit" class="btn btn-primary" value="Search">
                <a href="/groups" class="btn btn-warning"><i class="fa fa-refresh fa-2x" aria-hidden="true"></i>
                </a>
            </form>
        <br>
        @if ($groups->count() === 0)
        <h4 class="text-danger">No Result found for your query</h4>
        @endif
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('groups.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

