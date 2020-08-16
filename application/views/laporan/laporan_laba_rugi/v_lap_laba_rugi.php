<section class="content-header">
    <h1>Data Laporan Laba Rugi <small>Laporan Laba Rugi</small></h1>
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
            Laporan Laba Rugi
        </li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header text-center">
            <h4><strong>Data Hariini</strong></h4>
            <hr style="width: 23%;">
        </div>
        <div class="box-body" style="padding-bottom: 50px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center text-success">Grand Total Pemasukan</th>
                                <th class="text-center text-danger">Grand Total Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <?php foreach ($grand_penjualan_daily as $key => $data) { ?>
                                        <?= indo_currency($data->grand_penjualan_daily) ?>
                                    <?php } ?>
                                </td>
                                <td class="text-center">
                                    <?php foreach ($grand_pengeluaran_daily as $key => $data) { ?>
                                        <?= indo_currency($data->grand_pengeluaran_daily) ?>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <b>Grand Total Keseluruhan</b>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <?php foreach ($grand_pengeluaran_daily as $key => $data_peng) { ?>
                                        <?php foreach ($grand_penjualan_daily as $key => $data_masuk) { ?>
                                            <?= indo_currency($data_masuk->grand_penjualan_daily - $data_peng->grand_pengeluaran_daily) ?>
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="box-header text-center">
            <h4><strong>Data Hari-Hari Keseluruhan</strong></h4>
            <hr style="width: 23%;">
        </div>
        <div class="box-body" style="padding-bottom: 50px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center text-success">Grand Total Pemasukan</th>
                                <th class="text-center text-danger">Grand Total Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <?php foreach ($grand_penjualan_keseluruhan as $key => $data) { ?>
                                        <?= indo_currency($data->grand_penjualan_keseluruhan) ?>
                                    <?php } ?>
                                </td>
                                <td class="text-center">
                                    <?php foreach ($grand_pengeluaran_keseluruhan as $key => $data) { ?>
                                        <?= indo_currency($data->grand_pengeluaran_keseluruhan) ?>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <b>Grand Total Keseluruhan</b>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <?php foreach ($grand_pengeluaran_keseluruhan as $key => $data_peng) { ?>
                                        <?php foreach ($grand_penjualan_keseluruhan as $key => $data_masuk) { ?>
                                            <?= indo_currency($data_masuk->grand_penjualan_keseluruhan - $data_peng->grand_pengeluaran_keseluruhan) ?>
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="box-header text-center">
            <h4><strong>Data Keseluruhan</strong></h4>
            <hr style="width: 23%;">
        </div>
        <div class="box-body" style="padding-bottom: 50px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center text-success">Grand Total Pemasukan</th>
                                <th class="text-center text-danger">Grand Total Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <?php foreach ($grand_penjualan as $key => $data) { ?>
                                        <?= indo_currency($data->grand_penjualan) ?>
                                    <?php } ?>
                                </td>
                                <td class="text-center">
                                    <?php foreach ($grand_pengeluaran as $key => $data) { ?>
                                        <?= indo_currency($data->grand_pengeluaran) ?>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <b>Grand Total Keseluruhan</b>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <?php foreach ($grand_pengeluaran as $key => $data_peng) { ?>
                                        <?php foreach ($grand_penjualan as $key => $data_masuk) { ?>
                                            <?= indo_currency($data_masuk->grand_penjualan - $data_peng->grand_pengeluaran) ?>
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>