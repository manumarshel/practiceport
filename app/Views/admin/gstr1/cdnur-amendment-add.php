<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Amended Credit / Debit Notes (Unregistered) - Add Note</h5>
                </div>
                <div class="m-t-30">
                    <form id="form_validation" action="<?= base_url() . '/admin/gstr1/cdnur-amendment/add/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" />
                        <input type="hidden" name="pk_id" value="<?= $pk_id; ?>" />
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
                                <select name="eligible_to_taxed" class="form-control">
                                    <option value="1" <?= set_value('eligible_to_taxed', ((!empty($form_data)) ? (($form_data['eligible_to_taxed'] == 1) ? 'selected' : '') : '')); ?>>Yes</option>
                                    <option value=0" <?= set_value('eligible_to_taxed', ((!empty($form_data)) ? (($form_data['eligible_to_taxed'] == 0) ? 'selected' : '') : '')); ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is IGST </label>
                                <input type="checkbox" name="is_igst" class="isIgst" <?= set_value('is_igst', ((!empty($form_data)) ? (($form_data['is_igst'] == 1) ? 'checked' : '') : '')); ?>>
                            </div>
                            <div class="col form-group">
                                <label for="">Financial Year</label>
                                <input type="text" name="financial_year" value="<?= set_value('financial_year', ((!empty($form_data['financial_year'])) ? $form_data['financial_year'] : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Invoice no.</label>
                                <input type="text" name="original_invoice_number" value="<?= set_value('original_invoice_number', ((!empty($form_data['original_invoice_number'])) ? $form_data['original_invoice_number'] : '')); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Original Debit/Credit Note No. </label>
                                <input name="invoice_number" value="<?= set_value('invoice_number', ((!empty($form_data['invoice_number'])) ? $form_data['invoice_number'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Original Debit/Credit Note Date</label>
                                <input name="invoice_date" value="<?= set_value('invoice_date', ((!empty($form_data['invoice_date'])) ? display_date($form_data['invoice_date']) : '')); ?>" type="text" class="form-control datepicker" autocomplete="off" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Revised Debit/Credit Note No. </label>
                                <input name="revised_invoice_number" value="<?= set_value('invoice_number', ((!empty($form_data['revised_invoice_number'])) ? $form_data['revised_invoice_number'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Revised Debit/Credit Note Date</label>
                                <input name="revised_invoice_date" value="<?= set_value('revised_invoice_date', ((!empty($form_data['revised_invoice_date'])) ? display_date($form_data['revised_invoice_date']) : '')); ?>" type="text" class="form-control datepicker" autocomplete="off" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Note Type</label>
                                <input name="note_type" value="<?= set_value('note_type', ((!empty($form_data['note_type'])) ? $form_data['note_type'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Note Value (₹)</label>
                                <input name="note_value" value="<?= set_value('note_value', ((!empty($form_data['note_value'])) ? $form_data['note_value'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">POS</label>
                                <select name="pos" class="form-control" id="pos">
                                    <option value="" disabled="" <?= ((empty($form_data)) ? 'selected' : ''); ?>>Select</option>
                                    <option label="35-Andaman and Nicobar Islands" value="string:35" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:35') ? 'selected' : '') : '')); ?>>35-Andaman and Nicobar Islands</option>
                                    <option label="37-Andhra Pradesh" value="string:37" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:37') ? 'selected' : '') : '')); ?>>37-Andhra Pradesh</option>
                                    <option label="12-Arunachal Pradesh" value="string:12" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:12') ? 'selected' : '') : '')); ?>>12-Arunachal Pradesh</option>
                                    <option label="18-Assam" value="string:18" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:18') ? 'selected' : '') : '')); ?>>18-Assam</option>
                                    <option label="10-Bihar" value="string:10" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:10') ? 'selected' : '') : '')); ?>>10-Bihar</option>
                                    <option label="04-Chandigarh" value="string:04" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:04') ? 'selected' : '') : '')); ?>>04-Chandigarh</option>
                                    <option label="22-Chhattisgarh" value="string:22" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:22') ? 'selected' : '') : '')); ?>>22-Chhattisgarh</option>
                                    <option label="26-Dadra and Nagar Haveli and Daman and Diu" value="string:26" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:26') ? 'selected' : '') : '')); ?>>26-Dadra and Nagar Haveli and Daman and Diu</option>
                                    <option label="25-Daman and Diu" value="string:25" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:25') ? 'selected' : '') : '')); ?>>25-Daman and Diu</option>
                                    <option label="07-Delhi" value="string:07" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:07') ? 'selected' : '') : '')); ?>>07-Delhi</option>
                                    <option label="96-Foreign Country" value="string:96" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:96') ? 'selected' : '') : '')); ?>>96-Foreign Country</option>
                                    <option label="30-Goa" value="string:30" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:30') ? 'selected' : '') : '')); ?>>30-Goa</option>
                                    <option label="24-Gujarat" value="string:24" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:24') ? 'selected' : '') : '')); ?>>24-Gujarat</option>
                                    <option label="06-Haryana" value="string:06" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:06') ? 'selected' : '') : '')); ?>>06-Haryana</option>
                                    <option label="02-Himachal Pradesh" value="string:02" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:02') ? 'selected' : '') : '')); ?>>02-Himachal Pradesh</option>
                                    <option label="01-Jammu and Kashmir" value="string:01" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:01') ? 'selected' : '') : '')); ?>>01-Jammu and Kashmir</option>
                                    <option label="20-Jharkhand" value="string:20" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:20') ? 'selected' : '') : '')); ?>>20-Jharkhand</option>
                                    <option label="29-Karnataka" value="string:29" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:29') ? 'selected' : '') : '')); ?>>29-Karnataka</option>
                                    <option label="32-Kerala" value="string:32" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:32') ? 'selected' : '') : '')); ?>>32-Kerala</option>
                                    <option label="38-Ladakh" value="string:38" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:38') ? 'selected' : '') : '')); ?>>38-Ladakh</option>
                                    <option label="31-Lakshadweep" value="string:31" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:31') ? 'selected' : '') : '')); ?>>31-Lakshadweep</option>
                                    <option label="23-Madhya Pradesh" value="string:23" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:23') ? 'selected' : '') : '')); ?>>23-Madhya Pradesh</option>
                                    <option label="27-Maharashtra" value="string:27" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:27') ? 'selected' : '') : '')); ?>>27-Maharashtra</option>
                                    <option label="14-Manipur" value="string:14" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:14') ? 'selected' : '') : '')); ?>>14-Manipur</option>
                                    <option label="17-Meghalaya" value="string:17" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:17') ? 'selected' : '') : '')); ?>>17-Meghalaya</option>
                                    <option label="15-Mizoram" value="string:15" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:15') ? 'selected' : '') : '')); ?>>15-Mizoram</option>
                                    <option label="13-Nagaland" value="string:13" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:13') ? 'selected' : '') : '')); ?>>13-Nagaland</option>
                                    <option label="21-Odisha" value="string:21" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:21') ? 'selected' : '') : '')); ?>>21-Odisha</option>
                                    <option label="97-Other Territory" value="string:97" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:97') ? 'selected' : '') : '')); ?>>97-Other Territory</option>
                                    <option label="34-Puducherry" value="string:34" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:34') ? 'selected' : '') : '')); ?>>34-Puducherry</option>
                                    <option label="03-Punjab" value="string:03" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:03') ? 'selected' : '') : '')); ?>>03-Punjab</option>
                                    <option label="08-Rajasthan" value="string:08" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:08') ? 'selected' : '') : '')); ?>>08-Rajasthan</option>
                                    <option label="11-Sikkim" value="string:11" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:11') ? 'selected' : '') : '')); ?>>11-Sikkim</option>
                                    <option label="33-Tamil Nadu" value="string:33" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:33') ? 'selected' : '') : '')); ?>>33-Tamil Nadu</option>
                                    <option label="36-Telangana" value="string:36" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:36') ? 'selected' : '') : '')); ?>>36-Telangana</option>
                                    <option label="16-Tripura" value="string:16" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:16') ? 'selected' : '') : '')); ?>>16-Tripura</option>
                                    <option label="09-Uttar Pradesh" value="string:09" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:09') ? 'selected' : '') : '')); ?>>09-Uttar Pradesh</option>
                                    <option label="05-Uttarakhand" value="string:05" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:05') ? 'selected' : '') : '')); ?>>05-Uttarakhand</option>
                                    <option label="19-West Bengal" value="string:19" <?= set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == 'string:19') ? 'selected' : '') : '')); ?>>19-West Bengal</option>
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
