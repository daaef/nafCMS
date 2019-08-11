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

				<li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-account-multiple"></i>
            <span class="hide-menu">Users &amp; Roles </span>
          </a>
          <ul aria-expanded="false" class="collapse  first-level">
            <li class="sidebar-item">
              <a href="{{ route('role.index') }}" class="sidebar-link">
                <i class="mdi mdi-view-quilt"></i>
                <span class="hide-menu"> User Roles </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('user.index') }}" class="sidebar-link">
                <i class="mdi mdi-view-parallel"></i>
                <span class="hide-menu"> Users </span>
              </a>
            </li>
          </ul>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-view-quilt"></i>
            <span class="hide-menu">Menu</span>
          </a>
          <ul aria-expanded="false" class="collapse  first-level">
            <li class="sidebar-item">
              <a href="{{ route('menu.index') }}" class="sidebar-link">
                <i class="mdi mdi-view-quilt"></i>
                <span class="hide-menu"> Menus </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('user.index') }}" class="sidebar-link">
                <i class="mdi mdi-view-parallel"></i>
                <span class="hide-menu"> Trashed </span>
              </a>
            </li>
          </ul>
        </li>
				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark" href="{{ route('pageType.index') }}" aria-expanded="false">
						<i class="mdi mdi-account-multiple"></i>
						<span class="hide-menu">Page Types </span>
					</a>                    
				</li>

				<!-- <li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark" href="" aria-expanded="false">
						<i class="mdi mdi-av-timer"></i>
						<span class="hide-menu"></span>
					</a>
				</li> -->
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