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
                                <ng-switch on="$last"><span ng-switch-when="true"> Inter-state Supplies</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 taxp">
                    <h4>3.2 Of the supplies shown in 3.1 (a), details of inter-state supplies made to unregistered persons, composition taxable person and UIN holders</h4>
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
                    <span> Table 3.1(a), (b), (c) and (e) are auto-drafted based on values provided in GSTR-1/IFF. Whereas Table 3.1(d) is auto-drafted based on GSTR-2B.
                </span>
                </div>
                <form class="gstr3b">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <p class="uline alert-danger"><i class="fa fa-warning"></i>
                                <span>The information entered by you in cells highlighted in red is in variance with the auto-populated data. The liability has been computed based on the information declared by you in your FORM GSTR-1/IFF. </span>
                            </p>
                        </div>
                        <div class="rettbl-format">
                            <div class="table-responsive">
                                <h6>Supplies made to Unregistered Persons</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Place of Supply (State/UT)</th>
                                        <th>Total Taxable value (₹)</th>
                                        <th>Amount of Integrated Tax (₹)</th>
                                        <!--                                <th>Action</th>-->
                                    </tr>
                                    <?php for ($i = 0; $i <= 10; $i++) { ?>
                                        <tr>
                                            <td>
                                                <select name="place_of_supply_0_<?= $i ?>" class="form-control" id="place_of_supply_0_<?= $i ?>">
                                                    <option value="" disabled="" selected="selected">Select</option>
                                                    <?php
                                                    foreach ($pos_list as $k => $value) {
                                                        echo '<option label="' . $value . '" value="' . $k . '" ' .  '>' . $value . '</option>';
                                                    }
                                                    ?>
                                                </select>
<!--                                                <input name="place_of_supply_0_--><?//= $i ?><!--" value="--><?//= set_value('place_of_supply_0_'.$i, ((!empty($form_data_0) && (isset($form_data_0[$i]))) ? $form_data_0[$i]['place_of_supply'] : '')); ?><!--" type="text"  class="form-control">-->
                                                <input type="hidden" name="pk_id_0_<?= $i ?>" value="<?= ((!empty($form_data_0) && (isset($form_data_0[$i])) && isset($form_data_0[$i]['iss_id'])) ? $form_data_0[$i]['iss_id'] : ''); ?>" />
                                            </td>
                                            <td>
                                                <input name="total_taxable_value_0_<?= $i ?>" value="<?= set_value('total_taxable_value_0_'.$i, ((!empty($form_data_0) && (isset($form_data_0[$i]))) ? $form_data_0[$i]['total_taxable_value'] : '0.00')); ?>" type="text"  class="form-control">
                                            </td>
                                            <td>
                                                <input name="amount_of_integrated_tax_0_<?= $i ?>" value="<?= set_value('amount_of_integrated_tax_0_'.$i, ((!empty($form_data_0) && (isset($form_data_0[$i]))) ? $form_data_0[$i]['amount_of_integrated_tax'] : '0.00')); ?>" type="text"  class="form-control">
                                            </td>
                                            <!--                                    <td>
                                                                                    <button class="btn btn-icon btn-primary btn-tone">
                                                                                        <i class="anticon anticon-edit"></i>
                                                                                    </button>
                                                                                    <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                        <i class="anticon anticon-delete"></i>
                                                                                    </button>
                                                                                </td>-->
                                        </tr>
                                    <?php } ?>
                                </table>
                                <!--                        <div class="m-t-10 m-b-30">
                                                            <a href="#" class="btn btn-primary btn-sm">
                                                                Add New
                                                            </a>
                                                        </div>-->
                                <h6>Supplies made to Composition Taxable Persons</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Place of Supply (State/UT)</th>
                                        <th>Total Taxable value (₹)</th>
                                        <th>Amount of Integrated Tax (₹)</th>
                                        <!--                                <th>Actions</th>-->
                                    </tr>

                                    <?php for ($i = 0; $i <= 10; $i++) { ?>
                                        <tr>
                                            <td>
                                                <select name="place_of_supply_1_<?= $i ?>" class="form-control" id="place_of_supply_1_<?= $i ?>">
                                                    <option value="" disabled="" selected="selected">Select</option>
                                                    <?php
                                                    foreach ($pos_list as $k => $value) {
                                                        echo '<option label="' . $value . '" value="' . $k . '" ' .  '>' . $value . '</option>';
                                                    }
                                                    ?>
                                                </select>
<!--                                                <input name="place_of_supply_1_--><?//= $i ?><!--" value="--><?//= set_value('place_of_supply_1_'.$i, ((!empty($form_data_1) && (isset($form_data_1[$i]))) ? $form_data_1[$i]['place_of_supply'] : '')); ?><!--" type="text"  class="form-control">-->
                                                <input type="hidden" name="pk_id_1_<?= $i ?>" value="<?= ((!empty($form_data_1) && (isset($form_data_1[$i])) && isset($form_data_1[$i]['iss_id'])) ? $form_data_1[$i]['iss_id'] : ''); ?>" />
                                            </td>
                                            <td>
                                                <input name="total_taxable_value_1_<?= $i ?>" value="<?= set_value('total_taxable_value_1_'.$i, ((!empty($form_data_1) && (isset($form_data_1[$i]))) ? $form_data_1[$i]['total_taxable_value'] : '0.00')); ?>" type="text"  class="form-control">
                                            </td>
                                            <td>
                                                <input name="amount_of_integrated_tax_1_<?= $i ?>" value="<?= set_value('amount_of_integrated_tax_1_'.$i, ((!empty($form_data_1) && (isset($form_data_1[$i]))) ? $form_data_1[$i]['amount_of_integrated_tax'] : '0.00')); ?>" type="text"  class="form-control">
                                            </td>
                                            <!--                                    <td>
                                                                                    <button class="btn btn-icon btn-primary btn-tone">
                                                                                        <i class="anticon anticon-edit"></i>
                                                                                    </button>
                                                                                    <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                        <i class="anticon anticon-delete"></i>
                                                                                    </button>
                                                                                </td>-->
                                        </tr>
                                    <?php } ?>

                                </table>
                                <!--                        <div class="m-t-10 m-b-30">
                                                            <a href="#" class="btn btn-primary btn-sm">
                                                                Add New
                                                            </a>
                                                        </div>-->
                                <h6>Supplies made to UIN holders</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Place of Supply (State/UT)</th>
                                        <th>Total Taxable value (₹)</th>
                                        <th>Amount of Integrated Tax (₹)</th>
                                        <!--                                <th>Actions</th>-->
                                    </tr>
                                    <?php for ($i = 0; $i <= 10; $i++) { ?>
                                        <tr>
                                            <td>
                                                <select name="place_of_supply_2_<?= $i ?>" class="form-control" id="place_of_supply_2_<?= $i ?>">
                                                    <option value="" disabled="" selected="selected">Select</option>
                                                    <?php
                                                    foreach ($pos_list as $k => $value) {
                                                        echo '<option label="' . $value . '" value="' . $k . '" ' .  '>' . $value . '</option>';
                                                    }
                                                    ?>
                                                </select>
<!--                                                <input name="place_of_supply_2_--><?//= $i ?><!--" value="--><?//= set_value('place_of_supply_2_'.$i, ((!empty($form_data_2) && (isset($form_data_2[$i]))) ? $form_data_2[$i]['place_of_supply'] : '')); ?><!--" type="text"  class="form-control">-->
                                                <input type="hidden" name="pk_id_2_<?= $i ?>" value="<?= ((!empty($form_data_2) && (isset($form_data_2[$i])) && isset($form_data_2[$i]['iss_id'])) ? $form_data_2[$i]['iss_id'] : ''); ?>" />
                                            </td>
                                            <td>
                                                <input name="total_taxable_value_2_<?= $i ?>" value="<?= set_value('total_taxable_value_2_'.$i, ((!empty($form_data_2) && (isset($form_data_2[$i]))) ? $form_data_2[$i]['total_taxable_value'] : '0.00')); ?>" type="text"  class="form-control">
                                            </td>
                                            <td>
                                                <input name="amount_of_integrated_tax_2_<?= $i ?>" value="<?= set_value('amount_of_integrated_tax_2_'.$i, ((!empty($form_data_2) && (isset($form_data_2[$i]))) ? $form_data_2[$i]['amount_of_integrated_tax'] : '0.00')); ?>" type="text"  class="form-control">
                                            </td>
                                            <!--                                    <td>
                                                                                    <button class="btn btn-icon btn-primary btn-tone">
                                                                                        <i class="anticon anticon-edit"></i>
                                                                                    </button>
                                                                                    <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                        <i class="anticon anticon-delete"></i>
                                                                                    </button>
                                                                                </td>-->
                                        </tr>
                                    <?php } ?>
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
                           value="interstatesupplies">
                </form>
                <div class="row show-errors" id="show-errors">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
