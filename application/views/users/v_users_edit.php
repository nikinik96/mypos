<section class="content-header">
    <h1>Edit Users <small>Users</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            <a href="<?= site_url('Users') ?>">
                Users
            </a>
        </li>
        <li>
            Edit
        </li>
    </ol>
</section>

<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h4>Edit Users
                <div class="pull-right">
                    <a href="" class="btn btn-warning">
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
                            <label for="">Nama <i class="text-danger">* </i></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Email <i class="text-danger">* </i></label>
                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat <i class="text-danger">* </i></label>
                            <textarea name="alamat" id="alamat" placeholder="Alamat" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Is Active <i class="text-danger">* </i></label>
                            <select name="" id="" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Level <i class="text-danger">* </i></label>
                            <select name="" id="" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>