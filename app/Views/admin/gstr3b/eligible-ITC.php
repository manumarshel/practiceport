<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>4. Eligible ITC</h5>
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

                    <form id="form_validation" action="<?= base_url() . '/admin/gstr3b/eligible-itc/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" />
                        <input type="hidden" name="pk_id" value="<?= ((!empty($form_data)) ? $form_data['itc_id'] : ''); ?>" />

                        <table class="table table-bordered">
                            <tr>
                                <th>Details</th>
                                <th>Integrated Tax (₹)</th>
                                <th>Central Tax (₹)</th>
                                <th>State/UT Tax (₹)</th>
                                <th>CESS (₹)</th>
                            </tr>
                            <tr>
                                <td><strong>(A) ITC Available (whether in full or part)</strong></td>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td>(1) Import of goods</td>
                                <td><input name="available_import_goods_integrated_tax" id="available_import_goods_integrated_tax" value="<?= set_value('available_import_goods_integrated_tax', ((!empty($form_data['available_import_goods_integrated_tax'])) ? $form_data['available_import_goods_integrated_tax'] : '')); ?>" type="text" class="form-control sectiona sectionait"></td>
                                <td><input type="text" class="form-control" disabled=""></td>
                                <td><input type="text" class="form-control" disabled=""></td>
                                <td><input name="available_import_goods_cess" id="available_import_goods_cess" value="<?= set_value('available_import_goods_cess', ((!empty($form_data['available_import_goods_cess'])) ? $form_data['available_import_goods_cess'] : '')); ?>" type="text" class="form-control sectiona sectionacss"></td>
                            </tr>
                            <tr>
                                <td>(2) Import of services</td>
                                <td><input name="available_import_services_integrated_tax" id="available_import_services_integrated_tax" value="<?= set_value('available_import_services_integrated_tax', ((!empty($form_data['available_import_services_integrated_tax'])) ? $form_data['available_import_services_integrated_tax'] : '')); ?>" type="text" class="form-control sectiona sectionait"></td>
                                <td><input type="text" class="form-control" disabled=""></td>
                                <td><input type="text" class="form-control" disabled=""></td>
                                <td><input name="available_import_services_cess" id="available_import_services_cess" value="<?= set_value('available_import_services_cess', ((!empty($form_data['available_import_services_cess'])) ? $form_data['available_import_services_cess'] : '')); ?>" type="text" class="form-control sectiona sectionacss"></td>
                            </tr>
                            <tr>
                                <td>(3) Inward supplies liable to reverse charge (other than 1&2 above</td>
                                <td><input name="available_reverse_integrated_tax" id="available_reverse_integrated_tax" value="<?= set_value('available_reverse_integrated_tax', ((!empty($form_data['available_reverse_integrated_tax'])) ? $form_data['available_reverse_integrated_tax'] : '')); ?>" type="text" class="form-control sectiona sectionait"></td>
                                <td><input name="available_reverse_central_tax" id="available_reverse_central_tax" value="<?= set_value('available_reverse_central_tax', ((!empty($form_data['available_reverse_central_tax'])) ? $form_data['available_reverse_central_tax'] : '')); ?>" type="text" class="form-control sectiona sectionact"></td>
                                <td><input name="available_reverse_state_tax" id="available_reverse_state_tax" value="<?= set_value('available_reverse_state_tax', ((!empty($form_data['available_reverse_state_tax'])) ? $form_data['available_reverse_state_tax'] : '')); ?>" type="text" class="form-control sectiona sectionast"></td>
                                <td><input name="available_reverse_cess" id="available_reverse_cess" value="<?= set_value('available_reverse_cess', ((!empty($form_data['available_reverse_cess'])) ? $form_data['available_reverse_cess'] : '')); ?>" type="text" class="form-control sectiona sectionacss"></td>
                            </tr>
                            <tr>
                                <td>(4) Inward supplies from ISD</td>
                                <td><input name="available_isd_integrated_tax" id="available_isd_integrated_tax" value="<?= set_value('available_isd_integrated_tax', ((!empty($form_data['available_isd_integrated_tax'])) ? $form_data['available_isd_integrated_tax'] : '')); ?>" type="text" class="form-control sectiona sectionait"></td>
                                <td><input name="available_isd_central_tax" id="available_isd_central_tax" value="<?= set_value('available_isd_central_tax', ((!empty($form_data['available_isd_central_tax'])) ? $form_data['available_isd_central_tax'] : '')); ?>" type="text" class="form-control sectiona sectionact"></td>
                                <td><input name="available_isd_state_tax" id="available_isd_state_tax" value="<?= set_value('available_isd_state_tax', ((!empty($form_data['available_isd_state_tax'])) ? $form_data['available_isd_state_tax'] : '')); ?>" type="text" class="form-control sectiona sectionast"></td>
                                <td><input name="available_isd_cess" id="available_isd_cess" value="<?= set_value('available_isd_cess', ((!empty($form_data['available_isd_cess'])) ? $form_data['available_isd_cess'] : '')); ?>" type="text" class="form-control sectiona sectionacss"></td>
                            </tr>
                            <tr>
                                <td>(5) All other ITC</td>
                                <td><input name="available_itc_integrated_tax" id="available_itc_integrated_tax" value="<?= set_value('available_itc_integrated_tax', ((!empty($form_data['available_itc_integrated_tax'])) ? $form_data['available_itc_integrated_tax'] : '')); ?>" type="text" class="form-control sectiona sectionait"></td>
                                <td><input name="available_itc_central_tax" id="available_itc_central_tax" value="<?= set_value('available_itc_central_tax', ((!empty($form_data['available_itc_central_tax'])) ? $form_data['available_itc_central_tax'] : '')); ?>" type="text" class="form-control sectiona sectionact"></td>
                                <td><input name="available_itc_state_tax" id="available_itc_state_tax" value="<?= set_value('available_itc_state_tax', ((!empty($form_data['available_itc_state_tax'])) ? $form_data['available_itc_state_tax'] : '')); ?>" type="text" class="form-control sectiona sectionast"></td>
                                <td><input name="available_itc_cess" id="available_itc_cess" value="<?= set_value('available_itc_cess', ((!empty($form_data['available_itc_cess'])) ? $form_data['available_itc_cess'] : '')); ?>" type="text" class="form-control sectiona sectionacss"></td>
                            </tr>
                            <tr>
                                <td><strong>(B) ITC Reversed</strong></td>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td>(1) As per Rule 42&43 of CGST/SGST rules</td>
                                <td><input name="itc_rules_integrated_tax" value="<?= set_value('itc_rules_integrated_tax', ((!empty($form_data['itc_rules_integrated_tax'])) ? $form_data['itc_rules_integrated_tax'] : '')); ?>" type="text" class="form-control sectionb sectionbit"></td>
                                <td><input name="itc_rules_central_tax" value="<?= set_value('itc_rules_central_tax', ((!empty($form_data['itc_rules_central_tax'])) ? $form_data['itc_rules_central_tax'] : '')); ?>" type="text" class="form-control sectionb sectionbct"></td>
                                <td><input name="itc_rules_statet_tax" value="<?= set_value('itc_rules_statet_tax', ((!empty($form_data['itc_rules_statet_tax'])) ? $form_data['itc_rules_statet_tax'] : '')); ?>" type="text" class="form-control sectionb sectionbst"></td>
                                <td><input name="itc_rules_cess" value="<?= set_value('itc_rules_cess', ((!empty($form_data['itc_rules_cess'])) ? $form_data['itc_rules_cess'] : '')); ?>" type="text" class="form-control sectionb sectionbcss"></td>
                            </tr>
                            <tr>
                                <td>(2) Others</td>
                                <td><input name="itc_others_integrated_tax" value="<?= set_value('itc_others_integrated_tax', ((!empty($form_data['itc_others_integrated_tax'])) ? $form_data['itc_others_integrated_tax'] : '')); ?>" type="text" class="form-control sectionb sectionbit"></td>
                                <td><input name="itc_others_central_tax" value="<?= set_value('itc_others_central_tax', ((!empty($form_data['itc_others_central_tax'])) ? $form_data['itc_others_central_tax'] : '')); ?>" type="text" class="form-control sectionb sectionbct"></td>
                                <td><input name="itc_others_state_tax" value="<?= set_value('itc_others_state_tax', ((!empty($form_data['itc_others_state_tax'])) ? $form_data['itc_others_state_tax'] : '')); ?>" type="text" class="form-control sectionb sectionbst"></td>
                                <td><input name="itc_others_cess" value="<?= set_value('itc_others_cess', ((!empty($form_data['itc_others_cess'])) ? $form_data['itc_others_cess'] : '')); ?>" type="text" class="form-control sectionb sectionbcss"></td>
                            </tr>
                            <tr>
                                <td><strong>(C)Net ITC Available (A) - (B) </strong></td>
                                <td><input name="itc_available_ab_integrated_tax" id="itc_available_ab_integrated_tax" value="<?= set_value('itc_available_ab_integrated_tax', ((!empty($form_data['itc_available_ab_integrated_tax'])) ? $form_data['itc_available_ab_integrated_tax'] : '')); ?>" type="text" class="form-control sectioncit"></td>
                                <td><input name="itc_available_ab_central_tax" id="itc_available_ab_central_tax" value="<?= set_value('itc_available_ab_central_tax', ((!empty($form_data['itc_available_ab_central_tax'])) ? $form_data['itc_available_ab_central_tax'] : '')); ?>" type="text" class="form-control sectionc sectioncct"></td>
                                <td><input name="itc_available_ab_state_tax" id="itc_available_ab_state_tax" value="<?= set_value('itc_available_ab_state_tax', ((!empty($form_data['itc_available_ab_state_tax'])) ? $form_data['itc_available_ab_state_tax'] : '')); ?>" type="text" class="form-control sectionc sectioncst"></td>
                                <td><input name="itc_available_ab_cess" id="itc_available_ab_cess" value="<?= set_value('itc_available_ab_cess', ((!empty($form_data['itc_available_ab_cess'])) ? $form_data['itc_available_ab_cess'] : '')); ?>" type="text" class="form-control sectionc sectionccs"></td>
                            </tr>
                            <tr>
                                <td><strong>(D) InellgIble ITC</strong></td>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td>(1) AS per section 17(5)</td>
                                <td><input name="IneligIble_itc_sec17_integrated_tax" value="<?= set_value('IneligIble_itc_sec17_integrated_tax', ((!empty($form_data['IneligIble_itc_sec17_integrated_tax'])) ? $form_data['IneligIble_itc_sec17_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="IneligIble_itc_sec17_central_tax" value="<?= set_value('IneligIble_itc_sec17_central_tax', ((!empty($form_data['IneligIble_itc_sec17_central_tax'])) ? $form_data['IneligIble_itc_sec17_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="IneligIble_itc_sec17_state_tax" value="<?= set_value('IneligIble_itc_sec17_state_tax', ((!empty($form_data['IneligIble_itc_sec17_state_tax'])) ? $form_data['IneligIble_itc_sec17_state_tax'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="IneligIble_itc_sec17_cess" value="<?= set_value('IneligIble_itc_sec17_cess', ((!empty($form_data['IneligIble_itc_sec17_cess'])) ? $form_data['IneligIble_itc_sec17_cess'] : '')); ?>" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>(2) Others</td>
                                <td><input name="IneligIble_itc_others_integrated_tax" value="<?= set_value('IneligIble_itc_others_integrated_tax', ((!empty($form_data['IneligIble_itc_others_integrated_tax'])) ? $form_data['IneligIble_itc_others_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="IneligIble_itc_others_central_tax" value="<?= set_value('IneligIble_itc_others_central_tax', ((!empty($form_data['IneligIble_itc_others_central_tax'])) ? $form_data['IneligIble_itc_others_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="IneligIble_itc_others_state_tax" value="<?= set_value('IneligIble_itc_others_state_tax', ((!empty($form_data['IneligIble_itc_others_state_tax'])) ? $form_data['IneligIble_itc_others_state_tax'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="IneligIble_itc_others_cess" value="<?= set_value('IneligIble_itc_others_cess', ((!empty($form_data['IneligIble_itc_others_cess'])) ? $form_data['IneligIble_itc_others_cess'] : '')); ?>" type="text" class="form-control"></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
