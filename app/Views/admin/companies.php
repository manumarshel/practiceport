<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Companies</h5>
                    <div>
                        <a href="<?= base_url('admin/add-company')?>" class="btn btn-sm btn-primary">Add New</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="row">
                        <?php if ( isset($companies) ):
                            foreach ( $companies as $company ):
                            ?>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="media">
                                            <div class="">
                                                <h5 class="m-b-0"><?=$company['name']; ?></h5>
                                                <span class="text-muted font-size-13">31 Tax Filings</span>
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown-animated scale-left">
                                            <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                <i class="anticon anticon-ellipsis"></i>
                                            </a>
                                            <div class="dropdown-menu">
<!--                                                <button class="dropdown-item" type="button">-->
<!--                                                    <i class="anticon anticon-eye"></i>-->
<!--                                                    <span class="m-l-10">View</span>-->
<!--                                                </button>-->
                                                <a href="<?= base_url(); ?>/admin/add-company/<?= $company['company_id']; ?>" class="dropdown-item" type="button">
                                                    <i class="anticon anticon-edit"></i>
                                                    <span class="m-l-10">Edit</span>
                                                </a>
                                                <button class="dropdown-item" type="button">
                                                    <i class="anticon anticon-delete"></i>
                                                    <span class="m-l-10">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="m-t-25">GST - <?=$company['gst_number']; ?></p>
                                    <div class="m-t-20">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="badge badge-pill badge-blue"><?=$company['username']; ?></span>
                                                <span class="badge badge-pill badge-blue"><?=$company['password']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
