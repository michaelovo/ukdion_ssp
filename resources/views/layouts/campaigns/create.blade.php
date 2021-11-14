@extends('layouts.master.design')

@section('main-content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Campaign/create</li>
      </ol>
    </section>

    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
            <a class="col-lg-offset-0 btn bg-maroon" href="{{route('campaign.view')}}"><i class="fa fa-fw fa-eye"></i>Campaigns </a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        @include('includes.msg')

        <div class="box-body">
          <form role="form" action="{{route('campaign.store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="name">Name<span class="text-red">*</span></label>
                        <input tabindex="1" type="text" class="form-control" id="name" value="{{old('name')}}" name ="name" placeholder="" required>
                     </div>

                    <div class="form-group">
                        <label>Start Date: </label>
                         <input tabindex="2" type="date" class="form-control" value="{{old('start_date')}}" id="start_date" name ="start_date" placeholder="start date">
                    </div>



                </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label>End Date: </label>
                    <input tabindex="3" type="date" class="form-control" value="{{old('end_date')}}" id="end_date" name ="end_date" placeholder="End date">
                </div>

                <div class="form-group ">
                    <label for="Total_budget">Total Budget <span class="text-red">*</span></label>
                    <input tabindex="4" type="number" class="form-control" id="total_budget" value="{{ old('total_budget') }}" name="total_budget">
                </div>



              </div>

              <div class="col-md-4">

                <div class="form-group">
                    <label for="daily_budget">Daily Budget <span class="text-red">*</span></label>
                    <input tabindex="5" type="number" class="form-control" id="daily_budget" value="{{ old('daily_budget') }}" name="daily_budget">
                </div>

                <div class="form-group">
                  <label for="image">Upload <span class="text-red">*</span></label>
                  <input tabindex="6" type="file" id="image" name="image[]" value="{{old('image')}}" multiple required />
                </div>
              </div>

            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Create Campaign</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('script')
  <script>

    $('#region').change(function(){
      var region_id = $(this).val();
      if(region_id){
        $.ajax({
          type:"GET",
          dataType:'json',
          url:'/admin/getState/'+region_id,
          success:function(data){
            if(data){
              // console.log(data);
              $("#state").empty();
              $("#state").append('<option>Select</option>');
              $.each(data,function(key,value){
                  $("#state").append('<option value="'+key+'">'+value+'</option>');
              });
            }else{
              $("#state").empty();
            }
          }
        });
      }else{
        $("#state").empty();
        $("#lga").empty();
      }
    });

    $('#state').on('change',function(){
      var state_id = $(this).val();
      if(state_id){
        $.ajax({
          type:"GET",
          dataType:'json',
          url:'/admin/getLgas/'+state_id,
          success:function(res){
            if(res){
              // console.log(res);
              $("#lga").empty();
              $.each(res,function(key,value){
                  $("#lga").append('<option value="'+key+'">'+value+'</option>');
              });
            }else{
              $("#lga").empty();
            }
          }
        });
      }else{
        $("#lga").empty();
      }
    });

  </script>
@endsection
