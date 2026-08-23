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
                                <ng-switch on="$last"><span ng-switch-when="true"> HSN</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-12 taxp">
                    <h4>HSN-wise summary of outward supplies</h4>
                    <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh" data-ng-click="refresh()" data-ng-disabled="refbtn" style="
                          margin-top: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="tabpane aqua-blue">
            <div class="rettbl-format">
                <div class="row">
                <span class="col-xs-12 col-sm-12">Note:
                  <ol>
                    <li data-ng-bind="trans.CLICK_OUTSIDE_TO_ENABLE_FIELDS">In case there are no suggestions for any HSN, then after typing the required HSN; click on description/UQC to enable other fields.</li>
                    <li data-ng-bind="trans.LBL_SAVE_ALERT_HSN">Kindly click on save button after any modification( add, edit) to save the changes</li>
                  </ol>
                </span>
                </div>
                <?php if (!isset($current_details)): ?>
                    <div class="alert alert-msg alert-info">
                        There are no saved records to be displayed.
                    </div>
                <?php else: ?>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Hsn</th>
                            <th>Description</th>
                            <th>Uqc</th>
                            <th>total quantity</th>
                            <th>total Taxable Value</th>
                            <th>Rate</th>
                            <th>Integrated Tax</th>
                            <th>Central Tax</th>
                            <th>State Tax</th>
                            <th>Cess</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($current_details as $detail): ?>
                            <tr>
                                <td><?php echo $detail['hsn']; ?></td>
                                <td><?php echo $detail['description']; ?></td>
                                <td><?php echo $detail['uqc']; ?></td>
                                <td><?php echo $detail['total_quantity']; ?></td>
                                <td><?php echo $detail['total_taxable_value']; ?></td>
                                <td><?php echo $detail['rate']; ?></td>
                                <td><?php echo $detail['integrated_tax']; ?></td>
                                <td><?php echo $detail['central_tax']; ?></td>
                                <td><?php echo $detail['state_tax']; ?></td>
                                <td><?php echo $detail['cess']; ?></td>
                            </tr>

                        <?php endforeach;
                        ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Add/Edit Details</h4>
                    </div>
                </div>
                <form>
                <div class="row">
                    <div class="col-sm-4">
                        <label class="reg  m-cir" for="hsnno">HSN</label>
                        <input id="hsn" name="hsn" type="text" placeholder="To Add Details, Enter HSN Code/Description" maxlength="1000" minlength="2" class="form-control ng-pristine ng-untouched ng-valid hasclear ng-empty ng-valid-minlength ng-valid-maxlength">
                    </div>
                    <div class="col-sm-4">
                        <label class="reg " for="description">Description</label>
                        <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="description" id="description" title="">
                    </div>
                    <div class="col-sm-4">
                        <label class="m-cir reg" for="UQC">UQC</label>
                        <input type="text" name="uqc" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" id="uqc" required="">

