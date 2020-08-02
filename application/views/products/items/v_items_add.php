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
                    <form action="" method="POST">
                        <div class="form-group <?= form_error('categories_id') == TRUE ? 'has-error' : null ?>">
                            <label for="">Category <i class="text-danger">*</i></label>
                            <select name="categories_id" id="categories_id" class="form-control select2" style="width: 100%;">
                                <option value="">-- Pilih --</option>
                                <?php foreach ($categories as $key => $data) { ?>
                                    <option value="<?= $data->categories_id ?>"><?= $data->name_categories ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('categories_id', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('item_name') == TRUE ? 'has-error' : null ?>">
                            <label for="item_name">Product Name <i class="text-danger">*</i></label>
                            <input type="text" name="item_name" id="item_name" class="form-control" value="<?= set_value('item_name') ?>" placeholder="Product Name" autocomplete="off">
                            <?= form_error('item_name', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Size <i class="text-danger">*</i></label>
                            <select name="size" id="size" class="form-control select2" style="width: 100%;">
                                <option value="">-- Pilih --</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                                <option value="XXXL">XXXL</option>
                            </select>
                            <?= form_error('size', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('units_id') == TRUE ? 'has-error' : null ?>">
                            <label for="units_id">Units <i class="text-danger">*</i></label>
                            <input type="text" readonly name="units_id" id="units_id" value="1" class="form-control">
                            <?= form_error('units_id', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div>
                            <label for="price">Price <i class="text-danger">*</i></label>
                        </div>
                        <div class="input-group <?= form_error('price') == TRUE ? 'has-error' : null ?>">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Price" value="<?= set_value('price') ?>" autocomplete="off">
                        </div>
                        <?= form_error('price', '<div class="text-danger">', '</div>'); ?>
                        <br>
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

<script type="text/javascript">
    var rupiah = document.getElementById('price');
    rupiah.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, '');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }
</script>