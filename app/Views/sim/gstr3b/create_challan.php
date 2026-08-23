<?= $this->extend('sim/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="mypage">
            <div class="row" data-ng-controller="transctrl" data-ng-init="init('services')">
                <div class="col-xs-10">
                    <div data-breadcrumb="" data-path="//www.gst.gov.in/" data-name="Home">
                        <ol class="breadcrumb" data-ng-controller="crumbCtrl">
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Dashboard</a></li>
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Payment</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true"> Create Challan</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="tabpane">
                <form action="">
                    <h4>Reason For Challan</h4>
                    <div class="tbl-format rettbl-format">
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Reason</p>
                                <h5><strong>Any Other Payment</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row item-details">
                        <div class="col-md-12">
                            <h4 style="margin:20px 0;">Details of Deposit</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered item-table-cgst-sgst">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Tax (₹)</td>
                                            <td>Interest (₹)</td>
                                            <td>Penalty (₹)</td>
                                            <td>Fees (₹)</td>
                                            <td>Other (₹)</td>
                                            <td>Total (₹)</td>
                                        </tr>
                                        <tr>
                                            <td>CGST(0005)</td>
                                            <td><input type="text" class="form-control challan-input row1"></td>
                                            <td><input type="text" class="form-control challan-input row1"></td>
                                            <td><input type="text" class="form-control challan-input row1"></td>
                                            <td><input type="text" class="form-control challan-input row1"></td>
                                            <td><input type="text" class="form-control challan-input row1"></td>
                                            <td><input type="text" class="form-control challan-input row1-total" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>IGST(0008)</td>
                                            <td><input type="text" class="form-control challan-input row2"></td>
                                            <td><input type="text" class="form-control challan-input row2"></td>
                                            <td><input type="text" class="form-control challan-input row2"></td>
                                            <td><input type="text" class="form-control challan-input row2"></td>
                                            <td><input type="text" class="form-control challan-input row2"></td>
                                            <td><input type="text" class="form-control challan-input row2-total" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>CESS(0009)</td>
                                            <td><input type="text" class="form-control challan-input row3"></td>
                                            <td><input type="text" class="form-control challan-input row3"></td>
                                            <td><input type="text" class="form-control challan-input row3"></td>
                                            <td><input type="text" class="form-control challan-input row3"></td>
                                            <td><input type="text" class="form-control challan-input row3"></td>
                                            <td><input type="text" class="form-control challan-input row3-total" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>KERALA SGST(0006)</td>
                                            <td><input type="text" class="form-control challan-input row4"></td>
                                            <td><input type="text" class="form-control challan-input row4"></td>
                                            <td><input type="text" class="form-control challan-input row4"></td>
                                            <td><input type="text" class="form-control challan-input row4"></td>
                                            <td><input type="text" class="form-control challan-input row4"></td>
                                            <td><input type="text" class="form-control challan-input row4-total" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total Challan Amount: </td>
                                            <td colspan="5" class="total-challan">₹0</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total Challan Amount (In Words): </td>
                                            <td colspan="5" class="total-challan-words"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4>Payment Modes</h4>

                            <div class="payment-modes" style="display:inline-block;">
                                <div class="single-payment-mode">
                                    <i class="fa fa-credit-card"></i> E-Payment
                                </div>
                                <div class="single-payment-mode">
                                    <i class="fa fa-money"></i> Over The Counter
                                </div>
                                <div class="single-payment-mode">
                                    <i class="fa fa-globe"></i> NEFT/RTGS
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                            <button type="submit" class="btn btn-primary back-payment hide">Back to Payment</button>
                            <button type="submit" class="btn btn-primary create-challan-success" disabled>Generate challan</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
