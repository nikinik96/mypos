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
        <li class="active">
            Edit
        </li>
    </ol>
</section>
<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h4>
                Edit Customers
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
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Customers ID <i class="text-danger">*</i></label>
                            <input type="text" name="customers_id" id="customers_id" class="form-control" placeholder="Customers ID" value="<?= $row->customers_id ?>" readonly="true">
                            <?= form_error('customers_id', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('name_customers') == TRUE ? 'has-error' : null ?>">
                            <label for="name_customers">Nama Customers <i class="text-danger">*</i></label>
                            <input type="text" name="name_customers" id="name_customers" class="form-control" value="<?= $this->input->post('name_customers') ?? $row->name_customers ?>" placeholder="Nama Customers" autocomplete="off">
                            <?= form_error('name_customers', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('gander_customers') == TRUE ? 'has-error' : null ?>">
                            <label for="gander_customers">Jenis Kelamin <i class="text-danger">*</i></label>
                            <select name="gander_customers" id="gander_customers" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $row->gander_customers == 1 ? 'selected' : null ?>>Laki-Laki</option>
                                <option value="2" <?= $row->gander_customers == 2 ? 'selected' : null ?>>Perempuan</option>
                            </select>
                            <?= form_error('gander_customers', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('phone_customers') == TRUE ? 'has-error' : null ?>">
                            <label for="phone_customers">Tlp <i class="text-danger">*</i></label>
                            <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" value="<?= $this->input->post('phone_customers') ?? $row->phone_customers ?>" name="phone_customers" id="phone_customers" class="form-control" placeholder="No Tlp Customers" autocomplete="off">
                            <?= form_error('phone_customers', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('address_customers') == TRUE ? 'has-error' : null ?>">
                            <label for="address_customers">Alamat <i class="text-danger">*</i></label>
                            <textarea name="address_customers" id="address_customers" rows="4" class="form-control" placeholder="Alamat Customers"><?= $this->input->post('address_customers') ?? $row->address_customers ?></textarea>
                            <?= form_error('address_customers', '<div class="text-danger">', '</div>'); ?>
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