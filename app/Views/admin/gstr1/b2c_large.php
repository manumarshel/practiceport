<?php
if( ! isset($b2c_id) ) $b2c_id = '';
if( ! isset($b2cl_invoice_no) ) $b2cl_invoice_no = '';
if( ! isset($b2cl_invoice_date) ) $b2cl_invoice_date = '';
if( ! isset($b2cl_supply_type) ) $b2cl_supply_type = '';
if( ! isset($b2cl_total_invoice_value) ) $b2cl_total_invoice_value = '';
if( ! isset($b2cl_is_eligible) ) $b2cl_is_eligible = '';
if( ! isset($question_id) ) $question_id = '';
if( ! isset($b2cl_pos) ) $b2cl_pos = '';
?>
<form action="" class="form" id="gstr-b2cl-form">
    <div class="row">
        <div class="col form-group">
            <label for="is_eligible">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
            <select name="is_eligible" id="is_eligible" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="">POS </label>
            <input type="text" name="pos" class="form-control" value="<?= $b2cl_pos; ?>" placeholder="">
        </div>
        <div class="col form-group">
            <label for="">Invoice no.</label>
            <input type="text" name="invoice_no" class="form-control" value="<?= $b2cl_invoice_no; ?>" placeholder="">
        </div>
        <div class="col form-group">
            <label for="">Invoice date</label>
            <input type="text" name="invoice_date" class="form-control datepicker" value="<?= $b2cl_invoice_date; ?>" placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="">Supply Type</label>
            <input type="text" name="supply_type" class="form-control" value="<?= $b2cl_supply_type; ?>" placeholder="">
        </div>
        <div class="col form-group">
            <label for="">Total invoice value (₹)</label>
            <input type="text" name="total_invoice_value" class="form-control" value="<?= $b2cl_total_invoice_value; ?>" placeholder="">
        </div>
        <div class="col"></div>
    </div>
    <input type="hidden" name="question_id" value="<?= $question_id; ?>">
    <input type="hidden" name="b2c_id" id="b2c_id" value="<?= $b2c_id; ?>">
    <h6>Item Details</h6>
    <?php include ('cmps/b2cl_item_details.php'); ?>
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>
