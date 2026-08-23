<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5> B2C(Others) - Add Details</h5>
                </div>
                <div class="m-t-30">
                    <form id="form_validation" action="<?= base_url() . '/admin/gstr1/b2cs/add/' . $question_id; ?>"
                          method="post" class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>"/>
                        <input type="hidden" name="pk_id" value="<?= $pk_id; ?>"/>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is IGST </label>
                                <input type="checkbox" name="is_igst" class="is-Igst isIgst" <?= set_value('is_igst', ((!empty($form_data) && isset($form_data['is_igst'])) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">POS </label>
                                <select name="pos" class="form-control" id="pos">
                                    <option value="" disabled="" selected="selected">Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col form-group">
                                <label for="">Taxable Value</label>
                                <input name="total_invoice_value"
                                       value="<?= set_value('total_invoice_value', ((!empty($form_data['total_invoice_value'])) ? $form_data['total_invoice_value'] : '')); ?>"
                                       type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Return Filing Period</label>
                                <select name="return_filing_period" id="" class="form-control">
                                    <?php
                                    foreach ($quarter_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('return_filing_period', ((!empty($form_data)) ? (($form_data['return_filing_period'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Supply Type</label>
                                <input name="supply_type"
                                       value="<?= set_value('supply_type', ((!empty($form_data['supply_type'])) ? $form_data['supply_type'] : '')); ?>"
                                       type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Rate</label>
                                <select name="rate" id="rate" class="form-control">
                                    <?php
                                    foreach ($rate_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('rate', ((!empty($form_data)) ? (($form_data['rate'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Type</label>
                                <select name="data_type" class="form-control" id="data_type">
                                    <option value="0">OE</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group display-igst <?php if ( isset($form_data['is_igst']) && $form_data['is_igst'] == 1 ) echo ''; else echo 'hide'; ?>">
                                <label for="">IGST</label>
                                <input name="igst"
                                       value="<?= set_value('igst', ((!empty($form_data['igst'])) ? $form_data['igst'] : '')); ?>"
                                       type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-md-4 form-group display-cgst-sgst <?php if ( isset($form_data['is_igst']) && $form_data['is_igst'] == 1 ) echo 'hide'; else echo ''; ?>">
                                <label for="">CGST</label>
                                <input name="cgst"
                                       value="<?= set_value('cgst', ((!empty($form_data['cgst'])) ? $form_data['cgst'] : '')); ?>"
                                       type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-md-4 form-group display-cgst-sgst <?php if ( isset($form_data['is_igst']) && $form_data['is_igst'] == 1 ) echo 'hide'; else echo ''; ?>">
                                <label for="">SGST</label>
                                <input name="sgst"
                                       value="<?= set_value('sgst', ((!empty($form_data['sgst'])) ? $form_data['sgst'] : '')); ?>"
                                       type="text" class="form-control" placeholder="">
                            </div>
<!--                            <div class="col-md-4 display-cgst-sgst">-->
<!---->
<!---->
<!--                            </div>-->
                            <div class="col-md-4 form-group">
                                <label for="">CESS</label>
                                <input name="cess"
                                       value="<?= set_value('cess', ((!empty($form_data['cess'])) ? $form_data['cess'] : '')); ?>"
                                       type="text" class="form-control" placeholder="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
