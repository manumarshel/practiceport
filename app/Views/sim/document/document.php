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
                                <ng-switch on="$last"><span ng-switch-when="true"> Documents Issued</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-12 taxp">
                    <h4>Documents issued during the tax period</h4>
                    <button class="btn btn-primary btn-circle btn-sm pull-right" data-toggle="tooltip" title="Refresh"
                            data-ng-click="refresh()" data-ng-disabled="refbtn" style="
                          margin-top: 0px;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="tabpane aqua-blue">
            <div class="row">
              <span class="col-xs-12 col-sm-12">
              Note: Kindly click on save button after any modification( add, edit, delete) to save the changes
              </span>
                <button type="button" class="btn btn-default pull-right">Back</button>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <div class="docu">
                            <?php if ( isset($doc_type1)  ): ?>

                                <table class="table table-hover table-bordered">
                                    <caption>
                                        <h4>1. Invoices for outward supply: Entries</h4>
                                    </caption>
                                    <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center">No.</th>
                                        <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                        <th rowspan="2" class="text-center m-cir">Total number</th>
                                        <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                        <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">From</th>
                                        <th class="text-center">To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    foreach ($doc_type1 as $doc): ?>
                                        <tr>
                                            <td><?php echo $doc['doc_no']; ?></td>
                                            <td><?php echo $doc['doc_from']; ?></td>
                                            <td><?php echo $doc['doc_to']; ?></td>
                                            <td><?php echo $doc['total_number']; ?></td>
                                            <td><?php echo $doc['cancelled']; ?></td>
                                            <td><?php echo $doc['net_issues']; ?></td>
                                        </tr>

                                    <?php endforeach;
                                    ?>
                                    </tbody>
                                </table>

                            <?php endif; ?>
                            <table class="table inv exp tbl table-bordered">
                                <caption>
                                    <h4>1. Invoices for outward supply</h4>
                                </caption>
                                <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">No.</th>
                                    <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                    <th rowspan="2" class="text-center m-cir">Total number</th>
                                    <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                    <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    <!--                                    <th rowspan="2" class="text-center" >Action</th>-->
                                </tr>
                                <tr>
                                    <th class="text-center">From</th>
                                    <th class="text-center">To</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form name="form1" class="form1">
                                    <?php for ($i = 0; $i <= 5; $i++) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" name="type1_no<?= $i ?>" value=""
                                                       class="form-control">
                                                <input type="hidden" name="type1_pk_id<?= $i ?>" value=""/>
                                            </td>
                                            <td>
                                                <input type="text" name="type1_from<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type1_to<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type1_total_number<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type1_cancelled<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type1_net_issues<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <!--                                <td>
                                                                                <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                    <i class="anticon anticon-delete"></i>
                                                                                </button>
                                                                            </td>-->
                                        </tr>
                                    <?php } ?>
                                    <input type="hidden" name="question_id"
                                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                                    <input type="hidden" name="data_type" value="1" class="form-control">

                                </form>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="show-errors" id="show-errors1"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="button" class="btn btn-primary save_data" datatype="1"
                                            data-type="outword">Save Document
                                    </button>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="docu">
                            <?php if ( isset($doc_type2)  ): ?>

                                <table class="table table-hover table-bordered">
                                    <caption>
                                        <h4>2. Invoices for inward supply from unregistered person: Entries</h4>
                                    </caption>
                                    <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center">No.</th>
                                        <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                        <th rowspan="2" class="text-center m-cir">Total number</th>
                                        <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                        <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">From</th>
                                        <th class="text-center">To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    foreach ($doc_type2 as $doc): ?>
                                        <tr>
                                            <td><?php echo $doc['doc_no']; ?></td>
                                            <td><?php echo $doc['doc_from']; ?></td>
                                            <td><?php echo $doc['doc_to']; ?></td>
                                            <td><?php echo $doc['total_number']; ?></td>
                                            <td><?php echo $doc['cancelled']; ?></td>
                                            <td><?php echo $doc['net_issues']; ?></td>
                                        </tr>

                                    <?php endforeach;
                                    ?>
                                    </tbody>
                                </table>

                            <?php endif; ?>
                            <table class="table inv exp tbl table-bordered">
                                <caption>
                                    <h4>2. Invoices for inward supply from unregistered person</h4>
                                </caption>
                                <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">No.</th>
                                    <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                    <th rowspan="2" class="text-center m-cir">Total number</th>
                                    <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                    <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    <!--                                    <th rowspan="2" class="text-center" >Action</th>-->
                                </tr>
                                <tr>
                                    <th class="text-center">From</th>
                                    <th class="text-center">To</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form name="form2" class="form2">
                                    <?php for ($i = 0; $i <= 5; $i++) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" name="type2_no<?= $i ?>" value=""
                                                       class="form-control">
                                                <input type="hidden" name="type2_pk_id<?= $i ?>" value=""/>
                                            </td>
                                            <td>
                                                <input type="text" name="type2_from<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type2_to<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type2_total_number<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type2_cancelled<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type2_net_issues<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <!--                                <td>
                                                                                <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                    <i class="anticon anticon-delete"></i>
                                                                                </button>
                                                                            </td>-->
                                        </tr>
                                    <?php } ?>
                                    <input type="hidden" name="question_id"
                                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                                    <input type="hidden" name="data_type" value="2" class="form-control">
                                </form>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="show-errors" id="show-errors2"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="button" class="btn btn-primary save_data" datatype="2"
                                            data-type="inward">Save Document
                                    </button>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="docu">
                            <?php if ( isset($doc_type3)  ): ?>

                                <table class="table table-hover table-bordered">
                                    <caption>
                                        <h4>3. Revised Invoice: Entries</h4>
                                    </caption>
                                    <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center">No.</th>
                                        <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                        <th rowspan="2" class="text-center m-cir">Total number</th>
                                        <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                        <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">From</th>
                                        <th class="text-center">To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    foreach ($doc_type3 as $doc): ?>
                                        <tr>
                                            <td><?php echo $doc['doc_no']; ?></td>
                                            <td><?php echo $doc['doc_from']; ?></td>
                                            <td><?php echo $doc['doc_to']; ?></td>
                                            <td><?php echo $doc['total_number']; ?></td>
                                            <td><?php echo $doc['cancelled']; ?></td>
                                            <td><?php echo $doc['net_issues']; ?></td>
                                        </tr>

                                    <?php endforeach;
                                    ?>
                                    </tbody>
                                </table>

                            <?php endif; ?>
                            <table class="table inv exp tbl table-bordered">
                                <caption>
                                    <h4>3. Revised Invoice</h4>
                                </caption>
                                <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">No.</th>
                                    <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                    <th rowspan="2" class="text-center m-cir">Total number</th>
                                    <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                    <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    <!--                                    <th rowspan="2" class="text-center" >Action</th>-->
                                </tr>
                                <tr>
                                    <th class="text-center">From</th>
                                    <th class="text-center">To</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form name="form3" class="form3">
                                    <?php for ($i = 0; $i <= 5; $i++) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" name="type3_no<?= $i ?>" value=""
                                                       class="form-control">
                                                <input type="hidden" name="type3_pk_id<?= $i ?>" value=""/>
                                            </td>
                                            <td>
                                                <input type="text" name="type3_from<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type3_to<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type3_total_number<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type3_cancelled<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type3_net_issues<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <!--                                <td>
                                                                                <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                    <i class="anticon anticon-delete"></i>
                                                                                </button>
                                                                            </td>-->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <input type="hidden" name="question_id"
                                       value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                                <input type="hidden" name="data_type" value="3" class="form-control">
                            </table>
                            </table>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="show-errors" id="show-errors3"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="button" class="btn btn-primary save_data" datatype="3"
                                            data-type="revised">Save Document
                                    </button>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="docu">
                            <?php if ( isset($doc_type4)  ): ?>

                                <table class="table table-hover table-bordered">
                                    <caption>
                                        <h4>4. Debit Note: Entries</h4>
                                    </caption>
                                    <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center">No.</th>
                                        <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                        <th rowspan="2" class="text-center m-cir">Total number</th>
                                        <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                        <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">From</th>
                                        <th class="text-center">To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    foreach ($doc_type4 as $doc): ?>
                                        <tr>
                                            <td><?php echo $doc['doc_no']; ?></td>
                                            <td><?php echo $doc['doc_from']; ?></td>
                                            <td><?php echo $doc['doc_to']; ?></td>
                                            <td><?php echo $doc['total_number']; ?></td>
                                            <td><?php echo $doc['cancelled']; ?></td>
                                            <td><?php echo $doc['net_issues']; ?></td>
                                        </tr>

                                    <?php endforeach;
                                    ?>
                                    </tbody>
                                </table>

                            <?php endif; ?>
                            <table class="table inv exp tbl table-bordered">
                                <caption>
                                    <h4>4. Debit Note</h4>
                                </caption>
                                <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">No.</th>
                                    <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                    <th rowspan="2" class="text-center m-cir">Total number</th>
                                    <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                    <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    <th rowspan="2" class="text-center">Action</th>
                                </tr>
                                <tr>
                                    <th class="text-center">From</th>
                                    <th class="text-center">To</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form name="form4" class="form4">
                                    <?php for ($i = 0; $i <= 5; $i++) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" name="type4_no<?= $i ?>" value=""
                                                       class="form-control">
                                                <input type="hidden" name="type4_pk_id<?= $i ?>" value=""/>
                                            </td>
                                            <td>
                                                <input type="text" name="type4_from<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type4_to<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type4_total_number<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="cancelled<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type4_net_issues<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <!--                                <td>
                                                                                <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                    <i class="anticon anticon-delete"></i>
                                                                                </button>
                                                                            </td>-->
                                        </tr>
                                    <?php } ?>
                                    <input type="hidden" name="question_id"
                                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                                    <input type="hidden" name="data_type" value="4" class="form-control">
                                </form>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="show-errors" id="show-errors4"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="button" class="btn btn-primary save_data" datatype="4"
                                            data-type="debit">Save Document
                                    </button>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="docu">
                            <?php if ( isset($doc_type5)  ): ?>

                                <table class="table table-hover table-bordered">
                                    <caption>
                                        <h4>5. Credit Note: Entries</h4>
                                    </caption>
                                    <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center">No.</th>
                                        <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                        <th rowspan="2" class="text-center m-cir">Total number</th>
                                        <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                        <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">From</th>
                                        <th class="text-center">To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    foreach ($doc_type5 as $doc): ?>
                                        <tr>
                                            <td><?php echo $doc['doc_no']; ?></td>
                                            <td><?php echo $doc['doc_from']; ?></td>
                                            <td><?php echo $doc['doc_to']; ?></td>
                                            <td><?php echo $doc['total_number']; ?></td>
                                            <td><?php echo $doc['cancelled']; ?></td>
                                            <td><?php echo $doc['net_issues']; ?></td>
                                        </tr>

                                    <?php endforeach;
                                    ?>
                                    </tbody>
                                </table>

                            <?php endif; ?>
                            <table class="table inv exp tbl table-bordered">
                                <caption>
                                    <h4>5. Credit Note</h4>
                                </caption>
                                <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">No.</th>
                                    <th colspan="2" class="text-center m-cir">Sr. No.</th>
                                    <th rowspan="2" class="text-center m-cir">Total number</th>
                                    <th rowspan="2" class="text-center m-cir">Cancelled</th>
                                    <th rowspan="2" class="text-center m-cir">Net issued</th>
                                    <!--                                    <th rowspan="2" class="text-center" >Action</th>-->
                                </tr>
                                <tr>
                                    <th class="text-center">From</th>
                                    <th class="text-center">To</th>
                                </tr>
                                <tbody>
                                <form name="form5" class="form5">
                                    <?php for ($i = 0; $i <= 5; $i++) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" name="type5_no<?= $i ?>" value=""
                                                       class="form-control">
                                                <input type="hidden" name="type5_pk_id<?= $i ?>" value=""/>
                                            </td>
                                            <td>
                                                <input type="text" name="type5_from<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type5_to<?= $i ?>" value=""
                                                       class="form-control ">
                                            </td>
                                            <td>
                                                <input type="text" name="type5_total_number<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type5_cancelled<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="type5_net_issues<?= $i ?>" value=""
                                                       class="form-control">
                                            </td>
                                            <!--                                <td>
                                                                                <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                    <i class="anticon anticon-delete"></i>
                                                                                </button>
                                                                            </td>-->
                                        </tr>
                                    <?php } ?>
                                    <input type="hidden" name="question_id"
                                           value="<?php if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?>">
                                    <input type="hidden" name="data_type" value="5" class="form-control">
                                </form>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="show-errors" id="show-errors5"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="button" class="btn btn-primary save_data" datatype="5"
                                            data-type="credit">Save Document
                                    </button>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!--                        <div class="docu">-->
                        <!--                            <table class="table inv exp tbl table-bordered">-->
                        <!--                                <caption>-->
                        <!--                                    <h4>6. Receipt voucher</h4>-->
                        <!--                                </caption>-->
                        <!--                                <thead>-->
                        <!--                                <tr>-->
                        <!--                                    <th rowspan="2" class="text-center">No.</th>-->
                        <!--                                    <th colspan="2" class="text-center m-cir" >Sr. No.</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Total number</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Cancelled</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir">Net issued</th>-->
                        <!---->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <th class="text-center">From</th>-->
                        <!--                                    <th class="text-center">To</th>-->
                        <!--                                </tr>-->
                        <!--                                </thead>-->
                        <!--                                <tbody>-->
                        <!--                                <form name="form6" class="form6">-->
                        <!--                                --><?php //for ($i = 0; $i <= 5; $i++) { ?>
                        <!--                                    <tr>-->
                        <!--                                        <td>-->
                        <!--                                            <input type="text" name="type6_no-->
                        <? //= $i ?><!--" value=""  class="form-control">-->
                        <!--                                            <input type="hidden" name="type6_pk_id-->
                        <? //= $i ?><!--" value="" />-->
                        <!--                                        </td>-->
                        <!--                                        <td>-->
                        <!--                                            <input type="text" name="type6_from-->
                        <? //= $i ?><!--" value=""  class="form-control " >-->
                        <!--                                        </td>-->
                        <!--                                        <td>-->
                        <!--                                            <input type="text" name="type6_to-->
                        <? //= $i ?><!--" value=""  class="form-control " >-->
                        <!--                                        </td>-->
                        <!--                                        <td>-->
                        <!--                                            <input type="text" name="type6_total_number-->
                        <? //= $i ?><!--" value=""  class="form-control">-->
                        <!--                                        </td>-->
                        <!--                                        <td>-->
                        <!--                                            <input type="text" name="type6_cancelled-->
                        <? //= $i ?><!--" value=""  class="form-control">-->
                        <!--                                        </td>-->
                        <!--                                        <td>-->
                        <!--                                            <input type="text" name="type6_net_issues-->
                        <? //= $i ?><!--" value=""  class="form-control">-->
                        <!--                                        </td>-->
                        <!--                                        -->
                        <!--                                    </tr>-->
                        <!--                                --><?php //} ?>
                        <!--                                    <input type="hidden" name="question_id"-->
                        <!--                                           value="-->
                        <?php //if (isset($_COOKIE['question_id'])) echo $_COOKIE['question_id']; ?><!--">-->
                        <!--                                    <input type="hidden" name="data_type" value="6"  class="form-control">-->
                        <!--                                </form>-->
                        <!--                                </tbody>-->
                        <!--                            </table>-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-sm-12 text-right">-->
                        <!--                                    <button type="button" class="btn btn-primary save_data" datatype="6" data-type="receipt_voucher">Save Document</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <hr>-->
                        <!--                        </div>-->
                        <!--                        <div class="docu">-->
                        <!--                            <table class="table inv exp tbl table-bordered">-->
                        <!--                                <caption>-->
                        <!--                                    <h4>7. Payment Voucher</h4>-->
                        <!--                                </caption>-->
                        <!--                                <thead>-->
                        <!--                                <tr>-->
                        <!--                                    <th rowspan="2" class="text-center">No.</th>-->
                        <!--                                    <th colspan="2" class="text-center m-cir" >Sr. No.</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Total number</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Cancelled</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir">Net issued</th>-->
                        <!---->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <th class="text-center">From</th>-->
                        <!--                                    <th class="text-center">To</th>-->
                        <!--                                </tr>-->
                        <!--                                </thead>-->
                        <!--                                <tbody>-->
                        <!--                                <tr>-->
                        <!--                                    <td colspan="7">-->
                        <!--                                        <div class="alert alert-msg alert-info alert-dismissible" data-ng-bind="trans.LBL_NO_DOC">There are no documents to be displayed.</div>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                </tbody>-->
                        <!--                            </table>-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-sm-12 text-right">-->
                        <!--                                    <button type="button" class="btn btn-primary" id="abc">Add Document</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <hr>-->
                        <!--                        </div>-->
                        <!--                        <div class="docu">-->
                        <!--                            <table class="table inv exp tbl table-bordered">-->
                        <!--                                <caption>-->
                        <!--                                    <h4>8. Refund voucher</h4>-->
                        <!--                                </caption>-->
                        <!--                                <thead>-->
                        <!--                                <tr>-->
                        <!--                                    <th rowspan="2" class="text-center">No.</th>-->
                        <!--                                    <th colspan="2" class="text-center m-cir" >Sr. No.</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Total number</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Cancelled</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir">Net issued</th>-->
                        <!---->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <th class="text-center">From</th>-->
                        <!--                                    <th class="text-center">To</th>-->
                        <!--                                </tr>-->
                        <!--                                </thead>-->
                        <!--                                <tbody>-->
                        <!--                                <tr>-->
                        <!--                                    <td colspan="7">-->
                        <!--                                        <div class="alert alert-msg alert-info alert-dismissible" data-ng-bind="trans.LBL_NO_DOC">There are no documents to be displayed.</div>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                </tbody>-->
                        <!--                            </table>-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-sm-12 text-right">-->
                        <!--                                    <button type="button" class="btn btn-primary" id="abc">Add Document</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <hr>-->
                        <!--                        </div>-->
                        <!--                        <div class="docu">-->
                        <!--                            <table class="table inv exp tbl table-bordered">-->
                        <!--                                <caption>-->
                        <!--                                    <h4>9. Delivery Challan for job work</h4>-->
                        <!--                                </caption>-->
                        <!--                                <thead>-->
                        <!--                                <tr>-->
                        <!--                                    <th rowspan="2" class="text-center">No.</th>-->
                        <!--                                    <th colspan="2" class="text-center m-cir" >Sr. No.</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Total number</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Cancelled</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir">Net issued</th>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <th class="text-center">From</th>-->
                        <!--                                    <th class="text-center">To</th>-->
                        <!--                                </tr>-->
                        <!--                                </thead>-->
                        <!--                                <tbody>-->
                        <!--                                <tr>-->
                        <!--                                    <td colspan="7">-->
                        <!--                                        <div class="alert alert-msg alert-info alert-dismissible" data-ng-bind="trans.LBL_NO_DOC">There are no documents to be displayed.</div>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                </tbody>-->
                        <!--                            </table>-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-sm-12 text-right">-->
                        <!--                                    <button type="button" class="btn btn-primary" id="abc">Add Document</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <hr>-->
                        <!--                        </div>-->
                        <!--                        <div class="docu">-->
                        <!--                            <table class="table inv exp tbl table-bordered">-->
                        <!--                                <caption>-->
                        <!--                                    <h4>10. Delivery Challan for supply on approval</h4>-->
                        <!--                                </caption>-->
                        <!--                                <thead>-->
                        <!--                                <tr>-->
                        <!--                                    <th rowspan="2" class="text-center">No.</th>-->
                        <!--                                    <th colspan="2" class="text-center m-cir" >Sr. No.</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Total number</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Cancelled</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir">Net issued</th>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <th class="text-center">From</th>-->
                        <!--                                    <th class="text-center">To</th>-->
                        <!--                                </tr>-->
                        <!--                                </thead>-->
                        <!--                                <tbody>-->
                        <!--                                <tr>-->
                        <!--                                    <td colspan="7">-->
                        <!--                                        <div class="alert alert-msg alert-info alert-dismissible" data-ng-bind="trans.LBL_NO_DOC">There are no documents to be displayed.</div>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                </tbody>-->
                        <!--                            </table>-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-sm-12 text-right">-->
                        <!--                                    <button type="button" class="btn btn-primary" id="abc">Add Document</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <hr>-->
                        <!--                        </div>-->
                        <!--                        <div class="docu">-->
                        <!--                            <table class="table inv exp tbl table-bordered">-->
                        <!--                                <caption>-->
                        <!--                                    <h4>11. Delivery Challan in case of liquid gas</h4>-->
                        <!--                                </caption>-->
                        <!--                                <thead>-->
                        <!--                                <tr>-->
                        <!--                                    <th rowspan="2" class="text-center">No.</th>-->
                        <!--                                    <th colspan="2" class="text-center m-cir" >Sr. No.</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Total number</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Cancelled</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir">Net issued</th>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <th class="text-center">From</th>-->
                        <!--                                    <th class="text-center">To</th>-->
                        <!--                                </tr>-->
                        <!--                                </thead>-->
                        <!--                                <tbody>-->
                        <!--                                <tr>-->
                        <!--                                    <td colspan="7">-->
                        <!--                                        <div class="alert alert-msg alert-info alert-dismissible" data-ng-bind="trans.LBL_NO_DOC">There are no documents to be displayed.</div>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                </tbody>-->
                        <!--                            </table>-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-sm-12 text-right">-->
                        <!--                                    <button type="button" class="btn btn-primary" id="abc">Add Document</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <hr>-->
                        <!--                        </div>-->
                        <!--                        <div class="docu">-->
                        <!--                            <table class="table inv exp tbl table-bordered">-->
                        <!--                                <caption>-->
                        <!--                                    <h4>12. Delivery Challan in cases other than by way of supply (excluding at S no. 9 to 11)</h4>-->
                        <!--                                </caption>-->
                        <!--                                <thead>-->
                        <!--                                <tr>-->
                        <!--                                    <th rowspan="2" class="text-center">No.</th>-->
                        <!--                                    <th colspan="2" class="text-center m-cir" >Sr. No.</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Total number</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir" >Cancelled</th>-->
                        <!--                                    <th rowspan="2" class="text-center m-cir">Net issued</th>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <th class="text-center">From</th>-->
                        <!--                                    <th class="text-center">To</th>-->
                        <!--                                </tr>-->
                        <!--                                </thead>-->
                        <!--                                <tbody>-->
                        <!--                                <tr>-->
                        <!--                                    <td class="text-center">1</td>-->
                        <!--                                    <td class="text-center">-->
                        <!--                                        <input name="11_from_0" id="from" class="form-control newinv formedit ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" title="from" maxlength="16" required="">-->
                        <!--                                    </td>-->
                        <!--                                    <td class="text-center">-->
                        <!--                                        <input name="11_to_0" id="to" class="form-control newinv formedit ng-pristine ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-touched" title="to" maxlength="16" required="">-->
                        <!--                                    </td>-->
                        <!--                                    <td class="text-center">-->
                        <!--                                        <input name="11_totnum_0" id="totnum" class="form-control newinv formedit number ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" title="totnum" required="" maxlength="10">-->
                        <!--                                    </td>-->
                        <!--                                    <td class="text-center">-->
                        <!--                                        <input name="11_cancel_0" id="cancel" class="form-control newinv formedit number ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" title="cancel" required="" maxlength="10">-->
                        <!--                                    </td>-->
                        <!--                                    <td class="text-center">-->
                        <!--                                        <input name="net_issue" id="net_issue" class="form-control newinv formedit number ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" title="net_issue" required="" disabled="">-->
                        <!--                                    </td>-->
                        <!--                                    <td class="text-center newinv">-->
                        <!--                                        <button type="button" href="javascript:void(0);" class="btn btn-sm btn-danger" title="Delete">-->
                        <!--                                            <i class="fa fa-trash"></i><span class="sr-only">text</span></button>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                </tbody>-->
                        <!--                            </table>-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-sm-12 text-right">-->
                        <!--                                    <button type="button" class="btn btn-primary" id="abc">Add Document</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <hr>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<?= $this->endSection(); ?>
