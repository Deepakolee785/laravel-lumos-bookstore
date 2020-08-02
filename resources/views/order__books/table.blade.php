<div class="table-responsive">
    <table class="table" id="orderBooks-table">
        <thead>
            <tr>
                <th>Order Id</th>
        <th>Book Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orderBooks as $orderBook)
            <tr>
                <td>{{ $orderBook->order_id }}</td>
            <td>{{ $orderBook->book_id }}</td>
                <td>
                    {!! Form::open(['route' => ['orderBooks.destroy', $orderBook->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orderBooks.show', [$orderBook->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('orderBooks.edit', [$orderBook->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
