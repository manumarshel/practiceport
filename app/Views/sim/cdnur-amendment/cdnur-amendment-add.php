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
                    <h4>B2B - Add Invoice</h4>
                </div>
                <div class="col-sm-4 taxp">

                </div>
            </div>
            <div class="tabpane">
                <form id="b2b_Form">
                    <p class="mand-text">Indicates Mandatory Fields.</p>
                    <div class="tbl-format rettbl-format">
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is IGST </label>
                                <input type="checkbox" name="is_igst" class="isIgst" <?= set_value('is_igst', ((!empty($form_data)) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="fin" class="reg m-cir">Financial Year</label>
                                <select name="financial_year"
                                        class="form-control fin_year ng-pristine ng-not-empty ng-valid ng-valid-required ng-touched"
                                        required="" readonly="">
                                    <option label="2022-23" value="2022-23" <?php if ($invoice_details->financial_year == '2022-23') echo 'selected="selected"'; ?>>2022-23</option>
                                    <option label="2021-22" value="2021-22" <?php if ($invoice_details->financial_year == '2021-22') echo 'selected="selected"'; ?>>2021-22</option>
                                    <option label="2020-21" value="2020-21" <?php if ($invoice_details->financial_year == '2020-21') echo 'selected="selected"'; ?>>2020-21</option>
                                </select>
                            </div>
                            <div class="col-sm-4"
                                 data-ng-class="{'has-error':b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$invalid,'has-success':b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$valid}">
                                <label class="reg m-cir" for="u_name" data-ng-bind="trans.LBL_RECEIVER_NAME">Original Debit/Credit Note No.</label>
                                <input type="text" name="original_invoice_number"
                                       class="form-control formedit ng-pristine ng-untouched ng-valid ng-empty"
                                       id="original_invoice_number" readonly="" data-ng-model="cname" value="<?php echo $invoice_details->original_invoice_number; ?>">
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invdate">Original Debit/Credit Note Date</label>
                                <div class="datepicker-icon input-group">
                                    <input name="dc_note_date"
                                           class="form-control date-picker ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern"
                                           id="invdate" data-datepicker="" placeholder="DD/MM/YYYY" autocomplete="off">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                </div>
                                <span class="err ng-hide">This information is required.</span>
                            </div>
<!--                            <div class="col-sm-4"-->
<!--                                 data-ng-class="{'has-error':b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$invalid,'has-success':b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$valid}">-->
<!--                                <label class="reg m-cir" for="u_name" data-ng-bind="trans.LBL_RECEIVER_NAME">Receiver-->
<!--                                    Name</label>-->
<!--                                <input type="text" name="invoice_number"-->
<!--                                       class="form-control formedit ng-pristine ng-untouched ng-valid ng-empty"-->
<!--                                       id="invoice_number" data-ng-model="cname">-->
<!--                            </div>-->
                        </div>
                        <div class="row">
                            <div class="col-sm-4"
                                 data-ng-class="{'has-error':b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$invalid,'has-success':b2b_Page.$submitted &amp;&amp; b2b_Page.u_name.$valid}">
                                <label class="reg m-cir" for="u_name" data-ng-bind="trans.LBL_RECEIVER_NAME">Revised Debit/Credit Note No.</label>
                                <input type="text" name="revised_invoice_number"
                                       class="form-control formedit ng-pristine ng-untouched ng-valid ng-empty"
                                       id="revised_invoice_number" data-ng-model="cname">
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invdate">Revised Debit/Credit Note Date</label>
                                <div class="datepicker-icon input-group">
                                    <input name="revised_invoice_date"
                                           class="form-control date-picker ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern"
                                           id="revised_invoice_date" data-datepicker="" placeholder="DD/MM/YYYY" autocomplete="off">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                </div>
                                <span class="err ng-hide">This information is required.</span>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="pos"><span>POS</span>
                                    <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                                <!--                                --><?//= view('sim/cmps/pos.php'); ?>
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
                                <label class="reg m-cir" for="notetype "><span>Note Type</span>
                                    <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                                <select name="note_type" class="form-control ng-pristine ng-valid ng-empty ng-touched"
                                        id="note_type">
                                    <option value="Credit Note">Credit</option>
                                    <option value="Debit Note">Debit</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invval">Total invoice value (₹)</label>
                                <input name="note_value"
                                       class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                       id="note_value" required="">
                                <span class="err ng-hide">This information is required.</span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg" for="stype">Supply Type</label>
                                <input type="text" name="supply_type"
                                       class="form-control"
                                       id="supply_type" disabled="" value="<?php echo $invoice_details->supply_type; ?>" >
                            </div>
                        </div>
                        <div class="row item-details">
                            <div>Item Details</div>
                            <!--                            --><?php //include 'item_details.php'; ?>
                            <?php echo view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => false]); ?>
                        </div>
                    </div>
                    <input type="hidden" name="focus_key" value="original_invoice_number">
                    <input type="hidden" name="alternate" class="alternate" value="0">
                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="cdnur-amendment">
                    <div class="row show-errors" id="show-errors">

                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                            <a href="b2b" class="btn btn-default">Back</a>
                            <button type="submit" class="btn btn-primary accpt">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
