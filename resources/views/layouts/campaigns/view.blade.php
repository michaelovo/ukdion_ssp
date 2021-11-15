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
                          {{-- <th>image</th> --}}
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
                            {{-- <td>

                                <a href="{{ $campaign->photos->image_url ?? '' }}" target="_blank">
                                <img src="{{ $campaign->photos->image_url ?? '' }}" alt="trending image" width="100" height="50"/>
                                </a>
                                </td> --}}
                            <td>{{Carbon::parse($campaign->created_at)->format('Y-m-d H:i:s')}}</td>

                              <td class="">
                                  <a href="{{url('/campaign/'.$campaign->id.'/edit')}}" class="btn btn-primary btn-xs" title="Edit campaign"><i class="fa fa-fw fa-edit text-white fa-lg"></i></a>

                                <a href="#myModal" class="btn btn-info btn-xs" data-toggle="modal" data-code="{{$campaign->id}}"><i class="fa fa-fw fa-eye text-white fa-lg"></i></a>
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

  <div class="modal fade bs-example-modal-sm" tabindex="-1" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="mySmallModalLabel">Campaign photos</h4>
        </div>

        <div class="modal-body">
                {{-- <img src=""  alt="trending image" width="100" height="50" id="target"/> --}}
                <img class = "image_modal" src="" id="target">
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>

      </div>
    </div>
  </div>



  </div>

@endsection



@section('style')
  <link rel="stylesheet" href="{{('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('script')

  <script src="{{('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  {{-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}


  <script>
    $(function () {
      $('#campaigns').DataTable()
    })
  </script>


<script>
    $(function () {
        $('#myModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var code = button.data('code'); // Extract info from data-* attributes

            if(code){
                $.ajax({
                    type:"GET",
                    dataType:'json',
                    url:'/campaign/'+code+'/photos',
                    success:function(res){
                        if(res){
                            //console.log(res);
                            res.forEach(function(obj) {
                                console.log(obj.image_url);
                               $("#target").attr("src",obj.image_url);
                            });
                        }

                    }
                });
            }
        });
    });
</script>



@endsection
