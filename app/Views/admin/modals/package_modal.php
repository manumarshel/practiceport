<div class="modal fade" id="AddnewModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Package</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/packages/add" method="post" class="form" id="create_package_form">
                    <input type="hidden" name="id" id="edit_id">
                    <div class="form-group">
                        <label for="">Package Title</label>
                        <input name="title" id="title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Custom Title</label>
                        <input name="custom_title" id="custom_title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Course Type</label>
                        <select name="course_id[]" id="course_id" class="form-control" multiple>
                            <?php foreach($course_items as $cc){ ?>
                            <option value="<?php echo $cc['course_id']; ?>"><?php echo $cc['course_name']; ?></option>
                            <?php } ?>
                            <!--<option value="1">Gstr1</option>-->
                            <!--<option value="2">Gstr3B</option>-->
                            <!--<option value="3">TDS</option>-->
                            <!--<option value="4">Gstr1+Gstr3B</option>-->
                            <!--<option value="5">Gstr1+TDS</option>-->
                            <!--<option value="6">Gstr3B+TDS</option>-->
                            <!--<option value="7">Gstr1+Gstr3B+TDS</option>-->
                            <!--<option value="8">Eway Bill</option>-->
                            <!--<option value="9">ESI</option>-->
                            <!--<option value="10">PF</option>-->
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Cost</label>
                        <input name="cost" id="cost" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Duration</label>
                        <select name="duration" id="duration" class="form-control">
                            <option value="1 month">1 month</option>
                            <option value="2 months">2 months</option>
                            <option value="3 months">3 months</option>
                            <option value="6 months">6 months</option>
                            <option value="9 months">9 months</option>
                            <option value="1 year">1 Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="action_btn" onclick="submitForm();" class="btn btn-primary">Add Now</button>
            </div>
        </div>
    </div>
</div>

<script>

    function submitForm() {
        $('#create_package_form').submit();
    }
    // window.onload = function() {
    //     if ( $('#expiry_date') )
    //         $('#expiry_date').datepicker();
    // }
</script>


