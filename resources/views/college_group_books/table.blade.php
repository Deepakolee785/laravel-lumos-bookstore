<div class="table-responsive">
    <table class="table" id="collegeGroupBooks-table">
        <thead>
            <tr>
                <th>College Id</th>
        <th>Group Id</th>
        <th>Book Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($collegeGroupBooks as $collegeGroupBook)
            <tr>
                <td>{{ $collegeGroupBook->college }}</td>
            <td>{{ $collegeGroupBook->group }}</td>
            <td>{{ $collegeGroupBook->book }}</td>
                <td>
                    {!! Form::open(['route' => ['collegeGroupBooks.destroy', $collegeGroupBook->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('collegeGroupBooks.show', [$collegeGroupBook->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('collegeGroupBooks.edit', [$collegeGroupBook->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
