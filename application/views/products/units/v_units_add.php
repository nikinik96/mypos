<section class="content-header">
  <h1> Units
    <small>Satuan Barang</small>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?= site_url('Dashboard') ?>">
        <i class="fa fa-dashboard"></i>
      </a>
    </li>
    <li class="acitve">
      Product
    </li>
    <li class="active">Units</li>
  </ol>
</section>

<section class="content">
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Add Unit</h3>
      <div class="pull-right">
        <a href="<?= site_url('Units') ?>" class="btn btn-warning">
          <i class="fa fa-arrow-right"></i>
        </a>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="" method="post">
            <div class="form-group <?= form_error('units_name') == TRUE ? 'has-error' : null ?>">
              <label> Unit Name <i class="text-danger">*</i></label>
              <input type="text" name="units_name" class="form-control" placeholder="Units Name" value="<?= set_value('units_name') ?>" autocomplete="off" autofocus="true">
              <?= form_error('units_name', '<div class="text-danger">', '</div>'); ?>
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