<!---Error message----->
@if(session('warning'))
  <div class="alert alert-error alert-block" style="background-color:#f2dfd0;" id="warning">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!! Session('warning') !!}</strong>
  </div>
@endif
  <!---Success message----->
  @if(session('success'))
  <div class="alert alert-success alert-block" id="success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!! Session('success') !!}</strong>
  </div>
@endif

  <!---Laravel validation error message----->
@if (count($errors) >0 )
  @foreach($errors->all() as $error)
    <div class="alert alert-error alert-block" style="background-color:#f2dfd0;" id="error">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
      <strong>{{$error}}</strong>
    </div>
  @endforeach
@endif

