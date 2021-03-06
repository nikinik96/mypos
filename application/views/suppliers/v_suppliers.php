<section class="content-header">
    <h1>Data Suppliers <small>Suppliers</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li class="active">
            Suppliers
        </li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4>Data Suppliers
                <div class="pull-right">
                    <a href="<?= site_url('Suppliers/add') ?>" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nama Toko</th>
                        <th class="text-center">Tlp</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row as $key => $data) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td class="text-center">
                                <a href="<?= site_url('Suppliers/edit/' . $data->supplier_id); ?>" class="btn btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?= site_url('Suppliers/del/' . $data->supplier_id) ?>" class="btn btn-danger" onclick="return confirm('Data <?= $data->name ?> akan dihapus secara permanen, apakah anda yakin  ?');">
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