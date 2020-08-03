<section class="content-header">
    <h1>Sales <small>Penjualan</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Transaksi
        </li>
        <li class="active">
            Sales
        </li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="Date">Date</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" name="" id="" value="<?= date('Y-m-d') ?>" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="Date">Kasir</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="" id="" value="<?= $this->fungsi->user_login()->name ?>" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="Date">Customers</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="" id="" class="form-control select2" style="width: 100%;">
                                        <option value="">-- Pilih --</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="col-md-4">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top; width: 27%">
                                <label for="Date">Product Name</label>
                            </td>
                            <td>
                                <div class="form-group input-group">
                                    <input type="hidden" id="price">
                                    <input type="hidden" id="stock">
                                    <input type="hidden" id="item_id">
                                    <input type="text" id="item_name" class="form-control" autofocus readonly>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="Date">Qty</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="qty" id="qty" value="1" min="1" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                            </td>
                            <td>
                                <div class="form-group">
                                    <button type="button" id="add_cart" class="btn btn-primary">
                                        <i class="fa fa-cart-plus"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="col-md-4">
            <div class="box box-widget">
                <div class="box-body">
                    <div class="text-right">
                        <h4>Invoice <b><span id="invoice"><?= $invoice ?></span></b></h4>
                        <h1><b><span id="grand_total2" style="font-size: 50pt;">0</span></b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Product Item</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Discount Item</th>
                                <th class="text-center" style="width: 10%;">Total</th>
                                <th class="text-center" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="cart_table">
                            <?php $this->view('transaksi/sales/cart_data') ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="row">
        <div class="col-md-3">
            <div class="box">
                <div class="box-body">
                    <table style="width: 100%;">
                        <tr>
                            <td style="vertical-align: top; width: 30%">
                                <label for="sub_total">Sub Total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="sub_total" id="sub_total" value="" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="discount">Discount</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="discount" id="discount" min="0" class="form-control" placeholder="Discount">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="grand_total">Grand Total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="grand_total" id="grand_total" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="col-md-3">
            <div class="box">
                <div class="box-body">
                    <table style="width: 100%;">
                        <tr>
                            <td style="vertical-align: top; width: 29%">
                                <label for="cash">Cash</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="cash" min="0" class="form-control" placeholder="Cash">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 29%">
                                <label for="change">Change</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="change" value="0" min="0" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="col-md-3">
            <div class="box">
                <div class="box-body">
                    <table style="width: 100%;">
                        <tr>
                            <td style="vertical-align: top; width: 29%">
                                <label for="note">Note</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <textarea name="" id="note" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box">
                <div class="box-body">
                    <button id="cancel_payment" class="btn btn-warning" style="width: 100%;">
                        <i class="fa fa-refresh"></i>
                    </button>
                    <hr style="width: 70%;">
                    <button id="process_payment" class="btn btn-success" style="width: 100%;">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Product Items</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="mytable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Price (Rp)</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($item as $key => $data) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data->item_name ?></td>
                                <td><?= $data->size ?></td>
                                <td><?= $data->price ?></td>
                                <td class="text-center"><?= $data->stock ?></td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="select" data-item_name="<?= $data->item_name ?>" data-price="<?= $data->price ?>" data-item_id="<?= $data->item_id ?>" data-product="<?= $data->item_name ?>" data-item="<?= $data->item_id ?>" data-stock="<?= $data->stock ?>">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            $('#item_id').val($(this).data('item_id'));
            $('#price').val($(this).data('price'));
            $('#item_name').val($(this).data('item_name'));
            $('#stock').val($(this).data('stock'));
            $('#exampleModal').modal('hide');
        });
    });

    $(document).on('click', '#add_cart', function() {
        var item_id = $('#item_id').val()
        var price = $('#price').val()
        var stock = $('#stock').val()
        var qty = $('#qty').val()

        if (item_id == '') {
            swal("Error!", "Product belum dipilih!", "error");
            $('#item_id').focus();
        } else if (stock < 1) {
            swal("Error!", "Stock tidak mencukupi!", "error");
            $('#item_id').val('')
        } else {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('Sales/process') ?>',
                data: {
                    'add_cart': true,
                    'item_id': item_id,
                    'price': price,
                    'qty': qty
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('sales/cart_data') ?>', function() {
                            swal("Success!", "Data ditambahkan ke cart!", "success");
                        })
                        $('#item_name').val('');
                        $('#item_id').val('');
                        $('#qty').val(1);

                    } else {
                        swal("Error!", "Data Cart gagal disimpan!", "error");
                    }
                }
            })
        }
    });

    $(document).on('click', '#del_cart', function() {

        if (confirm('Apakah Yakin?')) {
            var cart_id = $(this).data('cartid')
            $.ajax({
                type: 'POST',
                url: '<?= site_url('Sales/cart_del'); ?>',
                dataType: 'json',
                data: {
                    'cart_id': cart_id
                },
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('sales/cart_data') ?>', function() {
                            swal("Success!", "Data berhasil dihapus!", "success");
                        })
                    } else {
                        swal("Success!", "Data gagal dihapus!", "success");
                    }
                }
            })
        } else {
            swal("Error!", "Data gagal dihapus!", "error");
        }
    })
</script>