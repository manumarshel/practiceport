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
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">GSTR 3B</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true"> Inward Supplies</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 taxp">
                    <h4>5. Values of exempt, nil-rated and non-GST inward supplies</h4>
                </div>
                <div class="col-sm-4 taxp">
                    <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh"  style="
                            margin-left: 5px;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-primary btn-sm pull-right">
                        <span>Help</span>&nbsp;
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-sm-12">
                </div>
            </div>
            <div class="tabpane">
                <div class="alert alert-msg alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        <i class="fa fa-times"></i>
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <span>  Tables 4(A)(1), (3), (4), (5) and 4(B)(2) are auto-drafted based on the values in GSTR-2B.
                </span>
                </div>
                <form class="gstr3b">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="rettbl-format">
                            <div class="table-responsive">
                                <table class="table tbl inv exp table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Nature of Supplies</th>
                                        <th class="text-center">Inter-State Supplies (₹)</th>
                                        <th class="text-center">Intra-State Supplies (₹)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <span>From a supplier under composition scheme, Exempt and Nil rated supply</span>
                                        </th>
                                        <td>
                                            <input id="invval" name="composition_inter_state" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty">
                                        </td>
                                        <td>
                                            <input id="invval" name="composition_intra_state" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <span>Non GST supply</span>
                                        </th>
                                        <td>
                                            <input id="invval" name="nongst_inter_state" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty">
                                        </td>
                                        <td>
                                            <input id="invval" name="nongst_intra_state" class="form-control formedit newinv currency ng-pristine ng-untouched ng-valid ng-not-empty">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar">
                    <button type="submit" class="btn btn-primary pull-right">CONFIRM</button>
                    <button type="button" class="btn btn-primary pull-right">CANCEL</button>
                </div>
                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="inward-supplies">
                </form>

                <div class="row show-errors" id="show-errors">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
