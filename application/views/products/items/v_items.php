<section class="content-header">
    <h1>Items <small>Data Barang</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Product
        </li>
        <li class="active">
            Items
        </li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4>
                Data Items
                <div class="pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>

                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Size</th>
                        <th class="text-center">Price (Harga Beli)</th>
                        <th class="text-center text-danger">Price (Harga Jual)</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row as $key => $data) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data->item_name ?></td>
                            <td><?= $data->name_categories ?></td>
                            <td class="text-center"><?= $data->units_id ?></td>
                            <td class="text-center"><?= $data->size ?></td>
                            <td><?= indo_currency($data->harga_beli)  ?></td>
                            <td><?= indo_currency($data->harga_jual)  ?></td>
                            <td class="text-center"><?= $data->stock ?></td>
                            <td>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Product Item</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= site_url('Items/add_lopp') ?>">
                    <div class="form-group">
                        <label for="jml_product" class="control-label">Jumlah Product <i class="text-danger">*</i></label>
                        <input type="number" class="form-control" name="jml_product" name="jml_product" placeholder="Jumlah Product" autocomplete="off" autofocus required>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-danger"><i class="fa fa-rotate-left"></i></button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>