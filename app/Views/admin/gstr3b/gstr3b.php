<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add New Company</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="add-question.html" class="breadcrumb-item"><i class="anticon anticon-file-unknown m-r-5"></i>Question Details</a>
                            <a class="breadcrumb-item" href="<?= base_url('admin/gstr1/'.$question_id) ?>">GSTR1 Data</a>
                            <a class="breadcrumb-item active" href="<?= base_url('admin/gstr3b/'.$question_id) ?>">GSTR3B Data</a>
                            <a class="breadcrumb-item" href="payment-details.html">Payment Details</a>
                        </nav>
                    </div>
                </div>
                <!-- <div class="d-flex justify-content-between align-items-center">
                    <h5>Companies</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary">Add New</a>
                    </div>
                </div> -->
                <div class="m-t-30">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="form-title" id="1">GSTR-3B Data</h4>
                        </div>
                        <div class="col-md-6 gst-cards">
                            <a href="<?= base_url('admin/gstr3b/system-summary/'.$question_id) ?>" class="list-group-item list-group-item-action active">
                                System generated summary for GSTR-3B
                            </a>
                            <a href="<?= base_url('admin/gstr3b/inter-statement-supplies/'.$question_id) ?>" class="list-group-item list-group-item-action">3.2 Inter State Supplies </a>
                            <a href="<?= base_url('admin/gstr3b/inward-supplies/'.$question_id) ?>" class="list-group-item list-group-item-action">5. Exempt, nil and Non GST inward supplies</a>
                            <a href="<?= base_url('admin/gstr3b/payment/'.$question_id) ?>" class="list-group-item list-group-item-action">6.1 Payment of tax</a>
                        </div>
                        <div class="col-md-6 gst-cards">
                            <a href="<?= base_url('admin/gstr3b/iosup/'.$question_id) ?>" class="list-group-item list-group-item-action">3.1 Details of Outward Supplies and inward supplies liable to reverse charge</a>
                            <a href="<?= base_url('admin/gstr3b/eligible-itc/'.$question_id) ?>" class="list-group-item list-group-item-action">4. Eligible ITC</a>
                            <a href="<?= base_url('admin/gstr3b/insterest-late-fee/'.$question_id) ?>" class="list-group-item list-group-item-action">5.1 Interest & late fee payable</a>
                            <a href="<?= base_url('admin/gstr3b/payment2/'.$question_id) ?>" class="list-group-item list-group-item-action">6.1 Payment of tax</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>