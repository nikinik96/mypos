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
                <a href="<?= site_url('units/add') ?>" class="btn btn-primary">
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
            </table>
        </div>
    </div>

</section>