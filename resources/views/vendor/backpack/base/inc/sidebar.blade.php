@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

          <li><a href="{{  backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
          <li><a href="{{  backpack_url('language') }}"><i class="fa fa-flag-o"></i> <span>Languages</span></a></li>
          <li><a href="{{ backpack_url( 'language/texts') }}"><i class="fa fa-language"></i> <span>Language Files</span></a></li>
          <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
          <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
          <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
          <li><a href="{{ backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>

          <li><a href="{{ backpack_url('menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li>

          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>

          <li class="treeview">
              <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
                <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
                <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
              </ul>
          </li>

          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
