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
                    <form id="b2b_amend_form">
                        <p class="mand-text">Indicates Mandatory Fields.</p>
                        <div class="row">
                            <div class="col-sm-8">
                                <br>
                                <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty"
                                       id="eligible_to_taxed">
                                <label for="eligible_to_taxed">Is the supply eligible to be taxed at a differential
                                    percentage
                                    (%) of the
                                    existing rate of tax, as notified by the Government?</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is IGST </label>
                                <input type="checkbox" name="is_igst"
                                       class="isIgst" <?= set_value('is_igst', ((!empty($form_data)) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="pos"><span>POS</span>
                                    <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                                <!--                                --><? //= view('sim/cmps/pos.php'); ?>
                                <select name="pos" class="form-control" id="pos" disabled="">
                                    <option value="" disabled="" selected="selected">Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('pos', ((!empty($invoice_details)) ? (($invoice_details->pos == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invoice_no">Original Invoice No</label>
                                <input type="text" name="invoice_no"
                                       class="form-control"
                                       id="invoice_no" value="<?php echo $invoice_details->invoice_no; ?>" disabled="">
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invoice_date">Original Invoice Date</label>
                                <input type="text" name="invoice_date"
                                       class="form-control"
                                       id="invoice_date" value="<?php echo $invoice_details->invoice_date; ?>"  disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="revised_invoice_no">Revised/Original Invoice No</label>
                                <input type="text" name="revised_invoice_no"
                                       class="form-control"
                                       id="revised_invoice_no" value="" >
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="revised_invoice_date">Revised/Original Invoice Date</label>
                                <input type="text" name="revised_invoice_date"
                                       class="form-control datepicker"
                                       id="revised_invoice_date" value="" >
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="supply_type">Supply Type</label>
                                <input type="text" name="supply_type"
                                       class="form-control"
                                       id="supply_type" disabled="" value="<?php echo $invoice_details->supply_type; ?>" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="total_invoice_value">Total Invoice Value</label>
                                <input type="text" name="total_invoice_value"
                                       class="form-control"
                                       id="total_invoice_value" value="" >
                            </div>
                        </div>
                        <div class="row item-details">
                            <div>Item Details</div>
                            <!--                            --><?php //include 'item_details.php'; ?>
                            <?php echo view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => false]); ?>
                        </div>
                </div>
                <input type="hidden" name="focus_key" value="invoice_no">
                <input type="hidden" name="alternate" class="alternate" value="0">
                <input type="hidden" name="question_id"
                       value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                <input type="hidden" name="type" id="type"
                       value="b2b-amendment">
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
<?= $this->endSection(); ?>
