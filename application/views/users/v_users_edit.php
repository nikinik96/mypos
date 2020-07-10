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
                    <a href="<?= site_url('Users') ?>" class="btn btn-warning">
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
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" value="<?= $row->name ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Email <i class="text-danger">* </i></label>
                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?= $row->email ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat <i class="text-danger">* </i></label>
                            <textarea name="alamat" id="alamat" placeholder="Alamat" rows="3" class="form-control"><?= $row->alamat ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Password <i class="text-danger">* Biarkan kosong jika tidak diganti</i></label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Retype Password <i class="text-danger">* Biarkan kosong jika tidak diganti</i></label>
                            <input type="password" name="retype_password" placeholder="Retype Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Is Active <i class="text-danger">* </i></label>
                            <select name="" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $row->is_active == 1 ? 'selected' : null ?>>Aktif</option>
                                <option value="0" <?= $row->is_active == 0 ? 'selected' : null ?>>Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Level <i class="text-danger">* </i></label>
                            <select name="" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $row->level == 1 ? 'selected' : null ?>>Admin</option>
                                <option value="2" <?= $row->level == 2 ? 'selected' : null ?>>Member</option>
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