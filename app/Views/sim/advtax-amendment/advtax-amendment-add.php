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
                            <select name="pos" class="form-control" id="pos" readonly="">
                                <option value="" disabled="" selected="selected">Select</option>
                                <?php
                                foreach ($pos_list as $k => $value) {
                                    echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('pos', ((!empty($invoice_details)) ? (($invoice_details->pos == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label class="reg m-cir" for="supply_type">Supply Type</label>
                            <input type="text" name="supply_type"
                                   class="form-control"
                                   id="supply_type" disabled="" value="<?php echo $invoice_details->supply_type; ?>" >
                        </div>
                        <div class="col-sm-4">
                            <label for="fin" class="reg m-cir">Financial Year</label>
                            <select name="financial_year"
                                    class="form-control fin_year ng-pristine ng-not-empty ng-valid ng-valid-required ng-touched"
                                    required="">
                                <option label="2022-23" value="2022-23" <?php if ($invoice_details->financial_year == '2022-23') echo 'selected="selected"'; ?>>2022-23</option>
                                <option label="2021-22" value="2021-22" <?php if ($invoice_details->financial_year == '2021-22') echo 'selected="selected"'; ?>>2021-22</option>
                                <option label="2020-21" value="2020-21" <?php if ($invoice_details->financial_year == '2020-21') echo 'selected="selected"'; ?>>2020-21</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="return_filing_period" class="reg m-cir">Return Filing Period</label>
                            <select name="return_filing_period" id="" class="form-control return_filing_period">
                                <option label="January" value="January" <?php if ($invoice_details->return_filing_period == 'January') echo 'selected="selected"'; ?>>January</option>
                                <option label="February" value="February" <?php if ($invoice_details->return_filing_period == 'February') echo 'selected="selected"'; ?>>February</option>
                                <option label="March" value="March" <?php if ($invoice_details->return_filing_period == 'March') echo 'selected="selected"'; ?>>March</option>
                                <option label="April" value="April" <?php if ($invoice_details->return_filing_period == 'April') echo 'selected="selected"'; ?>>April</option>
                                <option label="May" value="May" <?php if ($invoice_details->return_filing_period == 'May') echo 'selected="selected"'; ?>>May</option>
                                <option label="Jun" value="Jun" <?php if ($invoice_details->return_filing_period == 'Jun') echo 'selected="selected"'; ?>>Jun</option>
                                <option label="July" value="July" <?php if ($invoice_details->return_filing_period == 'July') echo 'selected="selected"'; ?>>July</option>
                                <option label="August" value="August" <?php if ($invoice_details->return_filing_period == 'August') echo 'selected="selected"'; ?>>August</option>
                                <option label="September" value="september" <?php if ($invoice_details->return_filing_period == 'September') echo 'selected="selected"'; ?>>September</option>
                                <option label="October" value="October" <?php if ($invoice_details->return_filing_period == 'October') echo 'selected="selected"'; ?>>October</option>
                                <option label="November" value="November" <?php if ($invoice_details->return_filing_period == 'November') echo 'selected="selected"'; ?>>November</option>
                                <option label="December" value="December" <?php if ($invoice_details->return_filing_period == 'December') echo 'selected="selected"'; ?>>December</option>
                            </select>
                        </div>
                    </div>

                    <div class="row item-details">
                        <div>Item Details</div>
                        <!--                            --><?php //include 'item_details.php'; ?>
                        <?php echo view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => false]); ?>
                    </div>
            </div>
            <input type="hidden" name="atl_id" value="<?php echo $invoice_details->atl_id; ?>">
            <input type="hidden" name="focus_key" value="atl_id">
            <input type="hidden" name="alternate" class="alternate" value="0">
            <input type="hidden" name="question_id"
                   value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
            <input type="hidden" name="type" id="type"
                   value="advtax-amendment">
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
