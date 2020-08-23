<section class="content-header">
	<h1>Data Report Laporan Penjualan <small>Report Laporan Penjualan</small></h1>
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
			Report Laporan Penjualan
		</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="box-header">
			<h4>
				Data Report Laporan Penjualan
				<div class="pull-right">
					<a href="<?= site_url('Lap_report_penjualan') ?>" class="btn btn-warning">
						<i class="fa fa-arrow-right"></i>
					</a>
				</div>
			</h4>
		</div>
		<div class="box-body table-responsive">
			<table>
				<?php foreach ($row as $key => $data) { ?>
					<tr>
						<td><b>No Invoice</b></td>
						<td> : <?= $data->invoice ?> </td>
					</tr>
					<tr>
						<td><b>Kasir</b></td>
						<td> : <?= $data->user_name ?></td>
					</tr>
					<tr>
						<td><b>Tgl Pembelian</b></td>
						<td> : <?= $data->create_sales ?></td>
					</tr>
					<tr>
						<td><b>Customers Name</b></td>
						<td> : <?= $data->sales_customers == 1 ? 'Umum' : $data->sales_customers ?></td>
					</tr>
					<tr>
						<td>
							<a href="<?= site_url('Sales/cetak/' . $data->sale_id) ?>" class="btn btn-primary" target="_blank">
								<i class="fa fa-print"></i>
							</a>
						</td>
					</tr>
				<?php } ?>
			</table>
			<br>
			<br>
			<table class=" table table-striped table-bordered">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Category</th>
						<th class="text-center">Product Name</th>
						<th class="text-center">Size</th>
						<th class="text-center">Harga Jual</th>
						<th class="text-center">Qty</th>
						<th class="text-center">Total</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($result as $key => $data) { ?>
						<tr>
							<td class="text-center"><?= $no++; ?></td>
							<td><?= $data->name_categories ?></td>
							<td><?= $data->item_name ?></td>
							<td class="text-center"><?= $data->size ?></td>
							<td class="text-right"><?= indo_currency($data->harga_jual) ?></td>
							<td class="text-center"><?= $data->qty_sales ?></td>
							<td class="text-right"><?= indo_currency($data->total_sales) ?></td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="6" class="text-right">
							<b>Grand Total</b>
						</td>
						<td colspan="1" class="text-right">
							<?php foreach ($grand_tot as $key => $data) { ?>
								<?= indo_currency($data->grand_total) ?>
							<?php } ?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</section>
