@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Order  Book
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($orderBook, ['route' => ['orderBooks.update', $orderBook->id], 'method' => 'patch']) !!}

                        @include('order__books.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection