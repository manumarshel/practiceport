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
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Returns</a></li>
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">GSTR-1/IFF</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true"> EXP</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4>Exports - Add Details</h4>
                </div>
                <div class="col-sm-4 taxp">

                </div>
            </div>

            <div class="tabpane">
                <form id="6a_exports_Form">
                    <p class="mand-text">Indicates Mandatory Fields</p>
                    <div class="tbl-format rettbl-format">
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is IGST </label>
                                <input type="checkbox" name="is_igst" class="isIgst" checked>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invoice_no">Invoice no.</label>
                                <input name="invoice_no"
                                       class="form-control focus-field ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength"
                                       id="ruid" maxlength="16" required="">
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invoice_date">Invoice date</label>
                                <div class="datepicker-icon input-group">
                                    <input name="invoice_date"
                                           class="form-control date-picker ng-pristine ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-touched"
                                           data-datepicker="" placeholder="DD/MM/YYYY" id="invoice_date"
                                           data-max-date="30/09/2021" data-min-date="26/02/2019" required="">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                </div>
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg" for="port_code">Port Code</label>
                                <input name="port_code"
                                       class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength"
                                       id="port_code" maxlength="6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg" for="billing_no">Shipping Bill No./Bill of Export No.</label>
                                <input name="billing_no"
                                       class="form-control number ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-required"
                                       id="billing_no" minlength="3" maxlength="7">
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg" for="shipping_date">Shipping Bill Date/Bill of Export Date</label>
                                <div class="datepicker-icon input-group">
                                    <input name="shipping_date"
                                           class="form-control date-picker ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-required"
                                           data-datepicker="" title="Date" id="shipping_date" data-max-date="02/10/2021">
<!--                                           disabled="disabled">-->
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                </div>
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                            <div class="col-md-4">
                                <label class="reg m-cir" for="total_invoice_value">Total invoice value (₹)</label>
                                <input name="total_invoice_value"
                                       class="form-control inter text-righ ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                       id="total_invoice_value" data-formating="currency" data-fraction="2" required="">
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg" for="supply_type">Supply Type</label>
                                <input name="supply_type"
                                       class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required"
                                       id="supply_type" required="" disabled="">
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="gst_payment">GST Payment</label>
                                <select class="form-control newinv formedit ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required"
                                        name="gst_payment" required="">
                                    <option value="tax" selected="selected">With Payment of Tax</option>
                                    <option value="no_tax">Without Payment of Tax</option>
                                </select>
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="export">
                    <div class="rettbl-format">
                        <div class="row ng-hide">
                            <div class="col-xs-12 col-sm-12">
                                <h4 class="no-mar">Item details</h4>
                            </div>
                        </div>
                        <div class="row item-details">
                            <?php echo view('admin/gstr1/cmps/item-details-igst', ['alternate_title' => false]); ?>
                        </div>
                        <p>*In case of export - without payment of tax , please provide zero (0) in the field "Amount of tax".</p>
                    </div>

                    <input type="hidden" name="focus_key" value="invoice_no">
                    <input type="hidden" name="alternate" class="alternate" value="0">

                    <div class="row show-errors" id="show-errors">

                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                            <a href="export" class="btn btn-default">Back</a>
                            <button type="submit" class="btn btn-primary accpt">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
