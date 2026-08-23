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
                            <!-- <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                              <ng-switch on="$last"><span ng-switch-when="true">Login</span></ng-switch>
                            </li> -->
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->

            <div class="content-pane" style="min-height: 433.2px;">
                <div data-ng-view="">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Last logged in on <strong></strong></p><!--04/09/2021 18:10 -->
<a href="<?php echo $slot3; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>

                        </div>
                        <div class="col-md-6">
                            <p class="pull-right">Currently logged in from IP: <strong><?php if (isset($ip_address)) echo $ip_address; ?></strong></p>
                        </div>
                    </div>
                    <div class="row mt-40">
                        <div class="col-md-9">
                            <h4 class="text-center" style="color: #0b1e59;font-family: arial;">Welcome <span class="text-uppercase"><?php if (isset($legal_name)) echo $legal_name; ?></span> to GST Common Portal</h4>
                            <p class="text-center"><strong>Return filing preference (<?php if (isset($period)) echo $period; ?> <?php if(isset($financial_year)) echo $financial_year; ?> </strong>) : Monthly (<a href="javascript:void(0)">Change</a>)</p>
                            <div class="mt-20">
                                <h4><strong>Returns Calendar (Last 5 return periods)</strong></h4>
                                <?php
                                    $default_class= 'fill-danger';
                                    $gstr1_p1_class=$default_class;
                                    $gstr1_p2_class=$default_class;
                                    $gstr1_p3_class=$default_class;
                                    $gstr1_p4_class=$default_class;
                                    $gstr1_p5_class=$default_class;

                                    $gstr3b_p1_class=$default_class;
                                    $gstr3b_p2_class=$default_class;
                                    $gstr3b_p3_class=$default_class;
                                    $gstr3b_p4_class=$default_class;
                                    $gstr3b_p5_class=$default_class;

                                    if (isset($gstr1_return_period1_status) && $gstr1_return_period1_status == 'Filed') {
                                        $gstr1_p1_class = 'fill-success';
                                    } else if (isset($gstr1_return_period1_status) && $gstr1_return_period1_status == 'To Be Filed') {
                                        $gstr1_p1_class = 'fill-disabled';
                                    } else {
                                         $gstr1_p1_class = $default_class;
                                    }

                                if (isset($gstr1_return_period2_status) && $gstr1_return_period2_status == 'Filed') {
                                    $gstr1_p2_class = 'fill-success';
                                } else if (isset($gstr1_return_period2_status) && $gstr1_return_period2_status == 'To Be Filed') {
                                    $gstr1_p2_class = 'fill-disabled';
                                } else {
                                    $gstr1_p2_class = $default_class;
                                }

                                if (isset($gstr1_return_period3_status) && $gstr1_return_period3_status == 'Filed') {
                                    $gstr1_p3_class = 'fill-success';
                                } else if (isset($gstr1_return_period3_status) && $gstr1_return_period3_status == 'To Be Filed') {
                                    $gstr1_p3_class = 'fill-disabled';
                                } else {
                                    $gstr1_p3_class = $default_class;
                                }

                                if (isset($gstr1_return_period4_status) && $gstr1_return_period4_status == 'Filed') {
                                    $gstr1_p4_class = 'fill-success';
                                } else if (isset($gstr1_return_period4_status) && $gstr1_return_period4_status == 'To Be Filed') {
                                    $gstr1_p4_class = 'fill-disabled';
                                } else {
                                    $gstr1_p4_class = $default_class;
                                }

                                if (isset($gstr1_return_period5_status) && $gstr1_return_period5_status == 'Filed') {
                                    $gstr1_p5_class = 'fill-success';
                                } else if (isset($gstr1_return_period5_status) && $gstr1_return_period5_status == 'To Be Filed') {
                                    $gstr1_p5_class = 'fill-disabled';
                                } else {
                                    $gstr1_p5_class = $default_class;
                                }


                                //
                                if (isset($gstr3b_return_period1_status) && $gstr3b_return_period1_status == 'Filed') {
                                    $gstr3b_p1_class = 'fill-success';
                                } else if (isset($gstr3b_return_period1_status) && $gstr3b_return_period1_status == 'To Be Filed') {
                                    $gstr3b_p1_class = 'fill-disabled';
                                } else {
                                    $gstr3b_p1_class = $default_class;
                                }

                                if (isset($gstr3b_return_period2_status) && $gstr3b_return_period2_status == 'Filed') {
                                    $gstr3b_p2_class = 'fill-success';
                                } else if (isset($gstr3b_return_period2_status) && $gstr3b_return_period2_status == 'To Be Filed') {
                                    $gstr3b_p2_class = 'fill-disabled';
                                } else {
                                    $gstr3b_p2_class = $default_class;
                                }

                                if (isset($gstr3b_return_period3_status) && $gstr3b_return_period3_status == 'Filed') {
                                    $gstr3b_p3_class = 'fill-success';
                                } else if (isset($gstr3b_return_period3_status) && $gstr3b_return_period3_status == 'To Be Filed') {
                                    $gstr3b_p3_class = 'fill-disabled';
                                } else {
                                    $gstr3b_p3_class = $default_class;
                                }

                                if (isset($gstr3b_return_period4_status) && $gstr3b_return_period4_status == 'Filed') {
                                    $gstr3b_p4_class = 'fill-success';
                                } else if (isset($gstr3b_return_period4_status) && $gstr3b_return_period4_status == 'To Be Filed') {
                                    $gstr3b_p4_class = 'fill-disabled';
                                } else {
                                    $gstr3b_p4_class = $default_class;//$default_class;
                                }

                                if (isset($gstr3b_return_period5_status) && $gstr3b_return_period5_status == 'Filed') {
                                    $gstr3b_p5_class = 'fill-success';
                                } else if (isset($gstr3b_return_period5_status) && $gstr3b_return_period5_status == 'To Be Filed') {
                                    $gstr3b_p5_class = 'fill-disabled';
                                } else {
                                    $gstr3b_p5_class = $default_class;
                                }
                                    ?>

