<div class="modal fade" id="AddnewModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Coupon</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/add-coupons" method="post" class="form" id="create_cpn_form">
                    <div class="form-group">
                        <label for="">Coupon Code   </label>
                        <input name="code" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Coupon Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="percent">Percentage</option>
                            <option value="fixed">Fixed Amount</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input name="amount" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Usage Limit</label>
                        <input name="usage_limit" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Expiry Date</label>
                        <input type="text" name="expiry_date" id="expiry_date" class="form-control">
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
        $('#create_cpn_form').submit();
    }
    window.onload = function() {
        if ( $('#expiry_date') )
            $('#expiry_date').datepicker();
    }
</script>


