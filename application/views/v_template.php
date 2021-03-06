<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Pos | Main Page</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/select2/dist/css/select2.min.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<a href="<?= site_url('Dashboard') ?>" class="logo">
				<span class="logo-mini"><b>W</b>eb</span>
				<span class="logo-lg"><b>My</b>POS</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown messages-menu">
							<ul class="dropdown-menu">
								<li>
									<ul class="menu">

								</li>
							</ul>
						</li>
					</ul>
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?= base_url('assets') ?>/dist/img/user.jpeg" class="user-image" alt="User Image">
							<span class="hidden-xs"><?= ucfirst($this->fungsi->user_login()->level) == 1 ? 'Admin' : 'Member' ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?= base_url('assets') ?>/dist/img/user.jpeg" class="img-circle" alt="User Image">
								<p>
									<?= ucfirst($this->fungsi->user_login()->name) ?>
									<small> <?= ucfirst($this->fungsi->user_login()->alamat) ?> </small>
								</p>
							</li>
							<li class="user-footer">
								<div class="pull-left">
									<a href="<?= site_url('Users') ?>" class="btn btn-default">Profile</a>
								</div>
								<div class="pull-right">
									<a href="<?= site_url('Auth/logout') ?>" class="btn btn-danger">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?= site_url('assets') ?>/dist/img/user.jpeg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>
							<?= ucfirst($this->fungsi->user_login()->name) ?>
						</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li <?= $this->uri->segment(1) == "Dashboard" ? 'class="active"' : null ?>>
						<a href="<?= site_url('Dashboard') ?>">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						</a>
					</li>
					<li <?= $this->uri->segment(1) == "Suppliers" ? 'class="active"' : null ?>>
						<a href="<?= site_url('Suppliers') ?>">
							<i class="fa fa-truck"></i> <span>Suppliers</span>
						</a>
					</li>
					<!-- <li <?= $this->uri->segment(1) == "Customers" ? 'class="active"' : null ?>>
						<a href="<?= site_url('Customers') ?>">
							<i class="fa fa-users"></i> <span>Customers</span>
						</a>
					</li> -->
					<li class="treeview <?= $this->uri->segment(1) == 'Units' || $this->uri->segment(1) == 'Items' || $this->uri->segment(1) == 'Categories' ? 'active' : null  ?>">
						<a href="#">
							<i class="fa fa-archive"></i>
							<span>Product</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li <?= $this->uri->segment(1) == "Items" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Items') ?>">
									<i class="fa fa-circle-o text-success"></i> <span>Items</span>
								</a>
							</li>
							<li <?= $this->uri->segment(1) == "Categories" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Categories') ?>">
									<i class="fa fa-circle-o"></i> Categories
								</a>
							</li>
						</ul>
					</li>

					<li class="treeview <?= $this->uri->segment(1) == "Sales" || $this->uri->segment(1) == "Stock_in" || $this->uri->segment(1) == "Stock_out" ? 'active' : null ?>">
						<a href="#">
							<i class="fa fa-shopping-cart"></i>
							<span>Transaksi</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li <?= $this->uri->segment(1) == "Sales" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Sales'); ?>">
									<i class="fa fa-circle-o text-danger"></i> Sales
								</a>
							</li>
							<li <?= $this->uri->segment(1) == "Stock_in" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Stock_in'); ?>">
									<i class="fa fa-circle-o"></i> Stock In
								</a>
							</li>
							<li <?= $this->uri->segment(1) == "Stock_out" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Stock_out'); ?>">
									<i class="fa fa-circle-o"></i> Stock Out
								</a>
							</li>
						</ul>
					</li>

					<li class="treeview <?= $this->uri->segment(1) == "Lap_belum_lunas" || $this->uri->segment(1) == "Lap_keuntungan" || $this->uri->segment(1) == "Lap_report_penjualan" || $this->uri->segment(1) == "Lap_laba_rugi" || $this->uri->segment(1) == "Lap_pengeluaran" || $this->uri->segment(1) == "Lap_penjualan" ? 'active' : null ?>">
						<a href="#">
							<i class="fa fa-line-chart"></i>
							<span>Report</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li <?= $this->uri->segment(1) == "Lap_penjualan" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Lap_penjualan') ?>">
									<i class="fa fa-circle-o text-success"></i> <span>Lap Penjualan</span>
								</a>
							</li>
							<li <?= $this->uri->segment(1) == "Lap_pengeluaran" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Lap_pengeluaran') ?>">
									<i class="fa fa-circle-o text-red"></i> <span>Lap Pengeluaran</span>
								</a>
							</li>
							<li <?= $this->uri->segment(1) == "Lap_belum_lunas" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Lap_belum_lunas') ?>">
									<i class="fa fa-circle-o text-dark"></i> <span>Lap Belum Lunas</span>
								</a>
							</li>
							<li <?= $this->uri->segment(1) == "Lap_keuntungan" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Lap_keuntungan') ?>">
									<i class="fa fa-circle-o text-primary"></i> <span>Lap Keuntungan</span>
								</a>
							</li>
							<li <?= $this->uri->segment(1) == "Lap_report_penjualan" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Lap_report_penjualan') ?>">
									<i class="fa fa-circle-o text-yellow"></i> <span>Report Penjualan</span>
								</a>
							</li>
							<li <?= $this->uri->segment(1) == "Lap_laba_rugi" ? 'class="active"' : null ?>>
								<a href="<?= site_url('Lap_laba_rugi') ?>">
									<i class="fa fa-circle-o"></i> <span>Lap Labar Rugi</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="header">Users</li>
					<li <?= $this->uri->segment(1) == "Users" ? 'class="active"' : null  ?>>
						<a href="<?= site_url('Users') ?>">
							<i class="fa fa-user-o text-red"></i> <span>My Profile</span>
						</a>
					</li>
				</ul>
			</section>
		</aside>

		<div class="content-wrapper">
			<script src="<?= base_url('assets') ?>/bower_components/jquery/dist/jquery.min.js"></script>


			<?= $contents ?>
		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			</div>
			<div class="text-center">
				<strong style="text-align: center;">&copy; Copyright <?= date('Y') ?> | Built <i style="color: salmon" class="glyphicon glyphicon-heart"></i> By. <a href="https://www.instagram.com/_niky96s/" target="_blank">Niki Dwijananto</a></strong>
			</div>
		</footer>
		<div class="control-sidebar-bg"></div>
	</div>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?= base_url('assets') ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url('assets') ?>/bower_components/select2/dist/js/select2.full.min.js"></script>
	<script src="<?= base_url('assets') ?>/bower_components/select2/dist/js/select2.full.min.js"></script>
	<script src="<?= base_url('assets') ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets') ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= base_url('assets') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets') ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url('assets') ?>/bower_components/fastclick/lib/fastclick.js"></script>
	<script src="<?= base_url('assets') ?>/dist/js/adminlte.min.js"></script>
	<script src="<?= base_url('assets') ?>/dist/js/demo.js"></script>
	<script>
		$(document).ready(function() {
			$('.sidebar-menu').tree()
		})
	</script>
	<script>
		$(document).ready(function() {
			$('.select2').select2();
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#mytable').DataTable();
		});
	</script>
</body>

</html>
