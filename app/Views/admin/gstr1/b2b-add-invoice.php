<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>B2B - Add Invoice</h5>
                </div>
                <div class="m-t-30">
                    <form id="form_validation" action="<?= base_url().'/admin/gstr1/b2b/add-invoice/'.$question_id; ?>" method="post" class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id;?>" />
                        <input type="hidden" name="b2b_id" value="<?= $b2b_id;?>" />
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
                                <select name="eligible_to_taxed" id="" class="form-control">
                                    <option value="1" <?= set_value('eligible_to_taxed', ((!empty($form_data)) ? (($form_data['eligible_to_taxed'] == 1) ? 'selected' : '') : '')); ?> >Yes</option>
                                    <option value=0" <?= set_value('eligible_to_taxed', ((!empty($form_data)) ? (($form_data['eligible_to_taxed'] == 0) ? 'selected' : '') : '')); ?>>No</option>
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
                                <label for="">Receiver GSTIN/UIN</label>
                                <input type="text" name="receiver_gstin"  value="<?= set_value('receiver_gstin', ((!empty($form_data['receiver_gstin'])) ? $form_data['receiver_gstin'] : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Receiver Name</label>
                                <input type="text" name="receiver_name" class="form-control" value="<?= set_value('receiver_name', ((!empty($form_data['receiver_name'])) ? $form_data['receiver_name'] : '')); ?>" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Invoice no.</label>
                                <input type="text" name="invoice_number" class="form-control" value="<?= set_value('invoice_number', ((!empty($form_data['invoice_number'])) ? $form_data['invoice_number'] : '')); ?>" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Invoice date</label>
                                <input type="text" name="invoice_date" class="form-control datepicker" autocomplete="off" value="<?= set_value('invoice_date', ((!empty($form_data['invoice_date'])) ? display_date($form_data['invoice_date']) : '')); ?>" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="col form-group">
                                <label for="">POS </label>
                                <select name="pos" class="form-control" id="pos">
                                    <option value="" disabled="" <?= ((empty($form_data)) ? 'selected' : ''); ?>>Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option value="' . $k . '" ' . set_value('pos', ((!empty($form_data)) ? (($form_data['pos'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
<!--                                <input type="text" name="pos" class="form-control" value="--><?//= set_value('pos', ((!empty($form_data['pos'])) ? $form_data['pos'] : '')); ?><!--" placeholder="">-->
                            </div>
                            <div class="col form-group">
                                <label for="">Total invoice value (₹)</label>
                                <input type="text" name="total_invoce_value" class="form-control" value="<?= set_value('total_invoce_value', ((!empty($form_data['total_invoce_value'])) ? $form_data['total_invoce_value'] : '')); ?>" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Supply Type</label>
                                <input type="text" name="supply_type" class="form-control" value="<?= set_value('supply_type', ((!empty($form_data['supply_type'])) ? $form_data['supply_type'] : '')); ?>" placeholder="">
                            </div>
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
