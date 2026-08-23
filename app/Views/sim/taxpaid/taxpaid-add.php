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
                                <ng-switch on="$last"><span ng-switch-when="true"> Adjustment of Advances</span>
                                </ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4>Tax already paid on invoices issued in the current period - Add Details</h4>
                </div>
                <div class="col-sm-4 taxp">

                </div>
            </div>
            <form>
            <div class="row">
                <div class="col form-group">
                    <label for="">Is IGST </label>
                    <input type="checkbox" name="is_igst" class="isIgst" <?= set_value('is_igst', ((!empty($form_data)) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                </div>
            </div>
            <div class="tabpane">
                <span>Note: Declare the amount of advance for which tax has already been paid receipt of consideration in an earlier period and invoices issued in the current period for the supplies</span>
                <p class="mand-text">Indicates Mandatory Fields</p>

                    <div class="tbl-format rettbl-format">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="pos"><span>POS</span>
                                    <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                                <select name="pos" class="form-control" id="ruid">
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
                        <div class="row">
                            <div class="col-sm-8">
                                <br>
                                <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty"
                                       id="eligible_to_taxed" name="eligible_to_taxed">
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
                    </div>
                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="taxpaid">
                    <div class="rettbl-format">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <h4 class="no-mar ng-hide">Item details</h4>
                            </div>
                        </div>
                        <div class="row item-details">
                            <?php echo view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => true]); ?>
                        </div>
                    </div>
                    <input type="hidden" name="focus_key" value="pos">
                    <input type="hidden" name="alternate" class="alternate" value="1">

                    <div class="row show-errors" id="show-errors">

                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                            <button type="button" class="btn btn-default">Back</button>
                            <button type="submit" class="btn btn-primary accpt">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
