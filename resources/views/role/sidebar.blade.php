		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="{{ route('dashboard') }}" class="brand-link">
				<span class="brand-text fw-bold text-primary">NeoCart</span><span class="brand-text fw-light"> Dashboard.</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel d-flex mt-3 mb-3 pb-3">
					<div class="info">
						<h4 class="d-block text-white">Hello, <strong>{{ Auth::user()->name }}</strong></h4>
						<p class="text-white">{{ Auth::user()->role }}</p>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						{{-- CLIENT --}}
						<li class="nav-header">CLIENT</li>
						<li class="nav-item">
							<a href="{{ route('profile.edit') }}" class="nav-link {{ Request::is('dashboard/profile') ? 'active' : '' }}">
								<i class="nav-icon bi bi-person-lines-fill"></i>
								<p>Change Profile</p>
							</a>
						</li>
						{{-- SUPERADMIN --}}
						<li class="nav-header">SUPERADMIN</li>
						<li class="nav-item">
							<a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
								<i class="nav-icon fas bi bi-graph-up"></i>
								<p>Insight</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('users.index') }}" class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}">
								<i class="nav-icon bi bi-people-fill"></i>
								<p>All Users</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('all.products') }}" class="nav-link {{ Request::is('dashboard/product*') ? 'active' : '' }}">
								<i class="nav-icon bi bi-bag-fill"></i>
								<p>All Products</p>
							</a>
						</li>
						<hr class="text-white">
						<li class="nav-item">
							<a href="{{ route('home.page') }}" class="nav-link">
								<i class="nav-icon bi bi-house-door-fill"></i>
								<p>Back to home</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>