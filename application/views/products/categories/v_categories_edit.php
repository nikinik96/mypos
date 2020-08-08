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
        <li>
            <a href="<?= site_url('Categories') ?>"></a>
            Categories
        </li>
        <li class="active">Edit</li>
    </ol>
</section>

<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h4>
                Edit Categories
                <div class="pull-right">
                    <a href="<?= site_url('Categories') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('Categories/process_edit') ?>" method="post">
                        <input type="hidden" name="categories_id" value="<?= $row->categories_id ?>">
                        <div class="form-group">
                            <label> Category Name <i class="text-danger">*</i></label>
                            <input type="text" name="name_categories" id="name_categories" class="form-control" value="<?= $this->input->post('name_categories') ?? $row->name_categories ?>" placeholder="Categories Name" autocomplete="off" required>
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