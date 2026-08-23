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
                                <ng-switch on="$last"><span ng-switch-when="true"> Eligible ITC</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 taxp">
                    <h4>4. Eligible ITC</h4>
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
                    <span>  Tables 4(A)(1), (3), (4), (5) and 4(B)(2) are auto-drafted based on the values in GSTR-2B.
                </span>
                </div>
                <form class="gstr3b">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="rettbl-format">
                            <div class="table-responsive">
                                <table class="table tbl inv exp table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center" >Details</th>
                                        <th class="text-center" >Integrated Tax (₹)</th>
                                        <th class="text-center" >Central Tax (₹)</th>
                                        <th class="text-center" >State/UT Tax (₹)</th>
                                        <th class="text-center" >CESS (₹)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="">(A) ITC Available (whether in full or part)</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(1) Import of goods</span>
                                        </td>
                                        <td>
                                            <input id="" name="available_import_goods_integrated_tax" class="total form-control sectiona sectionait formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td>
                                            <input id="" name="available_import_goods_cess" class="total form-control sectiona sectionacss formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(2) Import of services</span>
                                        </td>
                                        <td>
                                            <input id="" name="available_import_services_integrated_tax" class="total form-control sectiona sectionait formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td class="gstr3b-blank"></td>
                                        <td class="gstr3b-blank"></td>
                                        <td>
                                            <input id="" name="available_import_services_cess" class="total form-control formedit sectiona sectionacss newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(3) Inward supplies liable to reverse charge (other than 1 &amp; 2 above)</span>
                                        </td>
                                        <td>
                                            <input id="" name="available_reverse_integrated_tax" class="total form-control formedit sectiona sectionait newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_reverse_central_tax" class="total form-control formedit sectiona sectionact newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_reverse_state_tax" class="total form-control formedit sectiona sectionast newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_reverse_cess" class="total form-control formedit sectiona sectionacss newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(4) Inward supplies from ISD</span>
                                        </td>
                                        <td>
                                            <input id="" name="available_isd_integrated_tax" class="total form-control sectiona sectionait formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_isd_central_tax" class="total form-control sectiona sectionact formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_isd_state_tax" class="total form-control sectiona sectionast formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_isd_cess" class="total form-control formedit sectiona sectionacss newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(5) All other ITC</span>
                                        </td>
                                        <td>
                                            <input id="" name="available_itc_integrated_tax" class="total form-control sectiona sectionait formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_itc_central_tax" class="total form-control sectiona sectionact formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_itc_state_tax" class="total form-control sectiona sectionast formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="available_itc_cess" class="total form-control formedit sectiona sectionacss formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">(B) ITC Reversed</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(1) As per Rule 42 &amp; 43 of CGST/SGST rules</span>
                                        </td>
                                        <td>
                                            <input id="" name="itc_rules_integrated_tax" class="total form-control sectionb sectionbit formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_rules_central_tax" class="total form-control sectionb sectionbct formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_rules_statet_tax" class="total sectionb sectionbst form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_rules_cess" class="total form-control sectionb sectionbcss formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(2) Others</span>
                                        </td>
                                        <td>
                                            <input id="" name="itc_others_integrated_tax" class="total form-control sectionb sectionbit formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_others_central_tax" class="total form-control sectionb sectionbct formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_others_state_tax" class="total form-control sectionb sectionbst formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_others_cess" class="total form-control sectionb sectionbcss formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">(C) Net ITC Available (A) - (B)</th>
                                        <td>
                                            <input id="" name="itc_available_ab_integrated_tax" class="total form-control sectioncit formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_available_ab_central_tax" class="total sectioncct form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_available_ab_state_tax" class="total form-control sectioncst formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="itc_available_ab_cess" class="total form-control sectionccs formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">(D) Ineligible ITC</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(1) As per section 17(5)</span>
                                        </td>
                                        <td>
                                            <input id="" name="IneligIble_itc_sec17_integrated_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="IneligIble_itc_sec17_central_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="IneligIble_itc_sec17_state_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="IneligIble_itc_sec17_cess" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>(2) Others</span>
                                        </td>
                                        <td>
                                            <input id="" name="IneligIble_itc_others_integrated_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="IneligIble_itc_others_central_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="IneligIble_itc_others_state_tax" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
                                        <td>
                                            <input id="" name="IneligIble_itc_others_cess" class="total form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty" title="Your amount: ₹0.00   System computed: ₹0.00">
                                        </td>
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
                           value="eligible-ITC">
                </form>
                <div class="row show-errors" id="show-errors">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
