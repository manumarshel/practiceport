<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add New Company</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item"><i class="anticon anticon-project m-r-5"></i>Company Details</a>
                            <a class="breadcrumb-item active" href="#">GSTR1 Data</a>
                            <a class="breadcrumb-item" href="#">GSTR3B Data</a>
                            <a class="breadcrumb-item" href="#">Payment Details</a>
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
                        <div class="col-md-4">
                            <div class="list-group ">
                                <a href="#1" class="list-group-item list-group-item-action active">B2B</a>
                                <a href="#2" class="list-group-item list-group-item-action">B2C Large</a>
                                <a href="#3" class="list-group-item list-group-item-action">9B Credit/Debit Note </a>
                                <a href="#4" class="list-group-item list-group-item-action">9B - Credit / Debit Notes (Unregistered)</a>
                                <a href="#5" class="list-group-item list-group-item-action">6A - Exports Invoices</a>
                                <a href="#6" class="list-group-item list-group-item-action">9 Amended B2B Invoices</a>
                                <a href="#7" class="list-group-item list-group-item-action">9A - Amended B2C ( Large ) Invoices</a>
                                <a href="#8" class="list-group-item list-group-item-action">9A - Amended Exports Invoices</a>
                                <a href="#9" class="list-group-item list-group-item-action">9C - Amended Credit/Debit Notes (Registered)</a>
                                <a href="#10" class="list-group-item list-group-item-action">9C - Amended Credit/Debit Notes (Unregistered)</a>
                                <a href="#11" class="list-group-item list-group-item-action">7 - B2C (Others)</a>
                                <a href="#12" class="list-group-item list-group-item-action">8A, 8B, 8C, 8D - Nil Rated Supplies</a>
                                <a href="#13" class="list-group-item list-group-item-action">11A(1), 11A(2) - Tax Liability (Advances Received)</a>
                                <a href="#14" class="list-group-item list-group-item-action">Adjustment of Advances - Summary</a>
                                <a href="#15" class="list-group-item list-group-item-action">HSN-wise summary of outward supplies</a>
                                <a href="#16" class="list-group-item list-group-item-action">Documents issued during the tax period</a>
                                <a href="#17" class="list-group-item list-group-item-action">Amended Tax Liability (Advance Received) - Summary</a>
                                <a href="#18" class="list-group-item list-group-item-action">Amendment of Adjustment of Advances - Summary</a>
                                <a href="#19" class="list-group-item list-group-item-action">Amended B2C(Others) Details - Summary</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="form-title" id="1">B2B</h4>
                            <?php include_once('_gstr1/b2b.php'); ?>
                            <h4 class="form-title m-t-60" id="2">B2C Large</h4>
                            <?php include_once('_gstr1/b2c_large.php'); ?>
                            <h4 class="form-title m-t-60" id="3">9B Credit/Debit Note </h4>
                            <?php include_once('_gstr1/9B_Credit_Debit_Note.php'); ?>
                            <h4 class="form-title m-t-60" id="4">9B - Credit / Debit Notes (Unregistered) </h4>
                            <?php include_once('_gstr1/9B_Credit_Debit_Note_Un.php'); ?>
                            <h4 class="form-title m-t-60" id="5">6A - Exports Invoices </h4>
                            <?php include_once('_gstr1/6A_Exports_Invoices.php'); ?>
                            <h4 class="form-title m-t-60" id="6">9 Amended B2B Invoices </h4>
                            <?php include_once('_gstr1/9_Amended_B2B_Invoices.php'); ?>
                            <h4 class="form-title m-t-60" id="7">9A - Amended B2C ( Large ) Invoices </h4>
                            <?php include_once('_gstr1/9A _Amended_B2C_Large_Invoices.php'); ?>
                            <h4 class="form-title m-t-60" id="8">9A - Amended Exports Invoices</h4>
                            <?php include_once('_gstr1/9A_Amended_Exports_Invoices.php'); ?>
                            <h4 class="form-title m-t-60" id="9">9C - Amended Credit/Debit Notes (Registered)</h4>
                            <?php include_once('_gstr1/9C_Amended_Credit_Debit_Notes.php'); ?>
                            <h4 class="form-title m-t-60" id="10">9C - Amended Credit/Debit Notes (Unregistered)</h4>
                            <?php include_once('_gstr1/9C_Amended_Credit_Debit_Notes_Un.php'); ?>
                            <h4 class="form-title m-t-60" id="11">7 - B2C (Others)</h4>
                            <?php include_once('_gstr1/7_B2C_others.php'); ?>
                            <h4 class="form-title m-t-60" id="12">8A, 8B, 8C, 8D - Nil Rated Supplies</h4>
                            <?php include_once('_gstr1/8A_8B_8C_8D_Nil_Rated_Supplies.php'); ?>
                            <h4 class="form-title m-t-60" id="13">11A(1), 11A(2) - Tax Liability (Advances Received)</h4>
                            <?php include_once('_gstr1/11A_Tax_Liability_Advances_Received.php'); ?>
                            <h4 class="form-title m-t-60" id="14">Adjustment of Advances</h4>
                            <?php include_once('_gstr1/adjustment_of_advances.php'); ?>
                            <h4 class="form-title m-t-60" id="15">HSN-wise summary of outward supplies</h4>
                            <?php include_once('_gstr1/HSN_wise_summary_outward_supplies.php'); ?>
                            <h4 class="form-title m-t-60" id="16">Documents issued during the tax period</h4>
                            <?php include_once('_gstr1/Documents_issued_during_the_tax_period.php'); ?>
                            <h4 class="form-title m-t-60" id="17">Amended Tax Liability (Advance Received) - Summary</h4>
                            <?php include_once('_gstr1/Amended_Tax_Liability_Advance_Received_Summary.php'); ?>
                            <h4 class="form-title m-t-60" id="18">Amendment of Adjustment of Advances - Summary</h4>
                            <?php include_once('_gstr1/Amendment_Adjustment_Advances_Summary.php'); ?>
                            <h4 class="form-title m-t-60" id="19">Amended B2C(Others) Details - Summary</h4>
                            <?php include_once('_gstr1/Amended_B2C_Others_Details _Summary.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
