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
                        <li class="active"><a href="cdnur">Uploaded by Taxpayer</a></li>
<!--                        <li><a href="cdnur-receiver-uploded">Uploaded by Receiver</a></li>-->
<!--                        <li><a href="cdnur-receiver-modified">Modified by Receiver</a></li>-->
<!--                        <li><a href="cdnur-receiver-rejected">Rejected by Receiver</a></li>-->
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
                            <th>Invoice Number</th>
                            <th>Invoice Date</th>
                            <th>Note type</th>
                            <th>Note value</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($current_details as $detail): ?>
                            <tr>
                                <td><?php echo $detail['dc_note_no']; ?></td>
                                <td><?php echo $detail['dc_note_date']; ?></td>
                                <td><?php echo $detail['note_type']; ?></td>
                                <td><?php echo $detail['note_value']; ?></td>
                            </tr>

                        <?php endforeach;
                        ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                <div class="btn-toolbar">
                    <a href="cdnur-add" class="btn btn-primary pull-right">Add Details</a>
                    <button type="button" class="btn btn-default pull-right">Back</button>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
