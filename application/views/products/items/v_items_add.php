<section class="content-header">
    <h1>Items <small>Add Barang</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Product
        </li>
        <li>
            <a href="<?= site_url('Items') ?>">Items</a>
        </li>
        <li>
            Add
        </li>

    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h4>
                Add Items
                <div class="pull-right">
                    <a href="<?= site_url('Items') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="">
                        <div class="form-group">
                            <label for="">Barcode <i class="text-danger">*</i></label>
                            <input type="text" name="" id="" readonly="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Name <i class="text-danger">*</i></label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Category <i class="text-danger">*</i></label>
                            <select name="" id="" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Unit <i class="text-danger">*</i></label>
                            <select name="" id="" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Price <i class="text-danger">*</i></label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger"><i class="fa fa-rotate-left"></i></button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>