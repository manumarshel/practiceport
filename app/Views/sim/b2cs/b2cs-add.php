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
                                <ng-switch on="$last"><span ng-switch-when="true"> B2CS</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4>B2CS- Add Details</h4>
                </div>
                <div class="col-sm-4 taxp">

                </div>
            </div>

            <div class="tabpane">
                <p class="mand-text">Indicates Mandatory Fields</p>
                <form>
                    <div class="row">
                        <div class="col form-group">
                            <label for="">Is IGST </label>
                            <input type="checkbox" name="is_igst" class="isIgst2" <?= set_value('is_igst', ((!empty($form_data)) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                        </div>
                    </div>
                <div class="tbl-format rettbl-format">
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
                            <label class="reg m-cir" for="invval">Taxable value (₹)</label>
                            <input name="total_invoice_value" class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" id="ruid" required="">
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                        <div class="col-sm-4">
                            <label class="reg" for="stype">Supply Type</label>
                            <input class="form-control ng-pristine ng-untouched ng-valid ng-empty" id="supply_type" name="supply_type" disabled="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label for="">Return Filing Period</label>
                            <select name="return_filing_period" id="" class="form-control">
                                <?php
                                foreach ($quarter_list as $k => $value) {
                                    echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('return_filing_period', ((!empty($form_data)) ? (($form_data['return_filing_period'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label for="">Type</label>
                            <select name="data_type" id="data_type" class="form-control">
                                <option label="OE" value="0">OE</option>
                                <option label="E" value="1">E</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label class="reg m-cir" for="rate">Rate</label>
                            <select class="form-control newinv formedit ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" id="rate" name="rate" title="category" required="" >
                                <option label="Select" value="" disabled="" selected="selected"></option>
                                <option label="0" value="0">0</option>
                                <option label="0.1" value="0.1">0.1</option>
                                <option label="0.25" value="0.25">0.25</option>
                                <option label="1" value="1">1</option>
                                <option label="1.5" value="1.5">1.5</option>
                                <option label="3" value="3">3</option>
                                <option label="5" value="5">5</option>
                                <option label="7.5" value="7.5">7.5</option>
                                <option label="12" value="12">12</option>
                                <option label="18" value="18">18</option>
                                <option label="28" value="28">28</option>
                            </select>
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group display-igst <?php if ( isset($form_data['is_igst']) && $form_data['is_igst'] == 1 ) echo ''; else echo 'hide'; ?>">
                            <label for="">IGST</label>
                            <input name="igst"
                                   value="<?= set_value('igst', ((!empty($form_data['igst'])) ? $form_data['igst'] : '')); ?>"
                                   type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-4 form-group display-cgst-sgst <?php if ( isset($form_data['is_igst']) && $form_data['is_igst'] == 1 ) echo 'hide'; else echo ''; ?>">
                            <label for="">CGST</label>
                            <input name="cgst"
                                   value="<?= set_value('cgst', ((!empty($form_data['cgst'])) ? $form_data['cgst'] : '')); ?>"
                                   type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-4 form-group display-cgst-sgst <?php if ( isset($form_data['is_igst']) && $form_data['is_igst'] == 1 ) echo 'hide'; else echo ''; ?>">
                            <label for="">SGST</label>
                            <input name="sgst"
                                   value="<?= set_value('sgst', ((!empty($form_data['sgst'])) ? $form_data['sgst'] : '')); ?>"
                                   type="text" class="form-control" placeholder="">
                        </div>
                        <!--                            <div class="col-md-4 display-cgst-sgst">-->
                        <!---->
                        <!---->
                        <!--                            </div>-->
                        <div class="col-md-4 form-group">
                            <label for="">CESS</label>
                            <input name="cess"
                                   value="<?= set_value('cess', ((!empty($form_data['cess'])) ? $form_data['cess'] : '')); ?>"
                                   type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="item-details">

                    </div>
                </div>
                <input type="hidden" name="question_id"
                       value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                <input type="hidden" name="type" id="type"
                       value="b2cs">
<!--                <input type="hidden" name="focus_key" value="total_invoice_value">-->
                <input type="hidden" name="alternate" class="alternate" value="0">

                <div class="row show-errors" id="show-errors">

                </div>
                <div  class="row">
                    <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                        <a href="b2cs" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary accpt">Save</button>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
