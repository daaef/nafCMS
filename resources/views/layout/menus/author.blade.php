<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="mdi mdi-dots-horizontal"></i>
          <span class="hide-menu">Personal</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark" href="" aria-expanded="false">
            <i class="mdi mdi-av-timer"></i>
            <span class="hide-menu">Dashboard </span>
          </a>
        </li>

        </li>
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-view-quilt"></i>
            <span class="hide-menu">News</span>
          </a>
          <ul aria-expanded="false" class="collapse  first-level">
            <li class="sidebar-item">
              <a href="{{ route('newsCategory.index') }}" class="sidebar-link">
                <i class="mdi mdi-view-quilt"></i>
                <span class="hide-menu"> News Categories </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="" class="sidebar-link">
                <i class="mdi mdi-view-parallel"></i>
                <span class="hide-menu">Create News </span>
              </a>
            </li>
          </ul>
        </li>   

        
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
            <i class="mdi mdi-directions"></i>
            <span class="hide-menu">Log Out</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>