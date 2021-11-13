@extends('layouts.master.design')
@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        {{-- @can('Users Company') --}}
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #104978; color:#fff">
              <div class="inner">
              {{-- <h3>{{$trip_count}}</h3> --}}

                <p>Today's Trips</p>
              </div>
              <div class="icon">
                <i class="icon ion-android-globe"></i>
              </div>
              <a href="{{url('admin/trip/view') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        {{-- @endcan --}}

        {{-- @can('Users Branch') --}}
          <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color: #076B61; color:#fff">
              <div class="inner">
                {{-- <h3>{{$route_count}}<sup style="font-size: 20px"></sup></h3> --}}

                <p>Routes ply today</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('admin/direct/view') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        {{-- @endcan --}}

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
              <div class="inner">
                {{-- <h3>{{$children_on_count}}<sup style="font-size: 20px; "></sup></h3> --}}

                <p>Children onboarded today</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

        {{-- @can('Users Department') --}}
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                {{-- <h3>{{$passenger_count}}</h3> --}}

                <p>Passengers onboarded today</p>
              </div>
              <div class="icon">
                <i class="icon ion-ios-grid-view"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        {{-- @endcan --}}

        {{-- @can('Users Menu') --}}
          <div class="col-lg-3 col-xs-6">
            <div class="small-box"style="background-color: #7D3C98; color:#fff">
              <div class="inner">
                {{-- <h3>{{$staff_children_on_count}}</h3> --}}

                <p>Staff today</p>
              </div>
              <div class="icon">
                <i class="icon ion-ios-people"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        {{-- @endcan --}}

        {{-- @can('Users Payroll') --}}
          <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color: #06786D; color:#fff">
              <div class="inner">
                {{-- <h3>{{$available_ferry}}</h3> --}}

                <p>Ferries</p>
              </div>
              <div class="icon">
                <i class="icon ion-ios-barcode"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        {{-- @endcan --}}

        {{-- @can('Users Designation') --}}
          <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color: #F39C12; color:#fff">
              <div class="inner">
                {{-- <h3>{{$available_route}}</h3> --}}

                <p>Terminals</p>
              </div>
              <div class="icon">
                <i class="icon ion-ios-flask"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color: #0C0B08; color:#fff">
              <div class="inner">
                {{-- <h3>{{$operator_count}}</h3> --}}

                <p>Today's Operators</p>
              </div>
              <div class="icon">
                <i class="icon ion-ios-flask"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        {{-- @endcan --}}

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
