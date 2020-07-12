<section class="content-header">
    <h1>Data Customers <small>Customers</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            <a href="<?= site_url('Customers') ?>">Customers</a>
        </li>
        <li>
            Add
        </li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h4>
                Add Customers
                <div class="pull-right">
                    <a href="<?= site_url('Customers') ?>" class="btn btn-warning">
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
                            <label for="">Customers ID <i class="text-danger">*</i></label>
                            <input type="text" name="customers_id" id="customers_id" class="form-control" placeholder="Customers ID" readonly="true">
                        </div>
                        <div class="form-group">
                            <label for="name_customers">Nama Customers <i class="text-danger">*</i></label>
                            <input type="text" name="name_customers" id="name_customers" class="form-control" placeholder="Nama Customers">
                        </div>
                        <div class="form-group">
                            <label for="gander_customers">Jenis Kelamin <i class="text-danger">*</i></label>
                            <select name="gander_customers" id="gander_customers" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="">Laki-Laki</option>
                                <option value="">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone_customers">Tlp <i class="text-danger">*</i></label>
                            <input type="number" name="phone_customers" id="phone_customers" class="form-control" placeholder="No Tlp Customers">
                        </div>
                        <div class="form-group">
                            <label for="address_customers">Alamat <i class="text-danger">*</i></label>
                            <textarea name="address_customers" id="address_customers" rows="4" class="form-control" placeholder="Alamat Customers"></textarea>
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