<!--                        <select name="uqc" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" id="uqc" required="">-->
<!--                            <option value="">Select</option>-->
<!--                            <option  value="BAG">BAG-BAGS </option>-->
<!--                            <option  value="BAL">BAL-BALE </option>-->
<!--                            <option  value="BDL">BDL-BUNDLES </option>-->
<!--                            <option  value="BKL">BKL-BUCKLES </option>-->
<!--                            <option  value="BOU">BOU-BILLION OF UNITS </option>-->
<!--                            <option  value="BOX">BOX-BOX </option>-->
<!--                            <option  value="BTL">BTL-BOTTLES </option>-->
<!--                            <option  value="BUN">BUN-BUNCHES </option>-->
<!--                            <option  value="CAN">CAN-CANS </option>-->
<!--                            <option  value="CBM">CBM-CUBIC METERS </option>-->
<!--                            <option  value="CCM">CCM-CUBIC CENTIMETERS </option>-->
<!--                            <option  value="CMS">CMS-CENTIMETERS </option>-->
<!--                            <option  value="CTN">CTN-CARTONS </option>-->
<!--                            <option  value="DOZ">DOZ-DOZENS </option>-->
<!--                            <option  value="DRM">DRM-DRUMS </option>-->
<!--                            <option  value="GGK">GGK-GREAT GROSS </option>-->
<!--                            <option  value="GMS">GMS-GRAMMES </option>-->
<!--                            <option  value="GRS">GRS-GROSS </option>-->
<!--                            <option  value="GYD">GYD-GROSS YARDS </option>-->
<!--                            <option  value="KGS">KGS-KILOGRAMS </option>-->
<!--                            <option  value="KLR">KLR-KILOLITRE</option>-->
<!--                            <option  value="KME">KME-KILOMETRE </option>-->
<!--                            <option  value="LTR">LTR-LITRES</option>-->
<!--                            <option  value="MLT">MLT-MILILITRE</option>-->
<!--                            <option  value="MTR">MTR-METERS</option>-->
<!--                            <option  value="MTS">MTS-METRIC TON</option>-->
<!--                            <option  value="NOS">NOS-NUMBERS</option>-->
<!--                            <option  value="PAC">PAC-PACKS</option>-->
<!--                            <option  value="PCS">PCS-PIECES</option>-->
<!--                            <option  value="PRS">PRS-PAIRS</option>-->
<!--                            <option  value="QTL">QTL-QUINTAL</option>-->
<!--                            <option  value="ROL">ROL-ROLLS</option>-->
<!--                            <option  value="SET">SET-SETS</option>-->
<!--                            <option  value="SQF">SQF-SQUARE FEET</option>-->
<!--                            <option  value="SQM">SQM-SQUARE METERS</option>-->
<!--                            <option  value="SQY">SQY-SQUARE YARDS</option>-->
<!--                            <option  value="TBS">TBS-TABLETS</option>-->
<!--                            <option  value="TGM">TGM-TEN GROSS</option>-->
<!--                            <option  value="THD">THD-THOUSANDS</option>-->
<!--                            <option  value="TON">TON-TONNES</option>-->
<!--                            <option  value="TUB">TUB-TUBES</option>-->
<!--                            <option  value="UGS">UGS-US GALLONS</option>-->
<!--                            <option  value="UNT">UNT-UNITS</option>-->
<!--                            <option  value="YDS">YDS-YARDS</option>-->
<!--                            <option  value="OTH">OTH-OTHERS</option>-->
<!--                            <option value="Test">Test - ER Scenario</option>-->
<!--                        </select>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label class="m-cir reg " for="total_quantity">Total Quantity</label>
                        <input class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" name="total_quantity" id="total_quantity" required="" >
                    </div>
                    <div class="col-sm-4">
                        <label class="m-cir reg " for="rate">Total value (₹)</label>
                        <input class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" name="rate" id="rate" required="" >
                    </div>
                    <div class="col-sm-4">
                        <label class="m-cir reg " for="total_taxable_value">Total taxable value (₹)</label>
                        <input class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" name="total_taxable_value" id="total_taxable_value" required="" >
                    </div>
<!--                    <div class="col-sm-4">-->
<!--                        <label class="m-cir reg" for="rate">Rate (%)</label>-->
<!--                        <select name="rate" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" id="rate" required="" >-->
<!--                            <option value="" selected="selected">Select</option>-->
<!--                            <option label="0" value="number:0">0</option>-->
<!--                            <option label="0.1" value="number:0.1">0.1</option>-->
<!--                            <option label="0.25" value="number:0.25">0.25</option>-->
<!--                            <option label="1" value="number:1">1</option>-->
<!--                            <option label="1.5" value="number:1.5">1.5</option>-->
<!--                            <option label="3" value="number:3">3</option>-->
<!--                            <option label="5" value="number:5">5</option>-->
<!--                            <option label="7.5" value="number:7.5">7.5</option>-->
<!--                            <option label="12" value="number:12">12</option>-->
<!--                            <option label="18" value="number:18">18</option>-->
<!--                            <option label="28" value="number:28">28</option>-->
<!--                        </select>-->
<!--                    </div>-->
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label class="reg m-cir" for="integrated_tax">Integrated tax (₹)</label>
                        <input class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" name="integrated_tax" id="integrated_tax" required="required" >
                    </div>
                    <div class="col-sm-4">
                        <label class="reg m-cir" for="central_tax">Central tax (₹)</label>
                        <input class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" name="central_tax" id="central_tax" required="required" >
                    </div>
                    <div class="col-sm-4">
                        <label class="reg m-cir" for="state_tax">State/UT tax (₹)</label>
                        <input class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" name="state_tax" id="state_tax" required="required" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label class="reg m-cir" for="cess">Cess (₹)</label>
                        <input class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" name="cess" id="cess" required="required" >
                    </div>
                </div>
                <input type="hidden" name="question_id"
                       value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                <input type="hidden" name="type" id="type"
                       value="hsn">
<!--                    <input type="hidden" name="focus_key" value="hsn">-->
                <div class="row mar-b">
                    <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                        <button type="button" class="btn btn-default">Back</button>
<!--                        <button type="button" class="btn btn-default">RESET</button>-->
                        <button type="submit" class="btn btn-primary" >ADD</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<?= $this->endSection(); ?>
