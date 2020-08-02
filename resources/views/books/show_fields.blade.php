<!-- Image Field -->
<div class="form-group">
    {!! Form::label('cover', 'Image:') !!}
    <p>{{ $book->cover }}</p>
</div>
<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $book->title }}</p>
</div>

<!-- Author Field -->
<div class="form-group">
    {!! Form::label('edition', 'Edition:') !!}
    <p>{{ $book->edition }}</p>
</div>

<!-- Publisher Field -->
<div class="form-group">
    {!! Form::label('publisher', 'Publisher:') !!}
    <p>{{ $book->publisher }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $book->description }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $book->price }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $book->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $book->updated_at }}</p>
</div>

