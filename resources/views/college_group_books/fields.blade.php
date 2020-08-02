<!-- College Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('college_id', 'College Id:') !!}
    {!! Form::select('college_id', $collegeItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Group Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('group_id', 'Group Id:') !!}
    {!! Form::select('group_id', $groupItems, null, ['class' => 'form-control']) !!}
</div> --}}
{{-- {{dd($groupItems[1])}} --}}

<div class="form-group col-sm-6">
    <label for="group_id">Group Id:</label>
    <select name="group_id" class="form-control">

    </select>
</div>



<!-- Book Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('book_id', 'Book Id:') !!}
    {!! Form::select('book_id', $bookItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('collegeGroupBooks.index') }}" class="btn btn-default">Cancel</a>
</div>
