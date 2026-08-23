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
                                <ng-switch on="$last"><span ng-switch-when="true"> B2B</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4>B2C(Large) Invoices- Details</h4>
                </div>
                <div class="col-sm-4 taxp">

                </div>
            </div>

            <div class="tabpane">
                <form id="b2cl_Form">
                    <p class="mand-text">Indicates Mandatory Fields</p>
                    <div class="tbl-format rettbl-format">
                        <div class="row">
                            <div class="col-sm-8">
                                <br>
                                <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty"
                                       id="rate_flag">
                                <label for="rate_flag">Is the supply eligible to be taxed at a differential percentage
                                    (%) of the
                                    existing rate of tax, as notified by the Government?</label>
                            </div>
                            <div class="col-sm-3" data-ng-if="rate_flag=='Y'">
                                <span>Applicable % of Tax Rate</span>
                                <select class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required"
                                        name="rate_prcnt" id="rate_prcnt" data-ng-model="rate_prcnt" required=""
                                        data-ng-disabled="b2bnewview">
                                    <option selected="" value="65">65%</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is IGST </label>
                                <input type="checkbox" name="is_igst" class="isIgst" <?= set_value('is_igst', ((!empty($form_data)) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="pos"><span>POS</span>
                                    <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                                <?= view('sim/cmps/pos.php'); ?>
                            </div>
                            <div class="col-sm-4"
                                 data-ng-class="{'has-error':(b2b_Page.$submitted &amp;&amp; b2b_Page.inv_no.$invalid) || (dupinvmsg),'has-success':b2b_Page.$submitted &amp;&amp; b2b_Page.inv_no.$valid}">
                                <label class="reg m-cir" for="inv_no" data-ng-bind="trans.LBL_INVOICE_NUMBER">Invoice
                                    no.</label>
                                <input type="text" name="invoice_no"
                                       class="form-control formedit ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength"
                                       id="ruid" data-ng-model="b2b[0].inv[0].inum"
                                       data-ng-pattern="/^[0-9A-Za-z][0-9A-Za-z-/]{0,15}$/" maxlength="16" required=""
                                       data-ng-change="dupinvclear()" ng-model-options="{updateOn: 'blur'}"
                                       data-ng-disabled="edit">
                                <!---->
                                <span class="err ng-hide"
                                      data-ng-show="b2b_Page.$submitted &amp;&amp; b2b_Page.inv_no.$error.required"
                                      data-ng-bind="trans.ERR_MANDATORY">This information is required.</span>
                                <!---->
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invdate">Invoice date</label>
                                <div class="datepicker-icon input-group">
                                    <input name="invoice_date"
                                           class="form-control date-picker ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern"
                                           id="invdate" data-datepicker="" placeholder="DD/MM/YYYY" autocomplete="off">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                </div>
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg" for="stype">Supply Type</label>
                                <input class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                       name="supply_type" disabled="">
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invval">Total invoice value (₹)</label>
                                <input name="total_invoice_value"
                                       class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                       id="total_invoice_value" required="">
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="b2cl">
                    <div class="rettbl-format">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <h4 class="no-mar ng-hide">Item details</h4>
                            </div>
                        </div>
                        <div class="row item-details">
                            <?php echo view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => false]); ?>
                        </div>
                    </div>
                    <input type="hidden" name="focus_key" value="invoice_no">
                    <input type="hidden" name="alternate" class="alternate" value="0">

                    <div class="row show-errors" id="show-errors">

                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                            <a href="b2cl" class="btn btn-default">Back</a>
                            <button type="submit" class="btn btn-primary accpt">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
