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
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">GSTR 3BQ</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true"> Payment of tax</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 taxp">
                    <h4>6.1 Payment of tax</h4>
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
                    <span>   No pending Liabilities to pay. </span>
                </div>
                <div class="alert alert-msg alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        <i class="fa fa-times"></i>
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <span>   The cash available as on date and ITC available (considering ITC of current tax period) are shown in this table.</span>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="rettbl-format">
                            <div class="table-responsive">
                                <table class="table tbl inv exp table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2">Description</th>
                                        <th class="text-center" colspan="5">Cash Ledger Balance</th>
                                        <th class="text-center" colspan="5">Credit Ledger Balance(including current month's credit)</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Integrated Tax (₹)</th>
                                        <th class="text-center">Central Tax (₹)</th>
                                        <th class="text-center">State/UT Tax (₹)</th>
                                        <th class="text-center">CESS (₹)</th>
                                        <th class="text-center">Total (₹)</th>
                                        <th class="text-center">Integrated Tax (₹)</th>
                                        <th class="text-center">Central Tax (₹)</th>
                                        <th class="text-center">State/UT Tax (₹)</th>
                                        <th class="text-center">CESS (₹)</th>
                                        <th class="text-center">Total (₹)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="text-center">Tax</th>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Interest</th>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Late Fees</th>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" readonly="">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="text-left" colspan="1">
                                            <input class="form-control newinv currency ng-pristine ng-untouched ng-valid ng-not-empty"  readonly="">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                        <td class="gstr3b-blank">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="alert alert-msg alert-info alert-dismissible mar-t-5 mar-b-5">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    <i class="fa fa-times"></i>
                                </button>
                                <i class="fa fa-info-circle"></i> System has auto-populated “Tax to be paid through ITC” fields with optimum utilization amounts based on provisions of the law relating to credit utilization. However, you may edit the ITC utilization. As you change ITC utilization, the cash to be paid will also get changed. <br><br> If available cash balance in Electronic cash ledger is not sufficient to offset the liabilities, additional cash required for paying liability is being reflected in the last column of the Table (Addition cash required). You may create challan for that amount directly by clicking on the “Create Challan” button
                            </div>
                            <div class="alert alert-msg alert-info alert-dismissible mar-t-5 mar-b-5">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    <i class="fa fa-times"></i>
                                </button>
                                <i class="fa fa-info-circle"></i> The ITC and Cash utilization information entered will only be available for 2 days. After expiry of 2 days, the suggested utilization shall be reverted to original system suggested utilization.
                            </div>
                            <div class="table-responsive">
                                <table class="table tbl inv exp table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2" >Description</th>
                                        <th class="text-center" rowspan="2" style="min-width:120px;">Other than reverse charge Tax payable (₹)</th>
                                        <th class="text-center" colspan="4" >Paid through ITC</th>
                                        <th class="text-center" rowspan="2" style="min-width:160px;" >Other than reverse charge Tax to be paid in Cash(₹)</th>
                                        <th class="text-center" rowspan="2" >Reverse charge Tax payable (₹)</th>
                                        <th class="text-center" rowspan="2" >Reverse charge Tax to be paid in Cash(₹)</th>
                                        <!--<th class="text-center" rowspan="2"></th>-->
                                        <th class="text-center" rowspan="2">Interest Payable (₹)</th>
                                        <th class="text-center" rowspan="2">Interest to be paid in cash (₹)</th>
                                        <th class="text-center" rowspan="2">Late Fee Payable (₹)</th>
                                        <th class="text-center" rowspan="2" style="min-width:120px;">Late Fee to be paid in cash (₹)</th>
                                        <th class="text-center" rowspan="2">Utilizable Cash balance(₹)</th>
                                        <th class="text-center" rowspan="2">Additional Cash required(₹)</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="min-width:120px;">Integrated Tax (₹)</th>
                                        <th class="text-center" style="min-width:120px;">Central Tax (₹)</th>
                                        <th class="text-center" style="min-width:120px;">State/UT Tax (₹)</th>
                                        <th class="text-center" style="min-width:120px;"> CESS (₹)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">4</td>
                                        <td class="text-center">5</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">7(2 - 3 - 4 - 5 - 6)</td>
                                        <td class="text-center">8</td>
                                        <td class="text-center">9</td>
                                        <td class="text-center">10</td>
                                        <td class="text-center">11</td>
                                        <td class="text-center">12</td>
                                        <td class="text-center">13</td>
                                        <td class="text-center">14</td>
                                        <td class="text-center">15</td>
                                    </tr>
                                    <tr>
                                        <td>Integrated Tax</td>
                                        <!-- Tax Payable -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Paid through ITC -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="gstr3b-blank"></td>
                                        <!-- Tax to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Reverse charge payable & tax to be paid in cash  -->
                                        <!-- TODO -->
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Interest payable & to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Late fee payable & to be paid in cash -->
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <!-- CashBal and Additional Cash Required -->
                                        <td class="text-left newinv" colspan="1"><input type="text" class="form-control"></td>
                                        <td class="text-left newinv" colspan="1"><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Central Tax</td>
                                        <!-- Tax Payable -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Paid through ITC -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <!-- Tax to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Reverse charge payable & tax to be paid in cash  -->
                                        <!-- TODO -->
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Interest payable & to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Late fee payable & to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- CashBal and Additional Cash Required -->
                                        <td class="text-left" colspan="1"><input type="text" class="form-control"></td>
                                        <td class="text-left" colspan="1"><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>State/UT Tax</td>
                                        <!-- Tax Payable -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Paid through ITC -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="gstr3b-blank"></td>
                                        <!-- Tax to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Reverse charge payable & tax to be paid in cash  -->
                                        <!-- TODO -->
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Interest payable & to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Late fee payable & to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- CashBal and Additional Cash Required -->
                                        <td class="text-left newinv" colspan="1"><input type="text" class="form-control"></td>
                                        <td class="text-left newinv" colspan="1"><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>CESS</td>
                                        <!-- Tax Payable -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Paid through ITC -->
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Tax to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Reverse charge payable & tax to be paid in cash  -->
                                        <!-- TODO -->
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Interest payable & to be paid in cash -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- check -->
                                        <td class="currency newinv"><input type="text" class="form-control"></td>
                                        <!-- Late fee payable & to be paid in cash -->
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <!-- CashBal and Additional Cash Required -->
                                        <td class="text-left newinv" colspan="1"><input type="text" class="form-control"></td>
                                        <td class="text-left newinv" colspan="1"><input type="text" class="form-control"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar">
<!--                    <button type="button" id="payQtr" class="btn btn-primary pull-right">Payment made in quarter</button>-->
                    <button type="button" id="proccedToFile3b" class="btn btn-primary pull-right" disabled>Proceed to file</button>
                    <button type="button" id="OffSetLiab" class="btn btn-primary pull-right">Make payment/Post credit to ledger</button>
                    <button type="button" id="createChallan" class="btn btn-primary pull-right">Create Challan</button>
                    <button type="button" class="btn btn-primary pull-right">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
