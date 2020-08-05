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
        <li class="active">
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
                    <form action="<?= site_url('Items/add') ?>" method="POST">
                        <input type="hidden" name="jml_product" value="<?= $jml_product ?>">
                        <?php for ($i = 1; $i <= $jml_product; $i++) { ?>
                            <b>Items- <?= $i ?></b>
                            <hr>
                            <div class="form-group ">
                                <label for="">Category <i class="text-danger">*</i></label>
                                <select name="categories_id_<?= $i ?>" id="categories_id" class="form-control select2" style="width: 100%;" required>
                                    <option value="">-- Pilih --</option>
                                    <?php foreach ($categories as $key => $data) { ?>
                                        <option value="<?= $data->categories_id ?>"><?= $data->name_categories ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="item_name">Product Name <i class="text-danger">*</i></label>
                                <input type="text" name="item_name_<?= $i ?>" id="item_name" class="form-control" placeholder="Product Name" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="price">Harga Beli <i class="text-danger">*</i></label>
                            </div>
                            <div class="input-group form-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input type="text" name="harga_beli_<?= $i ?>" class="form-control" placeholder="Harga Beli" autocomplete="off" required>
                            </div>
                            <div class="form-group ">
                                <label for="">Qty <i class="text-danger">*</i></label>
                                <input type="number" name="stock_<?= $i ?>" class="form-control" placeholder="Qty" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="">Size <i class="text-danger">*</i></label>
                                <select name="size_<?= $i  ?>" id="size" class="form-control select2" style="width: 100%;" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                    <option value="XXXL">XXXL</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <input type="hidden" readonly name="units_id_<?= $i ?>" id="units_id" value="1" class="form-control" required>
                            </div>
                            <div>
                                <label for="harga_jual">Harga Jual <i class="text-danger">*</i></label>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga_jual_<?= $i ?>" id="harga_jual" class="form-control" placeholder="Harga Jual" autocomplete="off" required>
                            </div>
                            <br>
                        <?php } ?>
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