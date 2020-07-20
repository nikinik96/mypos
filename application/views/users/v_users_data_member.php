<section class="content-header">
    <h1>Data Users <small>Users</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Users
        </li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-2">
            <div class="box box-primary">
                <img src="<?= base_url('assets/dist/img/default.png') ?>" class="img-responsive center-block">
            </div>
        </div>
        <div class="col-md-10">
            <div class="box box-success">
                <div class="box-body">
                    <form action="<?= site_url('Users/edit'); ?>" method="POST">
                        <input type="hidden" name="user_id" value="<?= $this->fungsi->user_login()->user_id ?>" required>

                        <div class="form-group <?= form_error('name') == true ? 'has-error' : null ?>">
                            <label for="">Nama <i class="text-danger">* </i></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" value="<?= $this->fungsi->user_login()->name ?>" autocomplete="off" required>
                            <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('email') == true ? 'has-error' : null ?>">
                            <label for="">Email <i class="text-danger">* </i></label>
                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?= $this->fungsi->user_login()->email ?>" autocomplete="off" required>
                            <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('alamat') == true ? 'has-error' : null ?>">
                            <label for="">Alamat <i class="text-danger">* </i></label>
                            <textarea name="alamat" id="alamat" placeholder="Alamat" rows="3" class="form-control" required><?= $this->fungsi->user_login()->alamat ?></textarea>
                            <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('password') == true ? 'has-error' : null ?>">
                            <label for="">Password <i class="text-danger">* Biarkan kosong jika tidak diganti</i></label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('password') == true ? 'has-error' : null ?>">
                            <label for="">Retype Password <i class="text-danger">* Biarkan kosong jika tidak diganti</i></label>
                            <input type="password" name="retype_password" placeholder="Retype Password" class="form-control">
                            <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('is_active') == true ? 'has-error' : null ?>">
                            <label for="">Is Active <i class="text-danger">* </i></label>
                            <select name="is_active" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $this->fungsi->user_login()->is_active == 1 ? 'selected' : null ?>>Aktif</option>
                                <option value="0" <?= $this->fungsi->user_login()->is_active == 2 ? 'selected' : null ?>>Tidak Aktif</option>
                            </select>
                            <?= form_error('is_active', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('level') == true ? 'has-error' : null ?>">
                            <label for="">Level <i class="text-danger">* </i></label>
                            <select name="level" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $this->fungsi->user_login()->level == 1 ? 'selected' : null ?>>Admin</option>
                                <option value="2" <?= $this->fungsi->user_login()->level == 2 ? 'selected' : null ?>>Member</option>
                            </select>
                            <?= form_error('level', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat" style="width: 100%;">Update My Profile</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>