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
                                <ng-switch on="$last"><span ng-switch-when="true"> CDNR</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-12 taxp">
                    <h4>Credit / Debit Notes (Registered) - Summary</h4>
                    <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh" data-ng-click="refresh()" data-ng-disabled="refbtn" style="
                          margin-top: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                </div>
                <div class="col-sm-12">
                    <ul class="nav nav-tabs ret-tabs">
                        <li><a href="cdnur">Uploaded by Taxpayer</a></li>
                        <li class="active"><a href="cdnur-receiver-uploded">Uploaded by Receiver</a></li>
                        <li><a href="cdnur-receiver-modified">Modified by Receiver</a></li>
                        <li><a href="cdnur-receiver-rejected">Rejected by Receiver</a></li>
                    </ul>
                </div>
            </div>
            <div class="tabpane">
                <div class="alert alert-msg alert-info" data-ng-show="noinvflag" data-ng-bind="trans.ERR_NO_INV">There are no invoices to be displayed.</div>
                <div class="btn-toolbar">
                    <button type="button" class="btn btn-primary pull-right">Add Details</button>
                    <button type="button" class="btn btn-default pull-right">Back</button>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
