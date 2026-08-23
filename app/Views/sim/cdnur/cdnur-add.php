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
                    <h4>Credit note/Debit note Unregistered</h4>
                </div>
                <div class="col-sm-4 taxp">

                </div>
            </div>
            <div class="tabpane">
                <p class="mand-text">Indicates Mandatory Fields</p>
                <form>
                <div class="tbl-format rettbl-format">
                    <div class="row">
                        <div class="col-sm-8">
                            <br>
                            <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty" id="eligible_to_taxed">
                            <label for="eligible_to_taxed">Is the supply eligible to be taxed at a differential percentage (%) of the
                                existing rate of tax, as notified by the Government?</label>
                        </div>
                        <div class="col-sm-3" data-ng-if="rate_flag=='Y'">
                            <span>Applicable % of Tax Rate</span>
                            <select class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" name="applicable_tax" id="applicable_tax" data-ng-model="rate_prcnt" required="" data-ng-disabled="b2bnewview">
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
                        <div class="col-sm-4 ">
                            <label for="type" class="reg m-cir">Type</label>
                            <select name="typeop" class="form-control  ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" id="typeop" required="">
<!--                                <option value="" disabled="">Select</option>-->
                                <option value="B2CL">B2CL</option>
                                <option value="EXPWP">Exports with payment</option>
                                <option value="EXPWOP">Exports without payment</option>
                            </select>
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                        <div class="col-sm-4">
                            <label class="reg m-cir" for="dc_note_no">Debit/Credit Note No</label>
                            <input type="text" name="dc_note_no" class="form-control formedit ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" id="ruid" maxlength="16" required="">
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                        <div class="col-sm-4">
                            <label class="reg m-cir" for="dc_note_date">Debit/Credit Note Date</label>
                            <div class="datepicker-icon input-group">
                                <input name="dc_note_date" class="form-control date-picker ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern" id="dc_note_date" data-datepicker="" placeholder="DD/MM/YYYY">
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                            </div>
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="reg m-cir" for="invval">Note Value (₹)</label>
                            <input name="note_value" class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" id="note_value" required="">
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                        <div class="col-sm-4 ">
                            <label for="note_type" class="reg m-cir " data-ng-bind="trans.LBL_NOT_TYP ">Note Type</label>
                            <select name="note_type" class="form-control  ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" id="note_type" required="">
                                <option value="">Select</option>
                                <option value="Credit Note">Credit note</option>
                                <option value="Debit Note">Debit note</option>
                                <!--  <option value="R" data-ng-disabled="refundprevdate">Refund voucher</option> -->
                            </select>
                            <span class="err ng-hide">This information is required.</span>
                        </div>
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
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="reg" for="stype">Supply Type</label>
                            <input class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="supply_type" id="supply_type" disabled="">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="question_id"
                       value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                <input type="hidden" name="type" id="type"
                       value="cdnur">
                <div class="rettbl-format">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <h4 class="no-mar ng-hide item-details">Item details</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item-details">
                            <div>Item Details</div>
                            <!--                            --><?php //include 'item_details.php'; ?>
                            <?php echo view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => false]); ?>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="focus_key" value="dc_note_no">
                <input type="hidden" name="alternate" class="alternate" value="0">

                <div class="row show-errors" id="show-errors">

                </div>
                <div  class="row">
                    <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                        <a href="cdnur" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary accpt">Save</button>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
