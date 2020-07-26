<section class="content-header">
    <h1> Units
        <small>Satuan Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Product
        </li>
        <li class="active">Units</li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4 class="box-title">Data Units</h4>
            <div class="pull-right">
                <a href="<?= site_url('Units/add') ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
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
                            <td><?= $data->units_name ?></td>
                            <td class="text-center">
                                <a href="" class="btn btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger" onclick="return confirm('Data <?= $data->units_name ?> akan dihapus secara permanen, apakah anda yakin  ?');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php  } ?>

                </tbody>
            </table>
        </div>
    </div>

</section>