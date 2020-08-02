<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Cover</th>
                <th>Title</th>
                <th>Edition</th>
                <th>Publisher</th>
                <th>Description</th>
                <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td><img style="width:10rem;height:8rem" src="{{ $book->cover }}" alt="book cover"></td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->edition }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->price }}</td>
                <td>
                    {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('books.show', [$book->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('books.edit', [$book->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>    
</div>
