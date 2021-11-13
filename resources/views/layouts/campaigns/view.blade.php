@extends('layouts.master.design')

@section('main-content')
  <?php use Carbon\Carbon;?>
  <div class="content-wrapper">
    @include('includes.msg')

    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <a class="col-lg-offset-0 btn bg-green" href="{{route('campaign.index')}}"><i class="fa fa-fw fa-plus"></i>Add New </a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i>
            </button>
          </div>

        </div>
        <div class="box-body">
            <div class="row">





              <div class="col-xs-12">
                <div class="box">



                  <div class="box-body table-responsive">

                    <table id="campaigns" class="table table-bordered table-striped" style="font-size:1em;">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Daily Budget</th>
                          <th>Total Budget</th>
                          <th>image</th>
                          <th>Created at</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($campaigns as $campaign)
                          <tr>
                            <td>{{$campaign->name ?? ''}}</td>
                            <td>{{Carbon::parse($campaign->start_date)->format('Y-m-d H:i:s')}}</td>
                            <td>{{Carbon::parse($campaign->end_date)->format('Y-m-d H:i:s')}}</td>
                            <td>{{$campaign->daily_budget ?? ''}}</td>
                            <td>{{$campaign->total_budget ?? ''}}</td>
                            <td>

                                <a href="{{ $campaign->image ?? '' }}" target="_blank">
                                <img src="{{ $campaign->image }}" alt="trending image" width="100" height="50"/>
                                </a>
                                </td>
                            <td>{{Carbon::parse($campaign->created_at)->format('Y-m-d H:i:s')}}</td>

                              <td class="">
                                  <a href="{{url('/campaign/'.$campaign->id.'/edit')}}" class="btn btn-primary btn-xs" title="Edit campaign"><i class="fa fa-fw fa-edit text-white fa-lg"></i></a>

                                  <a rel="{{$campaign->id}}" del="campaign" href="javascript:" class="btn btn-danger btn-xs deleteRecord" title="Delete campaign"><i class="fa fa-fw fa-trash fa-lg text-white fa-lg deleteRecord"></i></a>

                              </td>

                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>

                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>

@endsection



@section('style')
  <link rel="stylesheet" href="{{('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('script')

  <script src="{{('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

  <script>
    $(function () {
      $('#campaigns').DataTable()
    })
  </script>

@endsection
