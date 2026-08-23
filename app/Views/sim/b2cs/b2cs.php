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
                                <ng-switch on="$last"><span ng-switch-when="true"> B2CS</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-12 taxp">
                    <h4>B2C (Others) Details - Summary</h4>
                    <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh" data-ng-click="refresh()" data-ng-disabled="refbtn" style="
                          margin-top: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                </div>
                <div class="col-sm-12">
                    <ul class="nav nav-tabs ret-tabs">
                        <li class="active"><a data-toggle="tab" tabindex="0">Other than E-Commerce</a></li>
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
                            <th>POS</th>
                            <th>Total Invoice Value</th>
                            <th>Supply type</th>
                            <th>Return Period</th>
                            <th>Rate</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($current_details as $detail):
//                            substr($detail['pos'], 0, 7);
                        $pos = $detail['pos'];
                            ?>
                            <tr>
                                <td><?php echo $pos_list[$pos];  ?></td>
                                <td><?php echo $detail['total_invoice_value']; ?></td>
                                <td><?php echo $detail['supply_type']; ?></td>
                                <td><?php echo $detail['return_filing_period']; ?></td>
                                <td><?php echo $detail['rate']; ?></td>
                            </tr>

                        <?php endforeach;
                        ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                <div class="btn-toolbar">
                    <a href="b2cs-add" class="btn btn-primary pull-right">Add Details</a>
                    <button type="button" class="btn btn-default pull-right">Back</button>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
