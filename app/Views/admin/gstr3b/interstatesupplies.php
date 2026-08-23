<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>3.2 Inter State Supplies</h5>
                    <div class="">
                        <a href="<?= base_url('admin/gstr3b/' . $question_id) ?>" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <?php
                    if (session()->getFlashdata('success')) {
                        echo '<div class="alert alert-success"><strong>Success!</strong> Action has successful.'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    }
                    ?>
                    <form id="form_validation" action="<?= base_url() . '/admin/gstr3b/inter-statement-supplies/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" />

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
                                                echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('place_of_supply_0_'.$i, ((!empty($form_data_0[$i]) && (isset($form_data_0[$i])) && isset($form_data_0[$i]['place_of_supply']) ) ? (($form_data_0[$i]['place_of_supply'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
<!--                                        <input name="place_of_supply_0_--><?//= $i ?><!--" value="--><?//= set_value('place_of_supply_0_'.$i, ((!empty($form_data_0) && (isset($form_data_0[$i]))) ? $form_data_0[$i]['place_of_supply'] : '')); ?><!--" type="text"  class="form-control">-->
                                        <input type="hidden" name="pk_id_0_<?= $i ?>" value="<?= ((!empty($form_data_0) && (isset($form_data_0[$i])) && isset($form_data_0[$i]['iss_id'])) ? $form_data_0[$i]['iss_id'] : ''); ?>" />
                                    </td>
                                    <td>
                                        <input name="total_taxable_value_0_<?= $i ?>" value="<?= set_value('total_taxable_value_0_'.$i, ((!empty($form_data_0) && (isset($form_data_0[$i]))) ? $form_data_0[$i]['total_taxable_value'] : '')); ?>" type="text"  class="form-control">
                                    </td>
                                    <td>
                                        <input name="amount_of_integrated_tax_0_<?= $i ?>" value="<?= set_value('amount_of_integrated_tax_0_'.$i, ((!empty($form_data_0) && (isset($form_data_0[$i]))) ? $form_data_0[$i]['amount_of_integrated_tax'] : '')); ?>" type="text"  class="form-control">
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
                                        <select name="place_of_supply_1_<?= $i ?>" class="form-control" id="place_of_supply_0_<?= $i ?>">
                                            <option value="" disabled="" selected="selected">Select</option>
                                            <?php
                                            foreach ($pos_list as $k => $value) {
                                                echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('place_of_supply_1_'.$i, ((!empty($form_data_1[$i]) && (isset($form_data_1[$i])) && isset($form_data_1[$i]['place_of_supply']) ) ? (($form_data_1[$i]['place_of_supply'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
<!--                                        <input name="place_of_supply_1_--><?//= $i ?><!--" value="--><?//= set_value('place_of_supply_1_'.$i, ((!empty($form_data_1) && (isset($form_data_1[$i]))) ? $form_data_1[$i]['place_of_supply'] : '')); ?><!--" type="text"  class="form-control">-->
                                        <input type="hidden" name="pk_id_1_<?= $i ?>" value="<?= ((!empty($form_data_1) && (isset($form_data_1[$i])) && isset($form_data_1[$i]['iss_id'])) ? $form_data_1[$i]['iss_id'] : ''); ?>" />
                                    </td>
                                    <td>
                                        <input name="total_taxable_value_1_<?= $i ?>" value="<?= set_value('total_taxable_value_1_'.$i, ((!empty($form_data_1) && (isset($form_data_1[$i]))) ? $form_data_1[$i]['total_taxable_value'] : '')); ?>" type="text"  class="form-control">
                                    </td>
                                    <td>
                                        <input name="amount_of_integrated_tax_1_<?= $i ?>" value="<?= set_value('amount_of_integrated_tax_1_'.$i, ((!empty($form_data_1) && (isset($form_data_1[$i]))) ? $form_data_1[$i]['amount_of_integrated_tax'] : '')); ?>" type="text"  class="form-control">
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
                                                echo '<option label="' . $value . '" value="' . $k . '" ' . set_value("place_of_supply_2_" .$i, ((!empty($form_data_2[$i]) && (isset($form_data_2[$i])) && isset($form_data_2[$i]['place_of_supply']) ) ? (($form_data_2[$i]['place_of_supply'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
<!--                                        <input name="place_of_supply_2_--><?//= $i ?><!--" value="--><?//= set_value('place_of_supply_2_'.$i, ((!empty($form_data_2) && (isset($form_data_2[$i]))) ? $form_data_2[$i]['place_of_supply'] : '')); ?><!--" type="text"  class="form-control">-->
                                        <input type="hidden" name="pk_id_2_<?= $i ?>" value="<?= ((!empty($form_data_2) && (isset($form_data_2[$i])) && isset($form_data_2[$i]['iss_id'])) ? $form_data_2[$i]['iss_id'] : ''); ?>" />
                                    </td>
                                    <td>
                                        <input name="total_taxable_value_2_<?= $i ?>" value="<?= set_value('total_taxable_value_2_'.$i, ((!empty($form_data_2) && (isset($form_data_2[$i]))) ? $form_data_2[$i]['total_taxable_value'] : '')); ?>" type="text"  class="form-control">
                                    </td>
                                    <td>
                                        <input name="amount_of_integrated_tax_2_<?= $i ?>" value="<?= set_value('amount_of_integrated_tax_2_'.$i, ((!empty($form_data_2) && (isset($form_data_2[$i]))) ? $form_data_2[$i]['amount_of_integrated_tax'] : '')); ?>" type="text"  class="form-control">
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
                        <hr>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
