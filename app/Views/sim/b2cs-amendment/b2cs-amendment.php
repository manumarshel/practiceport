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
                                <ng-switch on="$last"><span ng-switch-when="true"> B2CSA</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4>Amended B2C(Others) Details - Summary</h4>
                </div>
                <div class="col-sm-12 taxp">
                    <ul class="nav nav-tabs ret-tabs">
                        <li class="active">
                            <a href="b2cs-amendment" class="ng-pristine ng-untouched ng-valid ng-not-empty">Other than
                                E-Commerce</a>
                        </li>
                        <li class="">
                            <a href="b2cs-ecomm-amendment" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                E-Commerce</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tabpane">
                <?php if (!isset($current_details)): ?>
                    <div class="alert alert-msg alert-info" data-ng-show="noinvflag" data-ng-bind="trans.ERR_NO_INV">
                        There are no invoices to be displayed.
                    </div>
                <?php else: ?>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Financial Year</th>
                            <th>Return Period</th>
                            <th>Original Pos</th>
                            <th>Revised Pos</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($current_details as $detail): ?>
                            <tr>
                                <td><?php echo $detail['financial_year']; ?></td>
                                <td><?php echo $detail['return_filing_period']; ?></td>
                                <td><?php echo $detail['revised_pos']; ?></td>
                            </tr>

                        <?php endforeach;
                        ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                <p class="mand-text">Indicates Mandatory Fields</p>
                <form name="b2csAmendSearch" class="others" method="get" action="b2cs-amendment-add">
                    <div class="tbl-format rettbl-format">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="fin" class="reg m-cir">Financial Year</label>
                                <select name="financial_year"
                                        class="form-control fin_year ng-pristine ng-not-empty ng-valid ng-valid-required ng-touched"
                                        required="">
                                    <option label="2022-23" value="2022-23" selected="selected">2022-23</option>
                                    <option label="2021-22" value="2021-22">2021-22</option>
                                    <option label="2020-21" value="2020-21">2020-21</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="return_filing_period" class="reg m-cir">Return Filing Period</label>
                                <select name="return_filing_period" id="" class="form-control return_filing_period">
                                    <option label="January" value="January">January</option>
                                    <option label="February" value="February">February</option>
                                    <option label="March" value="March">March</option>
                                    <option label="April" value="April">April</option>
                                    <option label="May" value="May" selected="">May</option>
                                    <option label="Jun" value="Jun">Jun</option>
                                    <option label="July" value="July">July</option>
                                    <option label="August" value="August">August</option>
                                    <option label="September" value="september">September</option>
                                    <option label="October" value="October">October</option>
                                    <option label="November" value="November">November</option>
                                    <option label="December" value="December">December</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="pos"><span>POS</span>
                                    <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                                <!--                                --><? //= view('sim/cmps/pos.php'); ?>
                                <select name="pos" class="form-control" id="pos">
                                    <option value="" disabled="" selected="selected">Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('pos', ((!empty($invoice_details)) ? (($invoice_details->pos == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
<!--                                <br>-->
<!--                                <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty"-->
<!--                                       name="eligible_to_taxed" id="eligible_to_taxed">-->
<!--                                <label for="rate_flag">Is the supply eligible to be taxed at a differential percentage-->
<!--                                    (%) of the-->
<!--                                    existing rate of tax, as notified by the Government?</label>-->
                            </div>
                            <div class="col-sm-3 ng-hide">
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
                           value="b2cs-amendment">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                            <button type="button" class="btn btn-default">Back</button>
                            <button type="submit" class="btn btn-primary accpt">Amend Invoice</button>
                        </div>
                    </div>
                    </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
