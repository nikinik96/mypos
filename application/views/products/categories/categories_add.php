<section class="content-header">
    <h1> Categories
        <small>Kategori Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Product
        </li>
        <li class="active">Categories</li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h4>
                Add Categories
                <div class="pull-right">
                    <a href="<?= site_url('Items') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <div class="form-group">
                            <label> Category Name *</label>
                            <input type="text" name="category_name" value="" class="form-control" placeholder="Categories Name" required>
                        </div>
                        <button type="reset" class="btn btn-danger">
                            <i class="fa fa-rotate-left"></i>
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>