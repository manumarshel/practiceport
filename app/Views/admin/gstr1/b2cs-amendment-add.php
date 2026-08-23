<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Amended B2C(Others) - Add Details</h5>
                </div>
                <div class="m-t-30">
                     <form id="form_validation" action="<?= base_url() . '/admin/gstr1/b2cs-amendment/add/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" />
                        <input type="hidden" name="pk_id" value="<?= $pk_id; ?>" />
                         <div class="row">
                             <div class="col form-group">
                                 <label for="">Is IGST </label>
                                 <input type="checkbox" name="is_igst" class="isIgst" <?= set_value('is_igst', ((!empty($form_data) && isset($form_data['is_igst'])) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                             </div>
                         </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">POS </label>
                                 <select name="original_pos" class="form-control" id="pos">
                                    <option value="" disabled="" selected="selected">Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('original_pos', ((!empty($form_data)) ? (($form_data['original_pos'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col form-group">
                                <label for="">Financial Year</label>
                               <select name="financial_year" id="" class="form-control">
                                    <?php
                                    foreach ($financial_period_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('financial_year', ((!empty($form_data)) ? (($form_data['financial_year'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
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
                                <label for="">Revised State Code (POS) </label>
                                <select name="revised_pos" class="form-control" id="pos">
                                    <option value="" disabled="" selected="selected">Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('revised_pos', ((!empty($form_data)) ? (($form_data['revised_pos'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col form-group">
                                <label for="">Supply Type</label>
                                <input name="supply_type" value="<?= set_value('supply_type', ((!empty($form_data['supply_type'])) ? $form_data['supply_type'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col"></div>
                        </div>
                        <h6>Item Details</h6>
                         <div class="display-item-table">
                             <?php if ( isset($form_data['is_igst']) && $form_data['is_igst'] == 1 ):
                                 echo view('admin/gstr1/cmps/item-details-igst', ['alternate_title' => true]);
                             else:
                                 echo view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => true]);
                             endif;?>
                         </div>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
