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
                                <ng-switch on="$last"><span ng-switch-when="true">  NIL-RATED</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4>8A, 8B, 8C, 8D - Nil Rated Supplies</h4>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h4>
                        <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title=""
                                data-ng-click="refresh()" data-ng-disabled="refbtn" style="margin-top: 0px;"
                                data-original-title="Refresh"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                    </h4>
                </div>
            </div>
            <div class="tabpane">
                <?php if (!isset($current_details)): ?>
                    <div class="alert alert-msg alert-info" data-ng-show="noinvflag" data-ng-bind="trans.ERR_NO_INV">
                        There are no invoices to be displayed.
                    </div>
                <?php else: ?>
                    <div class="alert alert-msg alert-success" data-ng-show="noinvflag" data-ng-bind="trans.ERR_NO_INV">
                        Saved Entries: <?php echo count($current_details); ?>
                    </div>
                <?php endif; ?>
                <h4>Item details</h4>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="table-responsive">
                                <table class="table inv exp tbl table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Nil Rated Supplies (₹)</th>
                                        <th class="text-center">Exempted(Other than Nil rated/non-GST supply) (₹)</th>
                                        <th class="text-center">Non-GST Supplies (₹)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Inter-state supplies to registered person</td>
                                        <td class="currency">
                                            <input id="inter_reg_nill_rated_supplies"
                                                   name="inter_reg_nill_rated_supplies"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                        <td class="currency">
                                            <input id="inter_reg_exempted" name="inter_reg_exempted"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                        <td class="currency">
                                            <input id="inter_reg_non_gst_supplies" name="inter_reg_non_gst_supplies"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Inter-state supplies to unregistered person</td>
                                        <td class="currency">
                                            <input id="inter_unreg_nill_rated_supplies"
                                                   name="inter_unreg_nill_rated_supplies"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                        <td class="currency">
                                            <input id="inter_unreg_exempted" name="inter_unreg_exempted"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                        <td class="currency">
                                            <input id="inter_unreg_non_gst_supplies" name="inter_unreg_non_gst_supplies"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Intra-state supplies to registered person</td>
                                        <td class="currency">
                                            <input id="intra_reg_nill_rated_supplies"
                                                   name="intra_reg_nill_rated_supplies"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                        <td class="currency">
                                            <input id="intra_reg_exempted" name="intra_reg_exempted"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                        <td class="currency">
                                            <input id="intra_reg_non_gst_supplies" name="intra_reg_non_gst_supplies"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Intra-state supplies to unregistered person</td>
                                        <td class="currency">
                                            <input id="intra_unreg_nill_rated_supplies"
                                                   name="intra_unreg_nill_rated_supplies"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                        <td class="currency">
                                            <input id="intra_unreg_exempted" name="intra_unreg_exempted"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                        <td class="currency">
                                            <input id="intra_unreg_non_gst_supplies" name="intra_unreg_non_gst_supplies"
                                                   class="form-control newinv formedit  currency ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-pattern">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="question_id"
                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                    <input type="hidden" name="type" id="type"
                           value="nil-rated">
                    <div class="btn-toolbar">
                        <button type="submit" class="btn btn-primary pull-right accpt" id="abc1">Save</button>
                        <button type="button" class="btn btn-default pull-right">Back</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>

