<?= $this->extend('sim/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="mypage">
            <!-- breadcrumbs -->
            <div class="row" data-ng-controller="transctrl" data-ng-init="init('services')">
                <div class="col-xs-10">
                    <div data-breadcrumb="" data-path="//www.gst.gov.in/" data-name="Home">
                        <ol class="breadcrumb" data-ng-controller="crumbCtrl">
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Dashboard</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true">Returns</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->

            <div class="content-pane" style="min-height: 433.2px;">
                <div data-ng-view="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="mar-t-0">File Returns</h4>
                                    <hr>
                                    <p class="mand-text">indicates mandatory fields</p>
                                    <form action="" class="check-period">
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-12">
                                                <label for="" class="m-cir reg">Financial Year</label>
                                                <select name="financial_year" class="form-control" id="pos">
                                                    <option value="" disabled="" <?= ((empty($financial_year)) ? 'selected' : ''); ?>>Select</option>
                                                    <?php
                                                    foreach ($financial_period_list as $k => $value) {
                                                        echo '<option value="' . $k . '" ' . set_value('financial_year', ((!empty($financial_year)) ? (($financial_year == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-sm-3 col-xs-12">
                                                <label for="" class="m-cir reg">Quarter</label>
                                                <select name="quarter" class="form-control" id="pos">
                                                    <option value="" disabled="" <?= ((empty($quarter)) ? 'selected' : ''); ?>>Select</option>
                                                    <?php
                                                    foreach ($quarter_list as $k => $value) {
                                                        echo '<option value="' . $k . '" ' . set_value('quarter', ((!empty($quarter)) ? (($quarter == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-xs-12">
                                                <label for="" class="m-cir reg">Period</label>
                                                <select name="period" id="" class="form-control pad-r-0 ng-pristine ng-empty">
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 col-xs-12">
                                                <button type="submit" class="btn srchbtn btn-primary">Search</button> <br>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-9" id="show-errors"></div>
                                        <div class="col-sm-3">
<a href="<?php echo $slot4; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!----><div class="alert alert-msg alert-info alert-dismissible mar-t-5 mar-b-5 infoalign" data-ng-if="enableGstr3bQuarterly &amp;&amp; gstr_userPref =='Q'  &amp;&amp; disableinfo &amp;&amp; quartermonth_m1m2">
                    <button type="button" class="close" data-ng-click="closefunc('info')">
                        <i class="fa fa-times"></i>
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <span>You have selected to file the return on quarterly frequency, you are required to file GSTR-1 and GSTR-3B for the last month of the quarter.<br>
                      &nbsp;&nbsp;&nbsp;If you intend to furnish invoices for the current month, it can be done by using the Invoice Furnishing Facility (IFF).
                      </span>

                </div><!---->
                <!---->
                <!----><div class="alert alert-msg alert-info alert-dismissible mar-t-5 mar-b-5 infoalign" data-ng-if=" enableGstr3bQuarterly &amp;&amp; gstr_userPref=='Q' &amp;&amp; quartermonth_m1m2  &amp;&amp; disabledanger">
                    <button type="button" class="close" data-ng-click="closefunc('danger')">
                        <i class="fa fa-times"></i>
                    </button>
                    <i class="fa fa-info-circle"></i>  <span>You are required to furnish a challan for the tax payable net of credits for the month from 1st of following month. <a data-ng-href="//payment.gst.gov.in/payment/auth/" href="//payment.gst.gov.in/payment/auth/">Click here</a> to create challan.
                  </span>
                </div><!---->
                <!---->
            </div>
            <div class="row">
                <div class="col-sm-12 text-right">
<a href="<?php echo $slot5; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="#" class="unstyled">
                                <div class="hd rndsh" data-ng-if="x.return_ty == 'GSTR1' &amp;&amp; x.rtn_subtype == 'IFF'">
                                    <p class="inv">Details of outward supplies of goods or services</p>
                                    <p data-ng-bind="trans.IFF">GSTR1</p>
                                    <p class="" data-ng-bind="trans.LBL_OPTIONAL"><?php if (isset($return_period)) echo $return_period; ?></p>
                                </div>
                                <div class="ct">
                                    <?php if ( session()->get('qstn_type') !== 'gstr3b' ): ?>
                                        <p class="f-wt"><span>Due Date - </span> <span><?php if (isset($gstr1_due_date)) echo $gstr1_due_date; ?></span></p>
                                    <?php else: ?>
                                        <p class="f-wt"><span>Filed</span></p>
                                    <?php endif; ?>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <a href="/simulation/gstr1" class="btn btn-primary offline_btn" data-ng-click="page_rtp(x.return_ty,x.due_dt,x.status)" data-toggle="tooltip" title="" data-ng-bind="trans.BTN_VIEW" data-original-title="">Prepare Online</a>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <button class="btn btn-primary pull-right" data-ng-click="offlinepath(x.return_ty,'FIL')" data-ng-bind="trans.TTL_DNLD">Prepare Offline</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="<?php echo $slot6; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="#" class="unstyled">
                                <div class="hd rndsh" data-ng-if="x.return_ty == 'GSTR1' &amp;&amp; x.rtn_subtype == 'IFF'">
                                    <p class="inv">Auto Drafted details (For view only)</p>
                                    <p data-ng-bind="trans.IFF">GSTR2A</p>
                                </div>
                                <div class="ct">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <button type="button" class="btn btn-primary" data-ng-click="page_rtp(x.return_ty,x.due_dt,x.status)" data-toggle="tooltip" title="" data-ng-bind="trans.BTN_VIEW" data-original-title="">View</button>
                                        </div>
                                        <div class="col-sm-5 col-xs-6">
                                            <button class="btn btn-primary pull-right" data-ng-click="offlinepath(x.return_ty,'FIL')" data-ng-bind="trans.TTL_DNLD">Download</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="#" class="unstyled">
                                <div class="hd rndsh" data-ng-if="x.return_ty == 'GSTR1' &amp;&amp; x.rtn_subtype == 'IFF'">
                                    <p class="inv">Auto - drafted ITC Statement for the month</p>
                                    <p data-ng-bind="trans.IFF">GSTR2B</p>
                                </div>
                                <div class="ct">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <button type="button" class="btn btn-primary" data-ng-click="page_rtp(x.return_ty,x.due_dt,x.status)" data-toggle="tooltip" title="" data-ng-bind="trans.BTN_VIEW" data-original-title="">View</button>
                                        </div>
                                        <div class="col-sm-5 col-xs-6">
                                            <button class="btn btn-primary pull-right" data-ng-click="offlinepath(x.return_ty,'FIL')" data-ng-bind="trans.TTL_DNLD">Download</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="/simulation/gstr3B" class="unstyled">
                                <div class="hd rndsh" data-ng-if="x.return_ty == 'GSTR1' &amp;&amp; x.rtn_subtype == 'IFF'">
                                    <p class="inv">Monthly Return</p>
                                    <p data-ng-bind="trans.IFF">GSTR-3B</p>
<!--                                    <p class="khakhi" data-ng-bind="trans.LBL_OPTIONAL">Quarterly View</p>-->
                                </div>
                                <div class="ct">
                                    <p class="f-wt"><span>Due Date - </span> <span><?php if (isset($gstr3b_due_date)) echo $gstr3b_due_date; ?></span></p>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <button type="button" class="btn btn-primary" data-ng-click="page_rtp(x.return_ty,x.due_dt,x.status)" data-toggle="tooltip" title="" data-ng-bind="trans.BTN_VIEW" data-original-title="">Prepare Online</button>
                                        </div>
                                        <div class="col-sm-5 col-xs-6">
                                            <button class="btn btn-primary pull-right" data-ng-click="offlinepath(x.return_ty,'FIL')" data-ng-bind="trans.TTL_DNLD">Download</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="<?php echo $slot30; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
