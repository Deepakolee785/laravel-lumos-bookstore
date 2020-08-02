@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container-fluid">

            <div class="animated fadeIn">
                <h3>Dashboard</h3>

                <div class="row" style="padding:2rem;">


                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{App\Models\College::count()}}</h3>
                                <p>Colleges</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-bed" aria-hidden="true"></i>

                            </div>
                            <br><br><br>
                            <a style="width:100%;background-color:azure;padding:2px;display:block" class="text-center" href="#">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>{{App\Models\Book::count()}}</h3>
                                <p>Books</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-image"></i>
                            </div>
                            <br><br><br>
                            <a style="width:100%;background-color:azure;padding:2px;display:block" class="text-center" href="#">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{App\Models\Customer::count()}}</h3>
                                <p>Customers</p>
                            </div>
                            <div class="icon">
                                {{-- <i class="fa fa-bell"></i> --}}<i class="fa fa-cutlery" aria-hidden="true"></i>

                            </div>
                            <br><br><br>
                            <a style="width:100%;background-color:azure;padding:2px;display:block" class="text-center" href="#">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                            <div class="inner">
                                {{-- <h3>{{App\Models\Booking::where('status','pending')->count()}}</h3> --}}
                                <h3>0</h3>
                                <p>Pending Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <br><br><br>
                            <a  style="width:100%;background-color:azure;padding:2px;display:block" class="text-center" href="#">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                {{-- <h3>{{App\Models\Booking::where('status','confirmed')->count()}}</h3> --}}
                                <h3>0</h3>
                                <p>Delivered Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <br><br><br>
                            <a  style="width:100%;background-color:azure;padding:2px;display:block" class="text-center" href="#">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                {{-- <h3>{{App\Models\Booking::where('status','confirmed')->count()}}</h3> --}}
                                <h3>0</h3>
                                <p>Confirmed Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <br><br><br>
                            <a  style="width:100%;background-color:azure;padding:2px;display:block" class="text-center" href="#">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul>
</div>
</div>
@endsection
