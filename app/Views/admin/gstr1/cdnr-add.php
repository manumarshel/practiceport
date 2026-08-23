<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Credit/Debit Notes (Registered)- Add Note</h5>
                </div>
                <div class="m-t-30">
                     <form id="form_validation" action="<?= base_url() . '/admin/gstr1/'.$path.'/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" />
                        <input type="hidden" name="pk_id" value="<?= $pk_id; ?>" />
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
                                <select name="is_eligible" id="" class="form-control">
                                    <option value="1" <?= set_value('is_eligible', ((!empty($form_data)) ? (($form_data['is_eligible'] == 1) ? 'selected' : '') : '')); ?> >Yes</option>
                                    <option value=0" <?= set_value('is_eligible', ((!empty($form_data)) ? (($form_data['is_eligible'] == 0) ? 'selected' : '') : '')); ?>>No</option>
                                </select>
                            </div>
                        </div>
                         <div class="row">
                             <div class="col form-group">
                                 <label for="">Is IGST </label>
                                 <input type="checkbox" name="is_igst" class="isIgst" <?= set_value('is_igst', ((!empty($form_data) && isset($form_data['is_igst'])) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                             </div>
                         </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Receiver GSTIN/UIN </label>
                                <input type="text" name="receiver_gstin" value="<?= set_value('receiver_gstin', ((!empty($form_data['receiver_gstin'])) ? $form_data['receiver_gstin'] : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Receiver Name</label>
                                <input type="text" name="receiver__name" value="<?= set_value('receiver__name', ((!empty($form_data['receiver__name'])) ? $form_data['receiver__name'] : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Debit/Credit Note No.</label>
                                <input type="text" name="dc_note_no" value="<?= set_value('dc_note_no', ((!empty($form_data['dc_note_no'])) ? $form_data['dc_note_no'] : '')); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Debit/Credit Note Date</label>
                                <input type="text" name="dc_note_date" value="<?= set_value('dc_note_date', ((!empty($form_data['dc_note_date'])) ? $form_data['dc_note_date'] : '')); ?>" class="form-control datepicker" autocomplete="off" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="note_type">Note Type</label>
                                <select name="note_type" class="form-control ng-pristine ng-valid ng-empty ng-touched" id="note_type">
                                    <option value="Credit" <?=set_value('note_type', ((!empty($form_data)) ? (($form_data['note_type'] == "Credit") ? 'selected' : '') : '')); ?>>Credit</option>
                                    <option value="Debit" <?=set_value('note_type', ((!empty($form_data)) ? (($form_data['note_type'] == "Debit") ? 'selected' : '') : '')); ?>>Debit</option>
                                </select>
                            </div>
                            <div class="col form-group">
                                <label for="">Note Value (₹)</label>
                                <input type="text" name="note_value" value="<?= set_value('note_value', ((!empty($form_data['note_value'])) ? $form_data['note_value'] : '')); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">POS</label>
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
                                <label for="">Supply Type</label>
                                <input type="text" name="supply_type" value="<?= set_value('supply_type', ((!empty($form_data['supply_type'])) ? $form_data['supply_type'] : '')); ?>" class="form-control" placeholder="">
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
