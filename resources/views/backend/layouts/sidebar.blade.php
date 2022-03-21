<aside class="main-sidebar sidebar-dark-warning elevation-4">

<a href="index3.html" class="brand-link">
<img src="{{ asset('images/logo.png') }}" alt="TIFA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Polls</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{ asset('images/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">User Name</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

			<li class="nav-item menu-open">
			<a href="#" class="nav-link active">
			    <i class="nav-icon fas fa-bars-alt"></i>
				<p>
				Menu
				<i class="right fas fa-angle-left"></i>
				</p>
			</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="{{ url('backend/users') }}" class="nav-link active">
							<i class="fas fa-th nav-icon"></i>
							<p>Users</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('backend/roles') }}" class="nav-link active">
							<i class="fas fa-th nav-icon"></i>
							<p>Roles</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('backend/table') }}" class="nav-link active">
							<i class="fas fa-th nav-icon"></i>
							<p>Table</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('backend/data_studio') }}" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Data Studio</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
			<a href="{{ asset('import') }}" class="nav-link">
			<i class="nav-icon fas fa-upload"></i>
			<p>
			Import
			<span class="right badge badge-danger">New</span>
			</p>
			</a>
			</li>
		</ul>
	</nav>


</div>

</aside>