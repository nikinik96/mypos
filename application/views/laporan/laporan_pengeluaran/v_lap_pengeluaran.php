<section class="content-header">
    <h1>Data Laporan Pengeluaran <small>Lap Pengeluaran</small></h1>
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
            Lap Pengeluaran
        </li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h4>Data Laporan Pengeluaran</h4>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Size</th>
                        <th class="text-center">Harga Beli</th>
                        <th class="text-center">Qty</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <td colspan="5" class="text-center">
                        <button type="button" class="btn btn-warning cetak" data-toggle="modal" title="Cetak"><i class="glyphicon glyphicon-print"></i></button>
                    </td>
                </tfoot>
            </table>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert alert-success">
                    <center><b>Laporan Pengeluaran</b></center>
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
                        <button type="button" class="btn btn-danger " data-toggle="tooltip" title="Back" onClick="refreshPage()" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
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