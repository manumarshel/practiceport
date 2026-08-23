<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add New Company</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="add-question.html" class="breadcrumb-item"><i class="anticon anticon-file-unknown m-r-5"></i>Question Details</a>
                            <a class="breadcrumb-item active" href="<?= base_url('admin/gstr1/'.$question_id) ?>">GSTR1 Data</a>
                            <a class="breadcrumb-item" href="<?= base_url('admin/gstr3b/'.$question_id) ?>">GSTR3B Data</a>
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
                            <h4 class="form-title" id="1">GSTR1 Data</h4>
                        </div>
                        <div class="col-md-4 gst-cards">
                            <a href="<?= base_url('admin/gstr1/b2b/'.$question_id) ?>" class="list-group-item list-group-item-action active">B2B</a>
                            <a href="<?= base_url('admin/gstr1/cdnur/'.$question_id) ?>" class="list-group-item list-group-item-action">9B - Credit / Debit Notes (Unregistered)</a>
                            <a href="<?= base_url('admin/gstr1/b2cl-amendment/'.$question_id) ?>" class="list-group-item list-group-item-action">9A - Amended B2C ( Large ) Invoices</a>
                            <a href="<?= base_url('admin/gstr1/cdnur-amendment/'.$question_id) ?>" class="list-group-item list-group-item-action">9C - Amended Credit/Debit Notes (Unregistered)</a>
                            <a href="<?= base_url('admin/gstr1/adv-tax/'.$question_id) ?>" class="list-group-item list-group-item-action">11A(1), 11A(2) - Tax Liability (Advances Received)</a>
                            <a href="<?= base_url('admin/gstr1/document/'.$question_id) ?>" class="list-group-item list-group-item-action">Documents issued during the tax period</a>
                            <a href="<?= base_url('admin/gstr1/b2cs-amendment/'.$question_id) ?>" class="list-group-item list-group-item-action">Amended B2C(Others) Details - Summary</a>
                        </div>
                        <div class="col-md-4 gst-cards">
                            <a href="<?= base_url('admin/gstr1/b2cl/'.$question_id) ?>" class="list-group-item list-group-item-action">B2C Large</a>
                            <a href="<?= base_url('admin/gstr1/export/'.$question_id) ?>" class="list-group-item list-group-item-action">6A - Exports Invoices</a>
                            <a href="<?= base_url('admin/gstr1/export-amendment/'.$question_id) ?>" class="list-group-item list-group-item-action">9A - Amended Exports Invoices</a>
                            <a href="<?= base_url('admin/gstr1/b2cs/'.$question_id) ?>" class="list-group-item list-group-item-action">7 - B2C (Others)</a>
                            <a href="<?= base_url('admin/gstr1/tax-paid/'.$question_id) ?>" class="list-group-item list-group-item-action">Adjustment of Advances - Summary</a>
                            <a href="<?= base_url('admin/gstr1/adv-tax-amendment/'.$question_id) ?>" class="list-group-item list-group-item-action">Amended Tax Liability (Advance Received) - Summary</a>
                        </div>
                        <div class="col-md-4 gst-cards">
                            <a href="<?= base_url('admin/gstr1/cdnr/'.$question_id) ?>" class="list-group-item list-group-item-action">9B Credit/Debit Note </a>
                            <a href="<?= base_url('admin/gstr1/b2b-amendment/'.$question_id) ?>" class="list-group-item list-group-item-action">9 Amended B2B Invoices</a>
                            <a href="<?= base_url('admin/gstr1/cdn-amendment/'.$question_id) ?>" class="list-group-item list-group-item-action">9C - Amended Credit/Debit Notes (Registered)</a>
                            <a href="<?= base_url('admin/gstr1/nil-rated/'.$question_id) ?>" class="list-group-item list-group-item-action">8A, 8B, 8C, 8D - Nil Rated Supplies</a>
                            <a href="<?= base_url('admin/gstr1/hsn/'.$question_id) ?>" class="list-group-item list-group-item-action">HSN-wise summary of outward supplies</a>
                            <a href="<?= base_url('admin/gstr1/tax-paid-amendment/'.$question_id) ?>" class="list-group-item list-group-item-action">Amendment of Adjustment of Advances - Summary</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>