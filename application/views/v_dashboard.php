<section class="content-header">
	<h1>Data Dashboard <small>Dashboard</small></h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i>
			</a>
		</li>
	</ol>
</section>


<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h4>Data Dashboard</h4>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?= $penjualan ?></h3>

							<p>Penjualan Hariini</p>
						</div>
						<div class="icon">
							<i class="fa fa-handshake-o"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3><?= $items ?></h3>

							<p>Jumlah Items</p>
						</div>
						<div class="icon">
							<i class="fa fa-shopping-cart"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-red">
						<div class="inner">
							<h3><?= $suppliers ?></h3>

							<p>Jumlah Suppliers</p>
						</div>
						<div class="icon">
							<i class="fa fa-truck"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-blue">
						<div class="inner">
							<h3><?= $customers ?></h3>

							<p>Jumlah Customers</p>
						</div>
						<div class="icon">
							<i class="fa fa-users"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="small-box bg-green">
						<div class="inner">
							<h3 class="text-center">
								<?php foreach ($grand_total as $row => $data) { ?>
									<?= indo_currency($data->grand_total)  ?>
								<?php } ?>
							</h3>

							<p class="text-center">Pendapatan Hariini</p>
						</div>
						<div class="icon">
							<i class="fa fa-dollar"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
