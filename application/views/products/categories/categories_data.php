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
    <div class="box box-primary">
        <div class="box-header">
            <h4 class="box-title">Data Categories</h4>
            <div class="pull-right">
                <a href="<?php echo site_url('Categories/add') ?>" class="btn btn-primary">
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>