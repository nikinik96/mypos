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
                    <a href="<?= site_url('Items/add') ?>" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
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
                        <th class="text-center">Price</th>
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
                            <td>Rp. <?= $data->price ?></td>
                            <td class="text-center"><?= $data->stock ?></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>