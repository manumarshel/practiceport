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
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Returns</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true">GSTR 3B</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->

            <div class="">
                <form action="" class="ng-pristine ng-valid">
                    <div class="row">
                        <div class="col-lg-42 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="pull-left">GSTR 3B - Monthly Return</h4>
                            <h4>
                                <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh" data-ng-click="refresh()" data-ng-disabled="refbtn" style="margin-top: 0px;">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>
                            </h4>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p></p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="reg">GSTIN - <?php if (isset($gst_number)) echo $gst_number; ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="reg">Legal Name - <?php if (isset($legal_name)) echo $legal_name; ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="reg">Status - Not Filed</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="reg">FY - <?php if (isset($financial_year)) echo $financial_year; ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="reg">Return Period - <?php if (isset($period)) echo $period; ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="reg" data-ng-if="showPdfLink == false">Due Date - <?php  if (isset($gstr3b_due_date)) echo $gstr3b_due_date; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
              <span class=" pull-left">
                <a href="#" data-toggle="modal" data-target="#exampleModal">Click here</a> for system generated summary status for GSTR-3B. </span>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <?php
//                        $t1 = 0;
//                        $t2 = 0;
//                        $t3 = 0;
//                        $t4 = 0;
//                        if ( isset($summary) && isset($summary['iosup'])) {
//                            $dt = $summary['iosup'];
//                            $t1 = $dt['total_value1'];
//                            $t2 = $dt['total_value2'];
//                            $t3 = $dt['total_value3'];
//                            $t4 = $dt['total_value4'];
//                        }
                        ?>
                        <div>
                            <a href="iosup" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">3.1 Tax on outward and reverse charge inward supplies</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Integrated Tax </p><p class="val">₹--><?php //echo $t1; ?><!--</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Central Tax </p><p class="val">₹--><?php //echo $t2; ?><!--</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>State/UT Tax </p><p class="val">₹--><?php //echo $t3; ?><!--</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>CESS </p><p class="val">₹--><?php //echo $t4; ?><!--</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot29; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">

                        <div>
                            <a href="interstatesupplies" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">3.2 Inter-state supplies</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p><p class="val">₹0.00</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Integrated Tax</p><p class="val">₹0.00</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot27; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <?php
//                        $t1 = 0;
//                        $t2 = 0;
//                        $t3 = 0;
//                        $t4 = 0;
//                        if ( isset($summary) && isset($summary['eligible-ITC'])) {
//                            $dt = $summary['eligible-ITC'];
//                            $t1 = $dt['total_value1'];
//                            $t2 = $dt['total_value2'];
//                            $t3 = $dt['total_value3'];
//                            $t4 = $dt['total_value4'];
//                        }
                        ?>
                        <div>
                            <a href="eligible-ITC" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">4. Eligible ITC</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Integrated Tax </p><p class="val">₹--><?php //echo $t1; ?><!--</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Central Tax </p><p class="val">₹--><?php //echo $t2; ?><!--</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>State/UT Tax </p><p class="val">₹--><?php //echo $t3; ?><!--</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>CESS </p><p class="val">₹--><?php //echo $t4; ?><!--</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot25; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <?php
//                        $t1 = 0;
//                        $t2 = 0;
//                        if ( isset($summary) && isset($summary['inward-supplies'])) {
//                            $dt = $summary['inward-supplies'];
//                            $t1 = $dt['total_value1'];
//                            $t2 = $dt['total_value2'];
//                        }
                        ?>
                        <div>
                            <a href="inward-supplies" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">5. Exempt, nil and Non GST inward supplies</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Inter-state supplies </p><p class="val">₹--><?php //echo $t1; ?><!--</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Intra-state supplies</p><p class="val">₹--><?php //echo $t2; ?><!--</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot26; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <?php
//                        $t1 = 0;
//                        $t2 = 0;
//                        $t3 = 0;
//                        $t4 = 0;
//                        if ( isset($summary) && isset($summary['interestLateFee'])) {
//                            $dt = $summary['interestLateFee'];
//                            $t1 = $dt['total_value1'];
//                            $t2 = $dt['total_value2'];
//                            $t3 = $dt['total_value3'];
//                            $t4 = $dt['total_value4'];
//                        }
                        ?>
                        <div>
                            <a href="interestLateFee" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">5.1 Interest and Late fee for previous tax period</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Integrated Tax </p><p class="val">₹--><?php //echo $t1; ?><!--</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Central Tax </p><p class="val">₹--><?php //echo $t2; ?><!--</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>State/UT Tax </p><p class="val">₹--><?php //echo $t3; ?><!--</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>CESS </p><p class="val">₹--><?php //echo $t4; ?><!--</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot28; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
<!--                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">-->
<!--                        <div>-->
<!--                            <a href="payment" class="unstyled">-->
<!--                                <div class="hd gstr1">-->
<!--                                    <p class="inv tilwid">6.1 Payment of tax</p>-->
<!--                                </div>-->
<!--                                <div class="ct cardht">-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Balance Liability </p><p class="val">₹0.00</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Paid through Cash</p><p class="val">₹0.00</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Paid through Credit </p><p class="val">₹0.00</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-primary mt-2per" data-ng-if="!backflag">
                            <div class="panel-heading text-center">Important Message</div>
                            <div class="panel-body">Once you have filled the relevant tables, please follow the following steps for filing:-
                                <ul>
                                    <li>Please click on 'Save GSTR3B' on the summary page.</li>
                                    <li>You may download and preview/save the draft GSTR-3B.</li>
                                    <li>Click on 'Proceed to payment' to offset your liabilities.</li>
                                    <li>In case of insufficient cash balance to set off the liabilities, challan creation facility
                                        has been provided on the same screen.</li>
                                    <li>After setting off liabilities, GSTR-3B can be filed by attaching DSC/EVC.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mar-b">
                    <div class="col-sm-12 text-right">
                        <a class="btn btn-default">Back</a>
                        <a class="btn btn-danger" target="_blank" >SYSTEM GENERATED GSTR-3B</a>
                        <button type="button" class="btn btn-primary save-gstr3b">SAVE GSTR3B</button>
                        <button type="button" class="btn btn-primary">Download Filed GSTR-3B</button>
                        <button type="button" class="btn btn-primary proceed-payment3b" disabled="disabled">Proceed to Payment</button>
                    </div>
                    <div class="col-sm-12 text-right">
                        <a href="<?php echo $slot24; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