<!---->
                                <table class="table-rc styled-table table-bordered table table-responsive">
                                    <tr>
                                        <td class="fill-blue"><strong>GSTR-1/IFF</strong></td>
<!--                                        fill-disabled-->
                                        <td class="<?php echo $gstr1_p1_class; ?>"><?php if (isset($gstr1_return_period1)) echo $gstr1_return_period1; ?> <span><?php if (isset($gstr1_return_period1_status)) echo $gstr1_return_period1_status; ?></span></td>
                                        <td class="<?php echo $gstr1_p2_class; ?>"><?php if (isset($gstr1_return_period2)) echo $gstr1_return_period2; ?> <span><?php if (isset($gstr1_return_period2_status)) echo $gstr1_return_period2_status; ?></span></td>
                                        <td class="<?php echo $gstr1_p3_class; ?>"><?php if (isset($gstr1_return_period3)) echo $gstr1_return_period3; ?> <span><?php if (isset($gstr1_return_period3_status)) echo $gstr1_return_period3_status; ?></span></td>
                                        <td class="<?php echo $gstr1_p4_class; ?>"><?php if (isset($gstr1_return_period4)) echo $gstr1_return_period4; ?> <span><?php if (isset($gstr1_return_period4_status)) echo $gstr1_return_period4_status; ?></td>
                                        <td class="<?php echo $gstr1_p5_class; ?>"><?php if (isset($gstr1_return_period5)) echo $gstr1_return_period5; ?> <span><?php if (isset($gstr1_return_period5_status)) echo $gstr1_return_period5_status; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td class="fill-blue"><strong>GSTR-3B</strong></td>
                                        <td class="<?php echo $gstr3b_p1_class; ?>"><?php if (isset($gstr3b_return_period1)) echo $gstr3b_return_period1; ?> <span><?php if (isset($gstr3b_return_period1_status)) echo $gstr3b_return_period1_status; ?></span></td>
                                        <td class="<?php echo $gstr3b_p2_class; ?>"><?php if (isset($gstr3b_return_period2)) echo $gstr3b_return_period2; ?> <span><?php if (isset($gstr3b_return_period2_status)) echo $gstr3b_return_period2_status; ?></span></td>
                                        <td class="<?php echo $gstr3b_p3_class; ?>"><?php if (isset($gstr3b_return_period3)) echo $gstr3b_return_period3; ?> <span><?php if (isset($gstr3b_return_period3_status)) echo $gstr3b_return_period3_status; ?></span></td>
                                        <td class="<?php echo $gstr3b_p4_class; ?>"><?php if (isset($gstr3b_return_period4)) echo $gstr3b_return_period4; ?> <span><?php if (isset($gstr3b_return_period4_status)) echo $gstr3b_return_period4_status; ?></span></td>
                                        <td class="<?php echo $gstr3b_p5_class; ?>"><?php if (isset($gstr3b_return_period5)) echo $gstr3b_return_period5; ?> <span><?php if (isset($gstr3b_return_period5_status)) echo $gstr3b_return_period5_status; ?></span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-8 col-xs-12" style="margin-top: 48px;border: 1px solid;">
                                    <p class="reg" style="font-style:italic;font-size: 13px;margin-top: 5px;">You can navigate to your chosen page through navigation panel given below
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 dp-btns">
                                    <div>
                                        <a href="<?php echo '/simulation/returns-dashboard';?>" class="btn btn-primary pad-l-50 pad-r-50" ><span title="Return Dashboard">Return Dashboard</span> <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary pad-l-50 pad-r-50" ><span title="Create Challan">Create Challan</span> <i class="fa fa-angle-right"></i></button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary pad-l-50 pad-r-50" ><span title="Disabled">View Notice(s) and Order(s)</span> <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 marginlt">
                                    <div>
                                        <button type="button" class="btn btn-primary pad42"><span title="Annual Return">Annual Return</span> <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-right" style="padding-right: 59px;">
                                    <div>
                                        <strong> Else Go to <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></strong>
                                        <button type="button" class="btn btn-primary pad-l-50 pad-r-50"><span title="Continue to Dashboard">Continue to Dashboard</span> <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dp-widget">
                                <p class="tp-dash-ttl text-uppercase"><strong> <?php if (isset($name)) echo $name; ?> </strong></p>
                                <p class="tp-dash-gstin"><strong><?php if (isset($gst_number)) echo $gst_number; ?></strong></p>
                                <a href="javascript:void(0)">View Profile <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="dp-widget">
                                <h4 class="text-center" style="font-family: arial;color: #0b1e59;padding-left: 19px;">Quick Links</h4>
                                <hr>
                                <p><a href="#">Check Cash Balance </a></p>
                                <p><a href="#">Liability ledger</a></p>
                                <p><a href="#">Credit ledger</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
