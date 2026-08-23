<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="<?= base_url('admin/gstr1/' . $question_id) ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="m-t-30">
                    <?php
                    if (session()->getFlashdata('success')) {
                        echo '<div class="alert alert-success"><strong>Success!</strong> Action has successful.'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    }
                    ?>
                    <form id="form_validation" action="<?= base_url() . '/admin/gstr1/document/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" />


                        <div class="m-t-30">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Invoice for outward supply</h5>
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th colspan="2">Sr. No</th>
                                    <th rowspan="2">Total number</th>
                                    <th rowspan="2">Cancelled</th>
                                    <th rowspan="2">Net issued</th>
    <!--                                <th width="120px;" rowspan="2">Action</th>-->
                                </tr>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                                <?php for ($i = 0; $i <= 5; $i++) { ?>
                                    <tr>
                                        <td>
                                            <input type="text" name="type1_no<?= $i ?>" value="<?= set_value('type1_no' . $i, ((!empty($form_data1) && (isset($form_data1[$i]))) ? $form_data1[$i]['doc_no'] : '')); ?>"  class="form-control">
                                            <input type="hidden" name="type1_pk_id<?= $i ?>" value="<?= ((!empty($form_data1) && (isset($form_data1[$i])) && isset($form_data1[$i]['document_id'])) ? $form_data1[$i]['document_id'] : ''); ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="type1_from<?= $i ?>" value="<?= set_value('type1_from' . $i, ((!empty($form_data1) && (isset($form_data1[$i]))) ? $form_data1[$i]['doc_from'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type1_to<?= $i ?>" value="<?= set_value('type1_to' . $i, ((!empty($form_data1) && (isset($form_data1[$i]))) ? $form_data1[$i]['doc_to'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type1_total_number<?= $i ?>" value="<?= set_value('type1_total_number' . $i, ((!empty($form_data1) && (isset($form_data1[$i]))) ? $form_data1[$i]['total_number'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type1_cancelled<?= $i ?>" value="<?= set_value('type1_cancelled' . $i, ((!empty($form_data1) && (isset($form_data1[$i]))) ? $form_data1[$i]['cancelled'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type1_net_issues<?= $i ?>" value="<?= set_value('type1_net_issues' . $i, ((!empty($form_data1) && (isset($form_data1[$i]))) ? $form_data1[$i]['net_issues'] : '')); ?>"  class="form-control">
                                        </td>
        <!--                                <td>
                                            <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>-->
                                    </tr>
                                <?php } ?>

                            </table>
                            <!--                        <button type="submit" class="btn btn-secondary">Add Document</button>-->
                            <button type="submit" class="btn btn-primary">Save Data</button>

                        </div>
                        <div class="m-t-30">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Invoice for inward supply from unregistered person</h5>
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th colspan="2">Sr. No</th>
                                    <th rowspan="2">Total number</th>
                                    <th rowspan="2">Cancelled</th>
                                    <th rowspan="2">Net issued</th>
    <!--                                <th width="120px;" rowspan="2">Action</th>-->
                                </tr>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                                <?php for ($i = 0; $i <= 5; $i++) { ?>
                                    <tr>
                                        <td>
                                            <input type="text" name="type2_no<?= $i ?>" value="<?= set_value('type2_no' . $i, ((!empty($form_data2) && (isset($form_data2[$i]))) ? $form_data2[$i]['doc_no'] : '')); ?>"  class="form-control">
                                            <input type="hidden" name="type2_pk_id<?= $i ?>" value="<?= ((!empty($form_data2) && (isset($form_data2[$i])) && isset($form_data2[$i]['document_id'])) ? $form_data2[$i]['document_id'] : ''); ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="type2_from<?= $i ?>" value="<?= set_value('type2_from' . $i, ((!empty($form_data2) && (isset($form_data2[$i]))) ? $form_data2[$i]['doc_from'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type2_to<?= $i ?>" value="<?= set_value('type2_to' . $i, ((!empty($form_data2) && (isset($form_data2[$i]))) ? $form_data2[$i]['doc_to'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type2_total_number<?= $i ?>" value="<?= set_value('type2_total_number' . $i, ((!empty($form_data2) && (isset($form_data2[$i]))) ? $form_data2[$i]['total_number'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type2_cancelled<?= $i ?>" value="<?= set_value('type2_cancelled' . $i, ((!empty($form_data2) && (isset($form_data2[$i]))) ? $form_data2[$i]['cancelled'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type2_net_issues<?= $i ?>" value="<?= set_value('type2_net_issues' . $i, ((!empty($form_data2) && (isset($form_data2[$i]))) ? $form_data2[$i]['net_issues'] : '')); ?>"  class="form-control">
                                        </td>
        <!--                                <td>
                                            <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>-->
                                    </tr>
                                <?php } ?>

                            </table>
                            <!--                        <button type="submit" class="btn btn-secondary">Add Document</button>-->
                            <button type="submit" class="btn btn-primary">Save Data</button>

                        </div>
                        <div class="m-t-30">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Revised Invoice </h5>
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th colspan="2">Sr. No</th>
                                    <th rowspan="2">Total number</th>
                                    <th rowspan="2">Cancelled</th>
                                    <th rowspan="2">Net issued</th>
    <!--                                <th width="120px;" rowspan="2">Action</th>-->
                                </tr>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                                <?php for ($i = 0; $i <= 5; $i++) { ?>
                                    <tr>
                                        <td>
                                            <input type="text" name="type3_no<?= $i ?>" value="<?= set_value('type3_no' . $i, ((!empty($form_data3) && (isset($form_data3[$i]))) ? $form_data3[$i]['doc_no'] : '')); ?>"  class="form-control">
                                            <input type="hidden" name="type3_pk_id<?= $i ?>" value="<?= ((!empty($form_data3) && (isset($form_data3[$i])) && isset($form_data3[$i]['document_id'])) ? $form_data3[$i]['document_id'] : ''); ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="type3_from<?= $i ?>" value="<?= set_value('type3_from' . $i, ((!empty($form_data3) && (isset($form_data3[$i]))) ? $form_data3[$i]['doc_from'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type3_to<?= $i ?>" value="<?= set_value('type3_to' . $i, ((!empty($form_data3) && (isset($form_data3[$i]))) ? $form_data3[$i]['doc_to'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type3_total_number<?= $i ?>" value="<?= set_value('type3_total_number' . $i, ((!empty($form_data3) && (isset($form_data3[$i]))) ? $form_data3[$i]['total_number'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type3_cancelled<?= $i ?>" value="<?= set_value('type3_cancelled' . $i, ((!empty($form_data3) && (isset($form_data3[$i]))) ? $form_data3[$i]['cancelled'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type3_net_issues<?= $i ?>" value="<?= set_value('type3_net_issues' . $i, ((!empty($form_data3) && (isset($form_data3[$i]))) ? $form_data3[$i]['net_issues'] : '')); ?>"  class="form-control">
                                        </td>
        <!--                                <td>
                                            <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>-->
                                    </tr>
                                <?php } ?>

                            </table>
                            <!--                        <button type="submit" class="btn btn-secondary">Add Document</button>-->
                            <button type="submit" class="btn btn-primary">Save Data</button>

                        </div>
                        <div class="m-t-30">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Debit Note</h5>
                            </div>

                            <table class="table table-bordered">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th colspan="2">Sr. No</th>
                                    <th rowspan="2">Total number</th>
                                    <th rowspan="2">Cancelled</th>
                                    <th rowspan="2">Net issued</th>
    <!--                                <th width="120px;" rowspan="2">Action</th>-->
                                </tr>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                                <?php for ($i = 0; $i <= 5; $i++) { ?>
                                    <tr>
                                        <td>
                                            <input type="text" name="type4_no<?= $i ?>" value="<?= set_value('type4_no' . $i, ((!empty($form_data4) && (isset($form_data4[$i]))) ? $form_data4[$i]['doc_no'] : '')); ?>"  class="form-control">
                                            <input type="hidden" name="type4_pk_id<?= $i ?>" value="<?= ((!empty($form_data4) && (isset($form_data4[$i])) && isset($form_data4[$i]['document_id'])) ? $form_data4[$i]['document_id'] : ''); ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="type4_from<?= $i ?>" value="<?= set_value('type4_from' . $i, ((!empty($form_data4) && (isset($form_data4[$i]))) ? $form_data4[$i]['doc_from'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type4_to<?= $i ?>" value="<?= set_value('type4_to' . $i, ((!empty($form_data4) && (isset($form_data4[$i]))) ? $form_data4[$i]['doc_to'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type4_total_number<?= $i ?>" value="<?= set_value('type4_total_number' . $i, ((!empty($form_data4) && (isset($form_data4[$i]))) ? $form_data4[$i]['total_number'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type4_cancelled<?= $i ?>" value="<?= set_value('type4_cancelled' . $i, ((!empty($form_data4) && (isset($form_data4[$i]))) ? $form_data4[$i]['cancelled'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type4_net_issues<?= $i ?>" value="<?= set_value('type4_net_issues' . $i, ((!empty($form_data4) && (isset($form_data4[$i]))) ? $form_data4[$i]['net_issues'] : '')); ?>"  class="form-control">
                                        </td>
        <!--                                <td>
                                            <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>-->
                                    </tr>
                                <?php } ?>

                            </table>
                            <!--                        <button type="submit" class="btn btn-secondary">Add Document</button>-->
                            <button type="submit" class="btn btn-primary">Save Data</button>

                        </div>

                        <div class="m-t-30">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Credit Note</h5>
                            </div>

                            <table class="table table-bordered">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th colspan="2">Sr. No</th>
                                    <th rowspan="2">Total number</th>
                                    <th rowspan="2">Cancelled</th>
                                    <th rowspan="2">Net issued</th>
                                    <!--                                <th width="120px;" rowspan="2">Action</th>-->
                                </tr>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                                <?php for ($i = 0; $i <= 5; $i++) { ?>
                                    <tr>
                                        <td>
                                            <input type="text" name="type5_no<?= $i ?>" value="<?= set_value('type5_no' . $i, ((!empty($form_data5) && (isset($form_data5[$i]))) ? $form_data5[$i]['doc_no'] : '')); ?>"  class="form-control">
                                            <input type="hidden" name="type5_pk_id<?= $i ?>" value="<?= ((!empty($form_data5) && (isset($form_data5[$i])) && isset($form_data5[$i]['document_id'])) ? $form_data5[$i]['document_id'] : ''); ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="type5_from<?= $i ?>" value="<?= set_value('type5_from' . $i, ((!empty($form_data5) && (isset($form_data5[$i]))) ? $form_data5[$i]['doc_from'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type5_to<?= $i ?>" value="<?= set_value('type5_to' . $i, ((!empty($form_data5) && (isset($form_data5[$i]))) ? $form_data5[$i]['doc_to'] : '')); ?>"  class="form-control " >
                                        </td>
                                        <td>
                                            <input type="text" name="type5_total_number<?= $i ?>" value="<?= set_value('type5_total_number' . $i, ((!empty($form_data5) && (isset($form_data5[$i]))) ? $form_data5[$i]['total_number'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type5_cancelled<?= $i ?>" value="<?= set_value('type5_cancelled' . $i, ((!empty($form_data5) && (isset($form_data5[$i]))) ? $form_data5[$i]['cancelled'] : '')); ?>"  class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="type5_net_issues<?= $i ?>" value="<?= set_value('type5_net_issues' . $i, ((!empty($form_data5) && (isset($form_data5[$i]))) ? $form_data5[$i]['net_issues'] : '')); ?>"  class="form-control">
                                        </td>
                                        <!--                                <td>
                                                                            <button class="btn btn-icon btn-danger btn-tone"  data-toggle="modal" data-target="#delete">
                                                                                <i class="anticon anticon-delete"></i>
                                                                            </button>
                                                                        </td>-->
                                    </tr>
                                <?php } ?>

                            </table>
                            <!--                        <button type="submit" class="btn btn-secondary">Add Document</button>-->
                            <button type="submit" class="btn btn-primary">Save Data</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
