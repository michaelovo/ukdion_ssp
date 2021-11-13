@extends('layouts.master.design')

@section('main-content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Campaign/edit</li>
      </ol>
    </section>

    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        @include('includes.msg')

        <div class="box-body">
          <div class="row">
            <form role="form" action="{{url('campaign/'.$campaign->id.'/update') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="name">Name<span class="text-red">*</span></label>
                        <input tabindex="1" type="text" class="form-control" id="name" value="{{$campaign->name}}" name ="name" placeholder="" required>
                     </div>

                    <div class="form-group">
                        <label>Start Date: </label>
                         <input tabindex="2" type="date" class="form-control" value="{{$campaign->start_date}}" id="start_date" name ="start_date" placeholder="start date">
                    </div>

              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label>End Date: </label>
                    <input tabindex="3" type="date" class="form-control" value="{{$campaign->end_date}}" id="end_date" name ="end_date" placeholder="End date">
                </div>

                <div class="form-group ">
                    <label for="Total_budget">Total Budget <span class="text-red">*</span></label>
                    <input tabindex="4" type="number" class="form-control" id="total_budget" value="{{ $campaign->total_budget }}" name="total_budget">
                </div>

              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label for="daily_budget">Daily Budget <span class="text-red">*</span></label>
                    <input tabindex="5" type="number" class="form-control" id="daily_budget" value="{{ $campaign->daily_budget }}" name="daily_budget">
                </div>

                <div class="form-group">
                  <label for="image">Upload <span class="text-red">*</span></label>
                  <input tabindex="6" type="file" id="image" name="image" value="{{old('image')}}"/>
                  <input type="hidden" name="current_image" value="{{$campaign->image}}">
                </div>

              </div>
           </div>


      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update Campaign</button>
      </div>
    </form>
      </div>
    </section>
  </div>
@endsection
@section('style')
  <style>

    .checkboxes {
        display: inline-flex;
        cursor: pointer;
        position: relative;
    }

    .checkboxes > span {
        color: #34495E;
        padding: 0.5rem 0.25rem;
        font-size: 20px;
    }

    .checkboxes > input {
        height: 30px;
        width: 30px;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
        border: 1px solid #34495E;
        border-radius: 4px;
        outline: none;
        transition-duration: 0.3s;
        background-color: none;
        cursor: pointer;
      }

    .checkboxes > input:checked {
        border: 1px solid #3c8dbc;
        background-color: #3c8dbc;
    }

    .checkboxes > input:checked + span::before {
        content: '\2713';
        display: block;
        text-align: center;
        color: #fff;
        position: absolute;
        left: 0.7rem;
        top: 0.2rem;
    }

    .checkboxes > input:active {
        border: 2px solid #34495E;
    }

    .per{
      -moz-column-count: 4;
      -moz-column-gap: 20px;
      -webkit-column-count: 4;
      -webkit-column-gap: 20px;
      column-count: 4;column-gap: 20px;
    }
  </style>

@endsection
