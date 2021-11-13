    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{('/admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{('/admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{('/admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{('/admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{('/admin/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{('/admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{('/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{('/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    {{-- <sweet alert> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />
    {{-- <link rel="shortcut icon" href="{{('/admin/dist/img/icon.ico') }}"> --}}

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

