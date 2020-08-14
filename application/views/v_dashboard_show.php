<section class="content">
    <h3>Welcome Back, <?= ucfirst($this->fungsi->user_login()->name); ?></h3>
    <a href="<?= site_url('Dashboard') ?>" class="btn btn-success">
        <i class="fa fa-arrow-right"> </i> Dashboard
    </a>
</section>