<section class="content-header">
	<h1>Lap Penjualan Belum Lunas <small>Lap Penjualan Belum Lunas</small></h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= site_url('Dashboard') ?>">
				<i class="fa fa-dashboard"></i>
			</a>
		</li>
		<li>
			Laporan
		</li>
		<li class="active">
			Lap Penjualan Belum Lunas
		</li>
	</ol>
</section>

<section class="content">
	<?= $this->session->flashdata('message'); ?>
	<div class="box box-warning">
		<div class="box-header">
			<h4>
				Lap Penjualan Belum Lunas
			</h4>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="mytable">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Invoice</th>
						<th class="text-center">Customers</th>
						<th class="text-center">Tanggal Pembelian</th>
						<th class="text-center">Status Pembayaran</th>
						<th class="text-center">Kasir</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($row as $key => $data) { ?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td class="text-center"><?= $data->invoice ?></td>
							<td><?= $data->sales_customers == 1 ? 'Umum' : $data->sales_customers ?></td>
							<td class="text-center"><?= $data->create_sales ?></td>
							<?php if ($data->note == 1) { ?>
								<td class="text-center">
									<a href="#" class="btn btn-success">
										<i class="fa fa-check"></i>
									</a>
								</td>
							<?php } else { ?>
								<td class="text-center">
									<a href="#" class="btn btn-danger">
										<i class="fa fa-times"></i>
									</a>
								</td>
							<?php } ?>
							<td class="text-center"><?= $data->user_name ?></td>
							<td class="text-center">
								<a href="<?= site_url('Lap_belum_lunas/result/' . $data->sale_id) ?>" class="btn btn-success">
									<i class="fa fa-edit"></i>
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
