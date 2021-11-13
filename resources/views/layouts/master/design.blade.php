<!DOCTYPE html>
<html>
  <head>
    {{-- {!! SEOMeta::generate() !!} --}}
    @include('layouts.master.head')
  </head>


  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      @include('layouts.master.nav')
        @include('layouts.master.sidebar')

        @yield('main-content')

        @include('layouts.master.footer')




    </div>
  </body>
   @yield('style')
   @yield('script')


</html>
