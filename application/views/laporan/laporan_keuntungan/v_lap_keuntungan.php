<section class="content-header">
	<h1>Data Laporan Keuntungan <small>Lap Keuntungan</small></h1>
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
			Lap Keuntungan
		</li>
	</ol>
</section>

<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h4>Data Laporan Keuntungan
				<div class="pull-right">
					<button type="button" class="btn btn-warning cetak" data-toggle="modal" title="Cetak"><i class="glyphicon glyphicon-print"></i></button>
				</div>
			</h4>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="mytable">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Category</th>
						<th class="text-center">Product Name</th>
						<th class="text-center">Size</th>
						<th class="text-center">HJ - HB</th>
						<th class="text-center">Qty</th>
						<th class="text-center">Tgl Jual</th>
						<th class="text-center">Customers</th>
						<th class="text-center">Kasir</th>
						<th class="text-center">Total</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach ($row as $key => $data) { ?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td><?= $data->name_categories ?></td>
							<td><?= $data->item_name ?></td>
							<td class="text-center"><?= $data->size ?></td>
							<td class="text-right"><?= indo_currency($data->harga_jual - $data->harga_beli)   ?></td>
							<td class="text-center"><?= $data->qty_sale ?></td>
							<td class="text-center"><?= indo_date($data->tgl_jual)  ?></td>
							<td><?= $data->sales_customers == 1 ? 'Umum' : $data->sales_customers ?></td>
							<td><?= $data->kasir ?></td>
							<td class="text-right"><?= indo_currency(($data->harga_jual - $data->harga_beli) * $data->qty_sale) ?></td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="9" class="text-right">
							<b>Grand Total</b>
						</td>
						<td colspan="1" class="text-right">
							<?php foreach ($grand_total as $key => $data) { ?>
								<?= indo_currency($data->grand_total) ?>
							<?php } ?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="alert alert-success">
					<center><b>Laporan Keuntungan</b></center>
				</div>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?= site_url('Lap_keuntungan/get_data') ?>" target="_blank">
					<div class="form-group">
						<label class="control-label">Start Date</label>
						<input type="date" name="start" value="<?= date('Y-m-d'); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">End Date</label>
						<input type="date" name="end" value="<?= date('Y-m-d', strtotime('+30 days')); ?>" class=" form-control">
					</div>
					<hr style="border: none;border-bottom: 1px solid black;width: 80%;">
					<div class="text-center">
						<button type="submit" class="btn btn-danger " data-toggle="tooltip" title="Back" onclick="refreshPage()" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
						<button class="btn btn-primary" type="submit" name="submit" value="proses" data-toggle="tooltip" title="Print" onclick="return valid();"><i class="glyphicon glyphicon-print"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$(".cetak").click(function() {
			$("#exampleModal").modal({
				backdrop: 'static',
				keyboard: false
			});
		});
	});
</script>
