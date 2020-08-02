@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            College
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($college, ['route' => ['colleges.update', $college->id], 'method' => 'patch']) !!}

                        @include('colleges.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection