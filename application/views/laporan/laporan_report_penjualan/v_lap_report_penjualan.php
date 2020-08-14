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
            </h4>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Invoice</th>
                        <th class="text-center">Customers Name</th>
                        <th class="text-center">Tanggal Pembelian</th>
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
                            <td><?= $data->name_customers ?></td>
                            <td class="text-center"><?= $data->create_sales ?></td>
                            <td class="text-center"><?= $data->user_name ?></td>
                            <td class="text-center">
                                <a href="<?= site_url('Lap_report_penjualan/result/' . $data->sale_id) ?>" class="btn btn-success">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>