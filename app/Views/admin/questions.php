<?= $this->extend('admin/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Simulation Questions</h5>
                    <div>
                        <a href="<?= base_url('admin/add-question')?>" class="btn btn-primary btn-sm">
                            Add New
                        </a>
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Question</th>
                                <th>Category</th>
                                <th>Data</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#1</td>
                                <td>
                                    <span class="badge badge-pill badge-cyan font-size-12">Easy</span>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.?
                                </td>
                                <td>GSTR1</td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="font-size-30">
                                            <i class="anticon anticon-file-done text-primary"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">data.zip</a>
                                            </h6>
                                            <p class="text-muted m-b-0">1.2MB</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-download"></i>
                                                <span class="m-l-10">Download</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Remove</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1</td>
                                <td>
                                    <span class="badge badge-pill badge-gold font-size-12">Intermediate</span>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.?
                                </td>
                                <td>GSTR1</td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="font-size-30">
                                            <i class="anticon anticon-file-done text-primary"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">data.zip</a>
                                            </h6>
                                            <p class="text-muted m-b-0">1.2MB</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-download"></i>
                                                <span class="m-l-10">Download</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Remove</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1</td>
                                <td>
                                    <span class="badge badge-pill badge-red font-size-12">Advanced</span>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.?
                                </td>
                                <td>GSTR1</td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="font-size-30">
                                            <i class="anticon anticon-file-done text-primary"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">data.zip</a>
                                            </h6>
                                            <p class="text-muted m-b-0">1.2MB</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-download"></i>
                                                <span class="m-l-10">Download</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Remove</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1</td>
                                <td>
                                    <span class="badge badge-pill badge-cyan font-size-12">Easy</span>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.?
                                </td>
                                <td>GSTR1</td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="font-size-30">
                                            <i class="anticon anticon-file-done text-primary"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">data.zip</a>
                                            </h6>
                                            <p class="text-muted m-b-0">1.2MB</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-download"></i>
                                                <span class="m-l-10">Download</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Remove</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1</td>
                                <td>
                                    <span class="badge badge-pill badge-cyan font-size-12">Easy</span>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.?
                                </td>
                                <td>GSTR1</td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="font-size-30">
                                            <i class="anticon anticon-file-done text-primary"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">data.zip</a>
                                            </h6>
                                            <p class="text-muted m-b-0">1.2MB</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-download"></i>
                                                <span class="m-l-10">Download</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Remove</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

