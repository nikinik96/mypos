<section class="content-header">
    <h1>Data Suppliers <small>Suppliers</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            <a href="<?= site_url('Suppliers') ?>">
                Suppliers
            </a>
        </li>
        <li class="active">
            Add
        </li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h4>Add Suppliers
                <div class="pull-right">
                    <a href="<?= site_url('Suppliers') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="" method="POST">
                        <div class="form-group <?= form_error('name') == TRUE ? 'has-error' : null ?>">
                            <label for="name">Nama Toko a <i class="text-danger">*</i></label>
                            <input type="text" name="name" id="name" class="form-control" autocomplete="off" autofocus placeholder="Nama Toko">
                            <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('phone') == TRUE ? 'has-error' : null ?>">
                            <label for="phone">Tlp <i class="text-danger">*</i></label>
                            <input type="number" name="phone" id="phone" class="form-control" autocomplete="off" placeholder="Tlp Suppliers">
                            <?= form_error('phone', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('address') == TRUE ? 'has-error' : null ?>">
                            <label for="address">Alamat <i class="text-danger">*</i></label>
                            <textarea name="address" id="address" cols="30" rows="4" class="form-control" placeholder="Alamat Suppliers"></textarea>
                            <?= form_error('address', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger"><i class="fa fa-rotate-left"></i></button>
                            <button type="submit" id="add" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>