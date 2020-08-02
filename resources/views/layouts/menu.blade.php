
<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
</li>
<li class="{{ Request::is('colleges*') ? 'active' : '' }}">
    <a href="{{ route('colleges.index') }}"><i class="fas fa-university"></i> <span>Colleges</span></a>
</li>

<li class="{{ Request::is('groups*') ? 'active' : '' }}">
    <a href="{{ route('groups.index') }}"><i class="fas fa-users"></i> <span>Groups</span></a>
</li>


<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{{ route('books.index') }}"><i class="fas fa-book"></i> <span>Books</span></a>
</li>


<li class="{{ Request::is('collegeGroupBooks*') ? 'active' : '' }}">
    <a href="{{ route('collegeGroupBooks.index') }}"><i class="fa fa-edit"></i><span>Assign Books</span></a>
</li>


<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{{ route('customers.index') }}"><i class="fas fa-user"></i> <span>Customers</span></a>
</li>

{{-- <li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{{ route('orders.index') }}"><i class="fa fa-edit"></i><span>Orders</span></a>
</li>

<li class="{{ Request::is('orderBooks*') ? 'active' : '' }}">
    <a href="{{ route('orderBooks.index') }}"><i class="fa fa-edit"></i><span>Order  Books</span></a>
</li> --}}






