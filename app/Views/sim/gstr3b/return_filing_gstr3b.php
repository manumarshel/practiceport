<?= $this->extend('sim/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="row" data-ng-controller="transctrl" data-ng-init="init('services')">
            <div class="col-xs-10">
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
        </div>

        <div class="">
            <form action="" class="ng-pristine ng-valid">
                <div class="row">
                    <div class="col-lg-42 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="pull-left">GSTR-3B - Details of outward supplies of goods or services</h4>
                        <h4>
                            <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip"
                                    title="Refresh" data-ng-click="refresh()" data-ng-disabled="refbtn"
                                    style="margin-top: 0px;">
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
                        <div class="row">
                            <div class="col-sm-3">
                                <span data-ng-bind="trans.LBL_GSTIN">GSTIN - </span>
                                <span data-ng-bind="main_page_gstin"><?php if (isset($company['gst_number'])) echo $company['gst_number']; ?></span>
                            </div>
                            <div class="col-sm-3">
                                <span data-ng-bind="trans.LBL_LEGAL_NAME">Legal Name - </span>
                                <span data-ng-bind="bus_name"><?php if (isset($company['legal_name'])) echo $company['legal_name']; ?></span>
                            </div>
                            <div class="col-sm-3">
                                <span data-ng-bind="trans.LBL_TRADE_NAME">Trade Name - </span>
                                <span data-ng-bind="trade_name"><?php if (isset($company['trade_name'])) echo $company['trade_name']; ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <span data-ng-bind="trans.LBL_FY">FY - </span>
                                <span data-ng-bind="finyr"><?php if (isset($company['financial_year'])) echo $company['financial_year']; ?></span>
                            </div>
                            <div class="col-sm-3">
                                <span data-ng-bind="trans.LBL_RETURN_PERIOD">Return Period - </span>
                                <!----><span
                                        data-ng-if="uPref =='Q' &amp;&amp;  enableGstr3bQuarterly &amp;&amp; IFF==false"
                                        data-ng-bind="retprd +'('+ uPref +')'"><?php if (isset($period)) echo $period; ?>(Quarter)</span>
                                <!---->
                                <!---->
                            </div>
                            <div class="col-sm-3" data-ng-show="!(fil_stat==='PE' || fil_stat==='ER')">
                                <span class="reg" data-ng-bind="trans.LBL_STATUS">Status - </span>
                                <?php if (!isset($_GET['return-status'])): ?>
                                    <span class="reg"
                                          data-ng-bind="fil_stat | STATUS"><?php if (isset($company['status'])) echo $company['status']; ?></span>
                                <?php else: ?>
                                    <span class="reg"
                                          data-ng-bind="fil_stat | STATUS">Filed</span>
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-3 ng-hide hide" data-ng-show="(fil_stat==='PE' || fil_stat==='ER')">
                                <span class="reg" data-ng-bind="trans.LBL_STATUS">Status - </span>
                                <a data-ng-click="page_gstr1_summ('auth/gstr1/submit/error')">Error in
                                    submission</a>
                            </div>
                            <div class="col-sm-3">
                                <!----><span data-ng-if="IFF==false" data-ng-bind="trans.LBL_DUE_DATE"></span>
                                <!---->
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
                                <span data-ng-bind="due_dt"><?php if (isset($company['gstr1_due_date'])) echo $company['gstr1_due_date']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-right breadcrumb">
                <a href="https://youtu.be/NWpOPHTceY4" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
            </div>
        </div>

        <?php if (!isset($_GET['return-status'])) { ?>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-12 taxp">
                    <h4 class="pull-left">Returns Filings for GST GSTR-3B</h4>
                    <h4>
                        <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip"
                                title="Refresh" data-ng-click="refresh()" data-ng-disabled="refbtn"
                                style="margin-top: 0px;">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </button>
                    </h4>
                </div>
            </div>

            <div class="tabpane aqua-blue">
                <div class="rettbl-format">
                    <div class="row">
                        <div class="inner">
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                <input type="checkbox"
                                       class="chkbx ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                       id="submitCheckbox" required="" name="submitCheckbox"
                                       data-ng-model="submitCheckbox" data-ng-disabled="disable_btn('f') || !IFFsub"
                                       data-com.bitwarden.browser.user-edited="yes">
                                <label for="submitCheckbox">
                                    <span data-ng-bind="trans.SUB_DECL">I hereby solemnly affirm and declare that the information given herein above is true and correct to the best of my/our knowledge and belief and nothing has been concealed therefrom.</span>
                                </label>
                                <!-- <span class="err" data-ng-show="" data-ng-bind="trans.ERR_MANDATORY"></span>-->
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="reg  m-cir" for="hsnno">Authorised Signatory</label>
                                <!-- <input id="hsn" name="hsn" type="text" placeholder="To Add Details, Enter HSN Code/Description" maxlength="1000" minlength="2" class="form-control ng-pristine ng-untouched ng-valid hasclear ng-empty ng-valid-minlength ng-valid-maxlength"> -->
                                <select name="" id=""
                                        class="form-control ng-pristine ng-untouched ng-valid hasclear ng-empty ng-valid-minlength ng-valid-maxlength">
                                    <option value="<?php if (isset($company['signatory'])) echo $company['signatory']; ?>"><?php if (isset($company['signatory'])) echo $company['signatory']; ?></option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="row mar-b">
                        <div class="col-sm-12 text-right">
                            <a type="button" class="btn btn-default"
                               href="<?= base_url('simulation/returns-dashboard') ?>" target="_self"
                               data-ng-bind="trans.LBL_BACK" data-ng-if="!backflag">Back</a><!---->
                            <button type="button" class="btn btn-primary" data-ng-disabled="resetDisable"
                                    data-ng-click="popUpReset()" data-ng-bind="trans.LBL_RESET">FILE WITH DSC
                            </button>
                            <!---->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                                    id="gstr1_submit_btn_esc">FILE WITH EVC
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="well">
                                <h4>DSC Usage Steps: </h4>
                                <ul>
                                    <li>Run the emsigner as Administrator.</li>
                                    <li>open the portal,fill the appropriate Details go to till Update Register DSC</li>
                                    <li>Open a separate tab in same browser and type https://127.0.0.1:1585</li>
                                    <li>Click on Advanced Click proceed to 127.0.0.1(unsafe)</li>
                                    <li>Come back to GST portal, refresh the page</li>
                                    <li>Click on register DSC</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Validate One Time Password (OTP)</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success">
                        <p>One-Time Password (OTP) has been sent to your registered email ID jxxxxxj@jaksllp.com and
                            mobile no. 92xxxxxx01. OTP is Valid Till 10:39 </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="">
                                <div class="form-group">
                                    <label class="reg  m-cir" for="hsnno">Enter One Time Password (OTP) </label>
                                    <input id="otp_value" name="otp_value" type="text"
                                           class="form-control ng-pristine ng-untouched ng-valid hasclear ng-empty ng-valid-minlength ng-valid-maxlength">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary" id="verify_otp_3b">VERIFY</button>
                    <button type="button" class="btn btn-primary">RESEND OTP</button>
                    <button type="button" class="btn btn-default">00S</button>
                    <p class="text-left">If you do not receive the OTP within 30 seconds, please click "RESEND OTP"
                        button to request same OTP again. Resend request can be made maximum three times. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
