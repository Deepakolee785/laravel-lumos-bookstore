@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            College Group Book
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($collegeGroupBook, ['route' => ['collegeGroupBooks.update', $collegeGroupBook->id], 'method' => 'patch']) !!}

                        @include('college_group_books.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection