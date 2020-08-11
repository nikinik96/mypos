<?php
date_default_timezone_set("Asia/Bangkok");
?>
<section class="content-header">
    <h1>Data Stock Out <small>Stock Out</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Transaksi
        </li>
        <li>
            <a href="<?= site_url('Stock_out') ?>">
                Stock Out
            </a>
        </li>
        <li class="active">
            Add
        </li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h4>Add Stock Out
                <div class="pull-right">
                    <a href="<?= site_url('Stock_in') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Date <i class="text-danger">*</i></label>
                            <input type="date" name="date" id="date" class="form-control" value="<?= date('Y-m-d') ?>">
                            <?= form_error('date', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <label for="">Product Item <i class="text-danger">*</i></label>
                        <div class="input-group">
                            <input type="text" name="item_id" id="item_id" class="form-control" readonly>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <?= form_error('barcode', '<div class="text-danger">', '</div>'); ?>
                        <br>
                        <div class="form-group">
                            <label for="">Product Name <i class="text-danger">*</i></label>
                            <input type="text" name="product" id="product" class="form-control" readonly>
                            <?= form_error('product', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Initial Stock <i class="text-danger">*</i></label>
                            <input type="text" name="stock" id="stock" class="form-control" readonly>
                            <?= form_error('stock', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Qty <i class="text-danger">*</i></label>
                            <input type="number" name="qty" id="qty" class="form-control" autocomplete="off" placeholder="Qty Barang Hilang/Rusak/Reject">
                            <?= form_error('qty', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Detail</label>
                            <textarea name="detail" id="detail" cols="30" rows="4" class="form-control" placeholder="Detail Stock Out"></textarea>
                            <?= form_error('detail', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Product Items</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="mytable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Harga Jual (Rp)</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($item as $key => $data) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data->item_name ?></td>
                                <td><?= $data->size ?></td>
                                <td><?= indo_currency($data->harga_jual) ?></td>
                                <td class="text-center"><?= $data->stock ?></td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="select" data-item_id="<?= $data->item_id ?>" data-product="<?= $data->item_name ?>" data-item="<?= $data->item_id ?>" data-stock="<?= $data->stock ?>">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            var item = $(this).data('item');
            var product = $(this).data('product');
            var stock = $(this).data('stock');
            var item_id = $(this).data('item_id');

            $('#item').val(item);
            $('#product').val(product);
            $('#stock').val(stock);
            $('#item_id').val(item_id);


            $('#exampleModal').modal('hide');
        });
    });
</script>