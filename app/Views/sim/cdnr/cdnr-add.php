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
                                <ng-switch on="$last"><span ng-switch-when="true"> CDNR</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4>Credit/Debit Notes (Registered)- Add Note</h4>
                </div>
                <div class="col-sm-4 taxp">

                </div>
            </div>
            <div class="tabpane">
                <p class="mand-text">Indicates Mandatory Fields</p>
                <form>
                    <div class="tbl-format rettbl-format">
                        <div class="row">
                            <div class="col-sm-4">
                                <br>
                                <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty"
                                       id="deemedexp">
                                <label for="deemedexp">Deemed Exports</label>
                            </div>
                            <div class="col-sm-4">
                                <br>
                                <input type="checkbox"
                                       class="chkbx ng-pristine ng-untouched ng-valid ng-empty ng-valid-required"
                                       id="SEZexpay" disabled="disabled">
                                <label for="SEZexpay" data-ng-bind="trans.LBL_SEZ_PAY">SEZ Supplies with payment</label>
                            </div>
                            <div class="col-sm-4">
                                <br>
                                <input type="checkbox"
                                       class="chkbx ng-pristine ng-untouched ng-valid ng-empty ng-valid-required"
                                       id="SEZexwpay" disabled="disabled">
                                <label for="SEZexwpay" data-ng-bind="trans.LBL_SEZ_WPAY">SEZ Supplies without
                                    payment</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <br>
                                <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty"
                                       id="rev_charge">
                                <label for="rev_charge">Supply attract reverse charge </label>
                            </div>
                            <div class="col-sm-4">
                                <br>
                                <label for="">Is IGST </label>
                                <input type="checkbox" name="is_igst" class="isIgst" <?= set_value('is_igst', ((!empty($form_data)) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <br>
                                <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty"
                                       id="is_eligible" name="is_eligible">
                                <label for="rate_flag">Is the supply eligible to be taxed at a differential percentage
                                    (%) of the
                                    existing rate of tax, as notified by the Government?</label>
                            </div>
                            <!--                        <div class="col-sm-3" data-ng-if="rate_flag=='Y'">-->
                            <!--                            <span>Applicable % of Tax Rate</span>-->
                            <!--                            <select class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" name="rate_prcnt" id="rate_prcnt" data-ng-model="rate_prcnt" required="" data-ng-disabled="b2bnewview">-->
                            <!--                                <option selected="" value="65">65%</option>-->
                            <!--                            </select>-->
                            <!--                        </div>-->
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is IGST </label>
                                <input type="checkbox" name="is_igst" class="isIgst" <?= set_value('is_igst', ((!empty($form_data)) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="ruid">Receiver GSTIN/UIN</label>
                                <input name="receiver_gstin" id="ruid"
                                       class="form-control formedit ng-pristine ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-touched"
                                       autofocus="" required="" data-ng-disabled="b2bnewview || edit">
                                <!---->
                                <span class="err ng-hide"
                                      data-ng-show="b2b_Page.$submitted &amp;&amp; b2b_Page.ruid.$error.required"
                                      data-ng-bind="trans.ERR_MANDATORY">This information is required.</span>
                                <span class="err ng-hide" data-ng-show="b2b_Page.ruid.$valid &amp;&amp; invalidctin"
                                      data-ng-bind="trans.ERR_REG_CTIN">Do enter a registered GSTIN/UIN.</span>
                                <span class="err ng-hide" data-ng-show="same_ctin" data-ng-bind="trans.ERR_SAME_CTIN">Recipient and supplier cannot be the same.</span>
                            </div>
                            <div class="col-sm-4"
                                 data-ng-class="{'has-error':b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$invalid,'has-success':b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$valid}">
                                <label class="reg m-cir" for="receiver__name" data-ng-bind="trans.LBL_RECEIVER_NAME">Receiver
                                    Name</label>
                                <input type="text" name="receiver__name"
                                       class="form-control formedit ng-pristine ng-untouched ng-valid ng-empty"
                                       id="u_name" data-ng-model="cname" disabled="">
                                <!---->
                                <span class="err ng-hide"
                                      data-ng-show="b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$error.required"
                                      data-ng-bind="trans.ERR_MANDATORY">This information is required.</span>
                            </div>
                            <div class="col-sm-4"
                                 data-ng-class="{'has-error':(b2b_Page.$submitted &amp;&amp; b2b_Page.inv_no.$invalid) || (dupinvmsg),'has-success':b2b_Page.$submitted &amp;&amp; b2b_Page.inv_no.$valid}">
                                <label class="reg m-cir" for="inv_no" data-ng-bind="trans.LBL_INVOICE_NUMBER">Debit/Credit
                                    Note No.</label>
                                <input type="text" name="dc_note_no"
                                       class="form-control formedit ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength"
                                       id="dc_note_no" data-ng-model="b2b[0].inv[0].inum"
                                       data-ng-pattern="/^[0-9A-Za-z][0-9A-Za-z-/]{0,15}$/" maxlength="16" required=""
                                       data-ng-change="dupinvclear()" ng-model-options="{updateOn: 'blur'}"
                                       data-ng-disabled="edit">
                                <!---->
                                <span class="err ng-hide"
                                      data-ng-show="b2b_Page.$submitted &amp;&amp; b2b_Page.inv_no.$error.required"
                                      data-ng-bind="trans.ERR_MANDATORY">This information is required.</span>
                                <!---->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invdate">Debit/Credit Note Date</label>
                                <div class="datepicker-icon input-group">
                                    <input name="dc_note_date"
                                           class="form-control date-picker ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern"
                                           id="dc_note_date" data-datepicker="" placeholder="DD/MM/YYYY">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                </div>
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="notetype "><span>Note Type</span>
                                    <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                                <select name="note_type" class="form-control ng-pristine ng-valid ng-empty ng-touched"
                                        id="note_type">
                                    <option value="Credit">Credit</option>
                                    <option value="Debit">Debit</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invval">Note Value (₹)</label>
                                <input name="note_value"
                                       class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                       id="note_value" required="">
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="pos"><span>POS</span>
                                    <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                                <select name="pos" class="form-control" id="pos">
                                    <option value="" disabled="" selected="selected">Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg" for="stype">Supply Type</label>
                                <input class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                       name="supply_type" id="supply_type" disabled="">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="cdnr">

                    <div class="row">
                        <div class="item-details">
                            <!--                            --><?php //include 'item_details.php'; ?>
                            <?php echo view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => false]); ?>
                        </div>
                    </div>

                    <input type="hidden" name="focus_key" value="dc_note_no">
                    <input type="hidden" name="alternate" class="alternate" value="0">

                    <div class="row show-errors" id="show-errors">

                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                            <a href="cdnr" class="btn btn-default">Back</a>
                            <button type="submit" class="btn btn-primary accpt">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
