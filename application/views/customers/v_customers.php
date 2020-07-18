<section class="content-header">
    <h1>Data Customers <small>Customers</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Customers
        </li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4>Data Customers
                <div class="pull-right">
                    <a href="<?= site_url('Customers/add') ?>" class="btn btn-primary">
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
                        <th class="text-center">Customers ID</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Tlp</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td class="text-center"><?= $data->customers_id ?></td>
                            <td><?= $data->name_customers ?></td>
                            <td class="text-center"><?= $data->phone_customers ?></td>
                            <td class="text-center"><?= $data->gander_customers ?></td>
                            <td><?= $data->address_customers ?></td>
                            <td class="text-center">
                                <a href="<?= site_url('Customers/edit/' . $data->customers_id) ?>" class="btn btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?= site_url('Customers/del/' . $data->customers_id) ?>" class="btn btn-danger" onclick="return confirm('Data <?= $data->name_customers ?> akan dihapus secara permanen, apakah anda yakin  ?');">
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