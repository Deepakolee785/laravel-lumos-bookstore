<!-- Name Field -->

{{-- {{dd($college)}} --}}
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}

    @if ($college->count() === 0)
        
    <p>{{ $c->name }}</p>  
    @else
    <p>{{ $college[0]->college }}</p>  
    @endif
</div>
<div class="form-group">
    {!! Form::label('groups', 'Groups') !!}
    @if ($college->count() === 0)
    <br>
    <p  class="text-danger">No groups available</p>
    @endif
        <br>
        @foreach ($college as $col)
            <span class="badge badge-primary badge-pill">{{ $col->group }}</span>
        {{-- <p>{{ $col->group }}</p> --}}
        @endforeach
</div>

    {{-- {{dd($college)}} --}}


    <!-- Created At Field -->
    {{-- <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{{ $college->created_at }}</p>
    </div> --}}

    <!-- Updated At Field -->
    {{-- <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{{ $college->updated_at }}</p>
    </div> --}}

