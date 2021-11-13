 <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

            <img src="{{('/admin/dist/photo/9512.png')}}" alt="User Image" class="img-circle">

        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

          <li class="header">MAIN NAVIGATION</li>

                <li>
                    <a href="{{route('campaign.index')}}">
                    <i class="fa fa-dashboard fa-lg text-blue"></i>
                    <span>Dashboard</span>
                    </a>
                </li>


              <li class="treeview">
                <a href="#">
                  <i class="fa fa-fw fa-connectdevelop text-green fa-lg"></i> <span>Campaigns</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    <small class="label pull-right bg-green">2</small>
                  </span>
                </a>

                <ul class="treeview-menu">

                  <li><a href="{{route('campaign.index')}}"><i class="fa fa-fw fa-user-plus"></i>Create</a></li>

                    <li><a href="{{route('campaign.view')}}"><i class="fa fa-fw fa-eye"></i> View</a></li>

                </ul>
              </li>

          <li>
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off text-red fa-lg"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
      </ul>

    </section>
    <!-- /.sidebar -->
</aside>
