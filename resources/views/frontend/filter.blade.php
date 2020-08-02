@extends('frontend.components.master')

@section('title','Choose college and group')

@section('content')
@if(session()->get('errors'))
    {{ session()->get('errors')->first() }}
@endif
    <h1>Filter page</h1>

    <form action="/filtered-books" method="post">
        @csrf
        <div class="form-group">
            <select name="college_id"class="form-control col-md-6 m-3" required>
                <option>-Select College-</option>
                @foreach ($colleges as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            <select name="group_id" class="form-control col-md-6 m-3" required>
                <option>-Select Group-</option>
            </select>
        <button type="submit" class="btn btn-info m-3">Search</button>
      </form>
    
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
                    url : '/filter/getstates/' + collegeID,
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

