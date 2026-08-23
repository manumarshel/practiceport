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
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">GSTR-1/IFF</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true"> B2B</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
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
                                            data-ng-bind="retprd +'('+ uPref +')'"><?php if (isset($period)) echo $period; ?>(Q)</span>
                                    <!---->
                                    <!---->
                                </div>
                                <div class="col-sm-3" data-ng-show="!(fil_stat==='PE' || fil_stat==='ER')">
                                    <span class="reg" data-ng-bind="trans.LBL_STATUS">Status - </span>
                                    <span class="reg"
                                          data-ng-bind="fil_stat | STATUS"><?php echo 'Not Filed' ?></span>
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
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4 data-ng-bind="trans.LBL_B2B_INV_RCVR_SUMRY">B2B Invoices - Receiver-Wise-Summary</h4>
                </div>
                <div class="col-sm-4 taxp">
                    <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh"
                            data-ng-click="refresh()" data-ng-disabled="refbtn" style="
                            margin-left: 5px;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-primary btn-sm pull-right" data-ng-click="help('sum')">
                        <span>Help</span>&nbsp;
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </button>
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
                            <th>Receiver Gstin</th>
                            <th>Receiver Name</th>
                            <th>Invoice Number</th>
                            <th>Invoice Date</th>
<!--                            <th>pos</th>-->
                            <th>Total invoce value</th>
                            <th>Supply type</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
//                            echo "<pre>" . var_dump($current_details) . "</pre>";
                            foreach ($current_details as $detail):

                            ?>
                            <tr>
                                <td><?php echo $detail['receiver_gstin']; ?></td>
                                <td><?php echo $detail['receiver_name']; ?></td>
                                <td><?php echo $detail['invoice_number']; ?></td>
                                <td><?php echo $detail['invoice_date']; ?></td>
<!--                                <td>--><?php //echo $detail['pos']; ?><!--</td>--><!-- already commented -->
                                <td><?php echo $detail['total_invoce_value']; ?></td>
                                <td><?php echo $detail['supply_type']; ?></td>
                            </tr>

                        <?php endforeach;
                        ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                <div class="btn-toolbar">
                    <a href="<?php echo 'b2b-add-invoice'; ?>" class="btn btn-primary pull-right">Add Details</a>
                    <button type="button" class="btn btn-default pull-right">Back</button>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
