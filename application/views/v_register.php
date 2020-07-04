<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>My</b>POS</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="" method="post">
                <div class="form-group has-feedback <?= form_error('name') != NULL ? 'has-error' : null ?>">
                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" value="<?= set_value('name') ?>" autocomplete="off" autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group has-feedback <?= form_error('email') != NULL ? 'has-error' : null ?>">
                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>" autocomplete="off">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group has-feedback <?= form_error('alamat') != NULL ? 'has-error' : null ?>">
                    <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" autocomplete="off"><?= set_value('alamat') ?></textarea>
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                    <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group has-feedback <?= form_error('password') != NULL ? 'has-error' : null ?>">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group has-feedback <?= form_error('password') != NULL ? 'has-error' : null ?>">
                    <input type="password" name="retype_password" class="form-control" placeholder="Ulangi password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" style="width: 100%;">Register</button>
                    </div>
                </div>
            </form>
            <hr>
            <a href="<?= site_url('Auth') ?>" class="text-center">I already have a membership</a>
        </div>
    </div>

    <script src="<?= base_url('assets') ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>