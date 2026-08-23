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
                                <ng-switch on="$last"><span ng-switch-when="true"> Outward and Reverse Charge Inward</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 taxp">
                    <h4>3.1 Details of Outward Supplies and inward supplies liable to reverse charge</h4>

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
                    <span> Table 3.1(a), (b), (c) and (e) are auto-drafted based on values provided in GSTR-1/IFF. Whereas Table 3.1(d) is auto-drafted based on GSTR-2B.
                </span>
                </div>
                <form class="gstr3b">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <p class="uline alert-danger"><i class="fa fa-warning"></i>
                                <span>The information entered by you in cells highlighted in red is in variance with the auto-populated data. The liability has been computed based on the information declared by you in your FORM GSTR-1/IFF. </span>
                            </p>
                        </div>
                        <div class="rettbl-format">
                            <div class="table-responsive">
                                <table class="table tbl inv exp table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Nature of Supplies</th>
                                        <th class="text-center">Total Taxable value (₹)</th>
                                        <th class="text-center">Integrated Tax (₹)</th>
                                        <th class="text-center">Central Tax (₹)</th>
                                        <th class="text-center">State/UT Tax (₹)</th>
                                        <th class="text-center">CESS (₹)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="">(a) Outward taxable supplies (other than zero rated, nil rated and exempted)</th>
                                        <td>
                                            <input id="" name="outward_tax_non_zero_taxable_value" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="outward_tax_non_zero_integrated_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="outward_tax_non_zero_central_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="outward_tax_non_zero_state_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="outward_tax_non_zero_cess" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">(b) Outward taxable supplies (zero rated )</th>
                                        <td>
                                            <input id="" name="outward_tax_zero_taxable_value" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="outward_tax_zero_integrated_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td>
                                            <input id="" name="outward_tax_zero_cess" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">(c) Other outward supplies (Nil rated, exempted)</th>
                                        <td>
                                            <input id="" name="other_outward_nill_taxable_value" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                    </tr>
                                    <tr>
                                        <th class="">(d) Inward supplies (liable to reverse charge)</th>
                                        <td>
                                            <input id="" name="inward_supplies_reverse_charges_taxable_value" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="inward_supplies_reverse_charges_intetrated_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="inward_supplies_reverse_charges_central_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="inward_supplies_reverse_charges_state_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="inward_supplies_reverse_charges_cess" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">(e) Non-GST outward supplies </th>
                                        <td>
                                            <input id="" name="non_gst_outward_taxable_value" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="iosup">
                <div class="btn-toolbar">
                    <button type="submit" class="btn btn-primary pull-right">CONFIRM</button>
                    <button type="button" class="btn btn-primary pull-right">CANCEL</button>
                </div>

                </form>
                <div class="row show-errors" id="show-errors">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
