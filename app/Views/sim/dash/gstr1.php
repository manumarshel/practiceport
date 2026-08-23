<?= $this->extend('sim/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="mypage">
            <!-- breadcrumbs -->
            <div class="row" data-ng-controller="transctrl" data-ng-init="init('services')">
                <div class="col-sm-10">
                    <div data-breadcrumb="" data-path="//www.gst.gov.in/" data-name="Home">
                        <ol class="breadcrumb" data-ng-controller="crumbCtrl">
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Dashboard</a></li>
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Returns</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true"> GSTR-1/IFF</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="breadcrumb text-right">
<a href="<?php echo $slot7; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->

            <div class="">
                <form action="" class="ng-pristine ng-valid">
                    <div class="row">
                        <div class="col-lg-42 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="pull-left">GSTR-1 - Details of outward supplies of goods or services</h4>
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
                            <p class="mand-text" data-ng-bind="trans.HLP_MAND_FIELD">Indicates Mandatory Fields</p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <span data-ng-bind="trans.LBL_GSTIN">GSTIN - </span>
                                    <span data-ng-bind="main_page_gstin"><?php if (isset($gst_number)) echo $gst_number; ?></span>
                                </div>
                                <div class="col-sm-3">
                                    <span data-ng-bind="trans.LBL_LEGAL_NAME">Legal Name - </span>
                                    <span data-ng-bind="bus_name"><?php if (isset($legal_name)) echo $legal_name; ?></span>
                                </div>
                                <div class="col-sm-3">
                                    <span data-ng-bind="trans.LBL_TRADE_NAME">Trade Name - </span>
                                    <span data-ng-bind="trade_name"><?php if (isset($trade_name)) echo $trade_name; ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <span data-ng-bind="trans.LBL_FY">FY - </span>
                                    <span data-ng-bind="finyr"><?php if (isset($financial_year)) echo $financial_year; ?></span>
                                </div>
                                <div class="col-sm-3">
                                    <span data-ng-bind="trans.LBL_RETURN_PERIOD">Return Period - </span>
                                    <!----><span data-ng-if="uPref =='Q' &amp;&amp;  enableGstr3bQuarterly &amp;&amp; IFF==false" data-ng-bind="retprd +'('+ uPref +')'"><?php if (isset($period)) echo $period; ?>(Quarter)</span><!---->
                                    <!---->
                                </div>
                                <div class="col-sm-3" data-ng-show="!(fil_stat==='PE' || fil_stat==='ER')">
                                    <span class="reg" data-ng-bind="trans.LBL_STATUS">Status - </span>
                                    <span class="reg" data-ng-bind="fil_stat | STATUS"><?php echo 'Not Filed' ?></span>
                                </div>
                                <div class="col-sm-3 ng-hide hide" data-ng-show="(fil_stat==='PE' || fil_stat==='ER')">
                                    <span class="reg" data-ng-bind="trans.LBL_STATUS">Status - </span>
                                    <a data-ng-click="page_gstr1_summ('auth/gstr1/submit/error')">Error in submission</a>
                                </div>
                                <div class="col-sm-3">
                                    <!----><span data-ng-if="IFF==false" data-ng-bind="trans.LBL_DUE_DATE"></span><!---->
                                    <!---->
                                    <?php
//                                    $gstr1_due_date = '';
//                                    if (isset($gstr1_due_date)) {
//                                        $parts = explode('-', $gstr1_due_date);
//                                        if ( isset($parts[1]) )
//                                            $gstr1_due_date = $parts[1];
//                                        else $gstr1_due_date = $parts[0];
//                                    }
                                    ?>
                                    <span data-ng-bind="due_dt"><?php  if (isset($gstr1_due_date)) echo $gstr1_due_date; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-42 col-md-12 col-sm-12 col-xs-12">
                    <h4 data-ng-if="IFF==false" class="no-mar disp-in" data-ng-bind="trans.HDR_GSTR2">GSTR-1 - Invoice Details</h4>
                    <span class="pull-right ret-t-info">
                  <span class="impcol">**</span> Important Notice: If the invoices are more than 500 . Please check
                  <a data-ng-click="callpopup()">here</a>
              </span>
                </div>
                <div class="col-lg-42 col-md-12 col-sm-12 col-xs-12">
                    <h5 ng-if="IFF==false" class="no-mar disp-in" data-ng-bind="trans.LBL_GSTR1">Currently EWB data for B2B, B2CL and HSN will be available to import and download</h5>
                    <span class="pull-right ret-t-info">
                  <a target="_blank" href="#" rel="noopener noreferrer">
                      <span data-ng-bind="trans.LBL_HELP">Help</span>
                  </a>
              </span>
                    <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-top: 0px;margin-right:10px" data-ng-click="help()">
                        <span>Help</span>&nbsp;
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </button>
                    <a ng-if="IFF==false" class="btn btn-primary btn-sm pull-right" target="_blank" href="#" style="margin-top: 0px;margin-right:10px" rel="noopener noreferrer">e-Invoice Advisory</a>
                </div>
            </div>
            <div class="row">
                <div class="alert alert-msg alert-info alert-dismissible mar-t-5 mar-b-5 infoalign" data-ng-if="enableGstr3bQuarterly &amp;&amp; gstr_userPref =='Q'  &amp;&amp; disableinfo &amp;&amp; quartermonth_m1m2">
                    <button type="button" class="close" data-ng-click="closefunc('info')">
                        <i class="fa fa-times"></i>
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <span> The taxpayers for whom e-invoicing is not applicable may ignore the sections/options related to e-invoice download. The downloaded file would be blank in case taxpayer is not e-invoicing or when e-invoices reported to IRP are yet to be processed by GST system
              </span>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <?php
                        $total_value = 0;
                        $tax_value = 0;
                        $tax_liability = 0;
                        if ( isset($summary) && isset($summary['b2b'])) {
                            $dt = $summary['b2b'];
                            $total_value = $dt['total_value'];
                            $tax_value = $dt['tax_value'];
                            $tax_liability = $dt['tax_liability'];
                        }
                        ?>
                        <div>
                            <a href="<?php echo '/simulation/b2b'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">4A, 4B, 4C, 6B, 6C - B2B Invoices</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Value </p>₹ <span>--><?php //echo $total_value; ?><!--</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>--><?php //echo $tax_value; ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>--><?php //echo $tax_liability; ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <marquee style="color:#14385D; ">
                                                <b>"Total tax liability "</b> includes tax payable by recipient on supplies attracting reverse
                                                charge however the same will not be part of actual liability to be computed on filing of
                                                GSTR-3.
                                            </marquee>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
<!--                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="To import EWB data into B2B Section">Import EWb Data</button>-->
                                            <a data-toggle="modal" data-target="#EvcModal" title="Tax Payer having less than 50 E-way Bill..... click here for more information">&nbsp;
                                                <!-- <i class="fa fa-info-circle"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot8; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <?php
                        $total_value = 0;
                        $tax_value = 0;
                        $tax_liability = 0;
                        if ( isset($summary) && isset($summary['b2cl'])) {
                            $dt = $summary['b2cl'];
                            $total_value = $dt['total_value'];
                            $tax_value = $dt['tax_value'];
                            $tax_liability = $dt['tax_liability'];
                        }
                        ?>
                        <div>
                            <a href="<?php echo '/simulation/b2cl'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">5A, 5B - B2C (Large) Invoices</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Value </p>₹ <span>--><?php //echo $total_value; ?><!--</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>--><?php //echo $tax_value; ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>--><?php //echo $tax_liability; ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
<!--                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="To import EWB data into B2B Section">Import EWb Data</button>-->
                                            <a data-toggle="modal" data-target="#EvcModal" title="Tax Payer having less than 50 E-way Bill..... click here for more information">&nbsp;
                                                <!-- <i class="fa fa-info-circle"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot10; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/cdnr'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">9B - Credit / Debit Notes (Registered)</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot16; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/cdnur'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">9B - Credit / Debit Notes (Unregistered)</p>
                                </div>
                                <div class="ct cardht">
                                    <div class="row">
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot17; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/export'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">6A - Exports Invoices</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Value </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
<!--                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="To import EWB data into B2B Section">Import EWb Data</button>-->
                                            <a data-toggle="modal" data-target="#EvcModal" title="Tax Payer having less than 50 E-way Bill..... click here for more information">&nbsp;
                                                <!-- <i class="fa fa-info-circle"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot19; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/b2b-amendment'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">9A - Amended B2B Invoices</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Value </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot9; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/b2cl-amendment'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">9A - Amended B2C ( Large ) Invoices</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Value </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot11; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/export-amendment'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">9A - Amended Exports Invoices</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Value </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot20; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/cdnr-amendment'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">9C - Amended Credit/Debit Notes (Registered)</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/cdnur-amendment'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">9C - Amended Credit/Debit Notes (Unregistered)</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-42 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="no-mar" data-ng-bind="trans.HDR_GSTR1_DETAILS">GSTR-1 - Other Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <?php
                        $total_value = 0;
                        $tax_value = 0;
                        $tax_liability = 0;
                        if ( isset($summary) && isset($summary['b2cs'])) {
                            $dt = $summary['b2cs'];
                            $total_value = $dt['total_value'];
                            $tax_value = $dt['tax_value'];
                            $tax_liability = $dt['tax_liability'];
                        }
                        ?>
                        <div>
                            <a href="<?php echo '/simulation/b2cs'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">7 - B2C (Others)</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Value </p>₹ <span>--><?php //echo $total_value; ?><!--</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>--><?php //echo $tax_value; ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>--><?php //echo $tax_liability; ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot12; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/nil-rated'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">8A, 8B, 8C, 8D - Nil Rated Supplies</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Nil Amt</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Exempted Amt</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Non-GST Amt</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot15; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/advtax'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">11A(1), 11A(2) - Tax Liability (Advances Received)</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-12">-->
<!--                                            <p>Gross Advance Received</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot13; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/taxpaid'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">11B(1), 11B(2) - Adjustment of Advances</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-12">-->
<!--                                            <p>Gross Advance Adjusted</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/hsn'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">12 - HSN-wise summary of outward supplies</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Taxable Value  </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
<!--                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="To import EWB data into B2B Section">Import EWb Data</button>-->
                                            <a data-toggle="modal" data-target="#EvcModal" title="Tax Payer having less than 50 E-way Bill..... click here for more information">&nbsp;
                                                <!-- <i class="fa fa-info-circle"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot18; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/document'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">13 - Documents Issued</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Docs</p><span></span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Cancelled Docs</p><span></span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Net Issued  Docs</p><span></span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot21; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/taxpaid-amendment'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">11A - Amended Tax Liability (Advance Received)</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-12">-->
<!--                                            <p>Gross Advance Received</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/advtax-amendment'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">11B - Amendment of Adjustment of Advances</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-12">-->
<!--                                            <p>Gross Advance Received</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <a href="<?php echo $slot14; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div>
                            <a href="<?php echo '/simulation/b2cs-amendment'; ?>" class="unstyled">
                                <div class="hd gstr1">
                                    <p class="inv tilwid">10 - Amended B2C(Others)</p>
                                </div>
                                <div class="ct cardht">
<!--                                    <div class="row">-->
<!--                                        <div class="col-sm-12">-->
<!--                                            <p>Total Taxable Value </p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <p>Total Tax Liability</p>₹ <span>-</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <span class="" style="white-space:nowrap">
                      <span class="impcol">**</span> Please click on
                      <strong>'Generate Summary'</strong> button to update the tile summary after updating entries in any table completely.
                      Avoid updating summary after making few entries.

                  </span>
                        <button type="button" class="btn btn-primary"title="Click here to update the GSTR1 <br> and its summary to include the auto drafted details from recipients">GENERATE GSTR1 SUMMARY</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary pull-left" data-ng-click="getdownloadHistory(0)">E-INVOICE
                            DOWNLOAD HISTORY
                            <span data-ng-hide="tog4" class="">
                        <i class="fa fa-fw fa-chevron-down"></i>
                    </span>
                            <span data-ng-show="tog4" class="ng-hide">
                        <i class="fa fa-fw fa-chevron-up"></i>
                    </span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="inner">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <input type="checkbox" class="chkbx ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" id="submitCheckbox" required="" name="submitCheckbox" data-ng-model="submitCheckbox" data-ng-disabled="disable_btn('f') || !IFFsub">
                            <label for="submitCheckbox">
                                <span data-ng-bind="trans.SUB_DECL">I acknowledge that I have reviewed the details of the preview and the information is correct and would like to submit the details. I am aware that no changes can be made after submit.</span>
                            </label>
                            <!-- <span class="err" data-ng-show="" data-ng-bind="trans.ERR_MANDATORY"></span>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="<?php echo $slot22; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                    </div>
                </div>
                <div class="row mar-b">
                    <div class="col-sm-12 text-right">
                        <!---->
                        <!----><a type="button" class="btn btn-default" href="<?=base_url('simulation/returns-dashboard'); ?>" target="_self" data-ng-bind="trans.LBL_BACK" data-ng-if="!backflag">Back</a><!---->
                        <!----><button type="button" ng-if="IFF==false" class="btn btn-primary" data-ng-click="ExcelDownloadDecider()" title="Instant download of documents (upto 500) " data-ng-bind="trans.GSTR1_EINV_DOWNLOAD_EXCEL">DOWNLOAD DETAILS FROM E-INVOICES (EXCEL)</button><!---->
                        <button type="button" class="btn btn-primary" data-ng-disabled="resetDisable" data-ng-click="popUpReset()" data-ng-bind="trans.LBL_RESET">RESET</button>
                        <!---->
                        <button type="button" class="btn btn-primary" id="gstr1_submit_btn" disabled>SUBMIT</button>
                        <button type="button" class="btn btn-primary" id="gstr1_file_btn" disabled="disabled">File Return</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
