<section class="content-header">
    <h1> Categories
        <small>Kategori Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Product
        </li>
        <li class="active">Categories</li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4>Data Categories
                <div class="pull-right">
                    <a href="<?php echo site_url('Categories/add') ?>" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body  table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $data->name_categories ?></td>
                            <td class="text-center">
                                <a href="" class="btn btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?= site_url('Categories/del/' . $data->categories_id) ?>" class="btn btn-danger" onclick="return confirm('Data <?= $data->name_categories ?> akan dihapus secara permanen, apakah anda yakin  ?');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>