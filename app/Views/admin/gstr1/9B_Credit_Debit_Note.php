<?php
if( ! isset($_9bcdn_is_eligible) ) $_9bcdn_is_eligible = '';
if( ! isset($_9bcdn_receiver_gstin) ) $_9bcdn_receiver_gstin = '';
if( ! isset($_9bcdn_receiver__name) ) $_9bcdn_receiver__name = '';
if( ! isset($_9bcdn_dc_note_date) ) $_9bcdn_dc_note_date = '';
if( ! isset($_9bcdn_dc_note_no) ) $_9bcdn_dc_note_no = '';
if( ! isset($_9bcdn_note_type) ) $_9bcdn_note_type = '';
if( ! isset($_9bcdn_note_value) ) $_9bcdn_note_value = '';
if( ! isset($_9bcdn_supply_type) ) $_9bcdn_supply_type = '';
if( ! isset($_9bcdn_pos) ) $_9bcdn_pos = '';
?>
<form action="" class="form" id="gstr-9bcdn-form">
    <div class="row">
        <div class="col form-group">
            <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
            <select name="is_eligible" id="" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="">Receiver GSTIN/UIN </label>
            <input type="text" name="receiver_gstin" class="form-control" value="<?= $_9bcdn_receiver_gstin; ?>" placeholder="">
        </div>
        <div class="col form-group">
            <label for="">Receiver Name</label>
            <input type="text" name="receiver__name" class="form-control" value="<?= $_9bcdn_receiver__name; ?>" placeholder="">
        </div>
        <div class="col form-group">
            <label for="">Debit/Credit Note No.</label>
            <input type="text" name="dc_note_no" class="form-control" value="<?= $_9bcdn_dc_note_date; ?>" placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="">Debit/Credit Note Date</label>
            <input type="text" name="dc_note_date" class="form-control datepicker" value="<?= $_9bcdn_dc_note_no; ?>" placeholder="">
        </div>
        <div class="col form-group">
            <label for="">Note Type</label>
            <input type="text" name="note_type" class="form-control" value="<?= $_9bcdn_note_type; ?>" placeholder="">
        </div>
        <div class="col form-group">
            <label for="">Note Value (₹)</label>
            <input type="text" name="note_value" class="form-control" value="<?= $_9bcdn_note_value; ?>" placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="">POS</label>
            <input type="text" name="supply_type" class="form-control" value="<?= $_9bcdn_supply_type; ?>" placeholder="">
        </div>
        <div class="col form-group">
            <label for="">Supply Type</label>
            <input type="text" name="pos" class="form-control" value="<?= $_9bcdn_pos; ?>" placeholder="">
        </div>
        <div class="col"></div>
    </div>
    <input type="hidden" name="question_id" value="<?php if(isset($question_id)) echo $question_id; ?>">
    <input type="hidden" name="9bcdn_id" id="9bcdn_id" value="<?php if(isset($_9bcdn_id)) echo $_9bcdn_id; ?>">
    <h6>Item Details</h6>
    <?php include ('cmps/_9bcdn_item_details.php'); ?>
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>
