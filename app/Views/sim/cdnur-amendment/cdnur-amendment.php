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
                                <ng-switch on="$last"><span ng-switch-when="true"> CDNURA</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-12 taxp">
                    <h4>Credit / Debit Notes (Unregistered) - Summary</h4>
                    <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh" data-ng-click="refresh()" data-ng-disabled="refbtn" style="
                          margin-top: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
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
<!--                            <th>Financial Year</th>-->
<!--                            <th>Original Invoice Number</th>-->
                            <th>Revised Invoice Number Pos</th>
                            <th>Note Type</th>
                            <th>Note Value</th>
                            <th>Pos</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($current_details as $detail): ?>
                            <tr>
<!--                                <td>--><?php //echo $detail['financial_year']; ?><!--</td>-->
<!--                                <td>--><?php //echo $detail['original_invoice_number']; ?><!--</td>-->
                                <td><?php echo $detail['revised_invoice_number']; ?></td>
                                <td><?php echo $detail['note_type']; ?></td>
                                <td><?php echo $detail['note_value']; ?></td>
                                <td><?php echo $detail['pos']; ?></td>
                            </tr>

                        <?php endforeach;
                        ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                <p class="mand-text">Indicates Mandatory Fields</p>
                <div class="tbl-format rettbl-format">
                    <form name="cdnuramendSearch" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength others" method="get" action="cdnur-amendment-add" autocomplete="off" novalidate="">
                        <div class="row mar-b">
                            <div class="col-sm-4 col-xs-12">
                                <label for="fin" class="reg m-cir">Financial Year</label>
                                <select name="fin" class="form-control ng-pristine ng-untouched ng-not-empty ng-valid fin_year ng-valid-required"required="">
                                    <option label="2021-22" value="2021-22" selected="selected">2021-22</option>
                                    <option label="2020-21" value="2020-21">2020-21</option>
                                </select>
                            </div>
                            <!--
                            <div class="col-xs-12 col-md-4">
                                <label for="mn" class="reg"></label>
                                <select name="mon" class="form-control" required>
                                </select>
                            </div>
                            -->
                            <div class="col-sm-4">
                                <label class="reg m-cir" for="invoice_number" >Credit/Debit Note No.</label>
                                <input class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength invoice_number" name="invoice_number" type="text" placeholder="Enter Invoice No" maxlength="16"required="required">
                                <span class="err ng-hide">This information is required.</span>
                                <span class="err ng-hide">Do enter only allowed characters.</span>
                            </div>
                        </div>
                        <input type="hidden" name="question_id"
                               value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                        <input type="hidden" name="type" id="type"
                               value="cdnur-amendment">
                        <div class="row mar-b">
                            <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                                <button type="button" class="btn btn-default">Back</button>
                                <button type="submit" class="btn btn-primary">Amend Note</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
