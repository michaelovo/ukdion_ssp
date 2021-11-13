<header class="main-header">
  <?php use Carbon\Carbon;?>

    <a href="#" class="logo">
      <span class="logo-mini"><b>Admin</b></span>
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{-- <img src="{{('/admin/dist/companies_logos/'.Auth::user()->company->photo ?? '')}}" class="img-circle" alt="User Image" style="width:20px"> --}}
              <span class="hidden-xs">{{ucwords(Auth::user()->name ?? '') }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                  {{-- <img src="{{('/admin/dist/companies_logos/'.Auth::user()->company->photo)}}" class="img-circle" alt="User Image" style="width:20px"> --}}
                  {{-- <div class="pull-left image"> --}}

                    <img src="{{('/admin/dist/photo/9512.png')}}" alt="User Image" class="img-circle">

                {{-- </div> --}}
                <p>
                  {{ Auth::user()->name ?? '' }}
                  <small>Member since {{ Carbon::parse(Auth::user()->created_at ?? '')->format('F d, Y') }}</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{url('admin/user/profile')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">

                      <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Sign out') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
