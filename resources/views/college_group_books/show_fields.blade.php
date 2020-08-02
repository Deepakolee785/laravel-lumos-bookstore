<!-- College Id Field -->
<div class="form-group">
    {!! Form::label('college_id', 'College Id:') !!}
    <p>{{ $collegeGroupBook->college_id }}</p>
</div>

<!-- Group Id Field -->
<div class="form-group">
    {!! Form::label('group_id', 'Group Id:') !!}
    <p>{{ $collegeGroupBook->group_id }}</p>
</div>

<!-- Book Id Field -->
<div class="form-group">
    {!! Form::label('book_id', 'Book Id:') !!}
    <p>{{ $collegeGroupBook->book_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $collegeGroupBook->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $collegeGroupBook->updated_at }}</p>
</div>

