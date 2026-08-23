<?= $this->extend('sim/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="mypage">
            <!-- breadcrumbs -->
            <div class="row" data-ng-controller="transctrl" data-ng-init="init('services')">
                <div class="col-xs-10">
                    <div data-breadcrumb="" data-path="//www.gst.gov.in/" data-name="Home">
                        <ol class="breadcrumb" data-ng-controller="crumbCtrl">
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Dashboard</a></li>
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Returns</a></li>
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">GSTR 3B</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true"> Interest and Late Fee</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 taxp">
                    <h4>5.1 Interest & late fee payable</h4>
                </div>
                <div class="col-sm-4 taxp">
                    <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh"  style="
                            margin-left: 5px;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-primary btn-sm pull-right">
                        <span>Help</span>&nbsp;
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-sm-12">
                </div>
            </div>
            <div class="tabpane">
                <div class="alert alert-msg alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        <i class="fa fa-times"></i>
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <span>  Declare interest payable on tax liabilities on supplies attracting reverse charge as well as other than reverse charge
                </span>
                </div>
                <div class="alert alert-msg alert-danger alert-dismissible mar-t-5 mar-b-5">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        <i class="fa fa-times"></i>
                    </button>
                    <i class="fa fa-info-circle"></i> Late fee for the month includes late fee charged due to delay in filing of previous month's GSTR-3B. The computation is based on the formula: [Date of Filing – Due date of Filing] * ₹25/day (in case of any liability) or ₹10/day (in case of nil liability)] per Act (CGST/SGST).
                </div>
                <div class="row">
                    <div class="inner">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <input type="checkbox" class="chkbx ng-dirty ng-valid-parse ng-touched ng-not-empty ng-valid ng-valid-required" id="intlatefee" name="intlatefee" required="">
                            <label for="intlatefee"><span>Please select the check box if you wish to declare any Interest liabilities. Please note Interest amounts declared here under respective heads need to be paid in cash in addition to tax liabilities for the month. GSTR 3B can be filed only after complete payment of all liabilities.</span></label>
                            <br><br>
                        </div>
                    </div>
                </div>
                <form class="gstr3b">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="rettbl-format">
                            <div class="table-responsive">
                                <table class="table tbl inv exp table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center" >Description</th>
                                        <th class="text-center">Integrated Tax (₹)</th>
                                        <th class="text-center">Central Tax (₹)</th>
                                        <th class="text-center">State/UT Tax (₹)</th>
                                        <th class="text-center" >CESS (₹)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Interest</th>
                                        <td>
                                            <input id="invval" name="interest_integrated" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" data-ng-model="intr_ltfee.intr_details.iamt" >
                                        </td>
                                        <td>
                                            <input id="invval" name="interest_central" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" data-ng-model="intr_ltfee.intr_details.camt">
                                        </td>
                                        <td>
                                            <input id="invval" name="interest_state" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" data-ng-model="intr_ltfee.intr_details.samt" >
                                        </td>
                                        <td>
                                            <input id="invval" name="interest_cess" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" data-ng-model="intr_ltfee.intr_details.csamt">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th data-ng-if="!lateHyperFlag">Late Fees</th>
                                        <td class="gstr3b-blank"></td>
                                        <td>
                                            <input id="invval" name="late_fee_central" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" data-ng-model="intr_ltfee.ltfee_details.camt"  >
                                        </td>
                                        <td>
                                            <input id="invval" name="late_fee_state" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" data-ng-model="intr_ltfee.ltfee_details.samt" >
                                        </td>
                                        <td class="gstr3b-blank"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar">
                    <button type="submit" class="btn btn-primary pull-right">CONFIRM</button>
                    <button type="button" class="btn btn-primary pull-right">CANCEL</button>
                </div>
                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="interestLateFee">
                </form>

                <div class="row show-errors" id="show-errors">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
