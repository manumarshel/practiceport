<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Amended Exports Invoices - Add Details</h5>
                </div>
                <div class="m-t-30">
                    <form id="form_validation" action="<?= base_url() . '/admin/gstr1/export-amendment/add/' . $question_id; ?>" method="post" class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" />
                        <input type="hidden" name="pk_id" value="<?= $pk_id; ?>" />
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
                                <label for="">Original Invoice no. </label>
                                <input name="invoice_number" value="<?= set_value('invoice_number', ((!empty($form_data['invoice_number'])) ? $form_data['invoice_number'] : '')); ?>"  type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Original Invoice date</label>
                                <input name="invoice_date" value="<?= set_value('invoice_date', ((!empty($form_data['invoice_date'])) ? display_date($form_data['invoice_date']) : '')); ?>" type="text" class="form-control datepicker" autocomplete="off" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Revised/Original Invoice no. </label>
                                <input name="revised_invoice_number" value="<?= set_value('revised_invoice_number', ((!empty($form_data['revised_invoice_number'])) ? $form_data['revised_invoice_number'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Revised/Original Invoice date</label>
                                <input name="revised_invoice_date" value="<?= set_value('revised_invoice_date', ((!empty($form_data['revised_invoice_date'])) ? display_date($form_data['revised_invoice_date']) : '')); ?>" type="text" class="form-control datepicker" autocomplete="off" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Port Code</label>
                                <input name="port_code" value="<?= set_value('port_code', ((!empty($form_data['port_code'])) ? $form_data['port_code'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Shipping Bill No./Bill of Export No.</label>
                                <input name="bill_number" value="<?= set_value('bill_number', ((!empty($form_data['bill_number'])) ? $form_data['bill_number'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Shipping Bill Date/Bill of Export Date</label>
                                <input name="bill_date" value="<?= set_value('bill_date', ((!empty($form_data['bill_date'])) ? display_date($form_data['bill_date']) : '')); ?>" type="text" class="form-control datepicker" autocomplete="off" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Total invoice value (₹)</label>
                                <input name="total_invoice_value" value="<?= set_value('total_invoice_value', ((!empty($form_data['total_invoice_value'])) ? $form_data['total_invoice_value'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Supply Type</label>
                                <input name="supply_type" value="<?= set_value('supply_type', ((!empty($form_data['supply_type'])) ? $form_data['supply_type'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">GST Payment</label>
                                <select name="gst_payment" id="" class="form-control">
                                    <option value="tax" <?= set_value('gst_payment', ((!empty($form_data)) ? (($form_data['gst_payment'] == 'tax') ? 'selected' : '') : '')); ?>>With payment of Tax</option>
                                    <option value="no_tax" <?= set_value('gst_payment', ((!empty($form_data)) ? (($form_data['gst_payment'] == 'no_tax') ? 'selected' : '') : '')); ?>>Without payment of Tax</option>
                                </select>
                            </div>
                            <div class="col"></div>
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
