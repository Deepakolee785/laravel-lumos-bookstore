    <!-- Navigation menu  -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navigation">
        <a class="navbar-brand ml-5" href="{{route('index')}}"
        ><img src="{{asset('frontend/assets/logo.png')}}" alt=""
        /></a>
        <form
          action="{{route('search')}}" 
          method="get"
          class="ml-auto form-group d-flex text-center nav-searchbar hide"
        >
          @csrf
          <input class="form-control" type="text" name="query_input" placeholder="search book" required />
          <button type="submit" name="submit" class="mx-1 btn btn-outline-warning search-btn">
            Search
          </button>
        </form>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('shop')}}">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About us</a>
            </li>
            <li class="nav-item" data-toggle="modal" data-target="#cart">
              <a class="nav-link" id="cart-count" style="cursor:pointer;"
                ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                <span  class="badge badge-info text-white">{{Cart::count()}}</span></a
              >
            </li>
          </ul>
        </div>
      </nav>