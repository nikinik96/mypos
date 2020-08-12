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
        <div class="box-header">
            <h4>Data Laporan Laba Rugi
            </h4>
        </div>
        <div class="box-body" style="padding-bottom: 50px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Grand Total Pengeluaran</th>
                                <th class="text-center">Grand Total Pemasukan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <?php foreach ($grand_pengeluaran as $key => $data) { ?>
                                        <?= indo_currency($data->grand_pengeluaran) ?>
                                    <?php } ?>
                                </td>
                                <td class="text-center">
                                    <?php foreach ($grand_penjualan as $key => $data) { ?>
                                        <?= indo_currency($data->grand_penjualan) ?>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert alert-success">
                    <center><b>Laporan Laba Rugi</b></center>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= site_url('Lap_pengeluaran/get_data') ?>" target="_blank">
                    <div class="form-group">
                        <label class="control-label">Star Date</label>
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