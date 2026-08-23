<div class="modal fade" id="AddnewModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Ad</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/add-ads" method="post" class="form" id="create_ad_form" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">URL</label>
                        <input type="text" name="ad_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="ad_img" name="ad_img" onchange="readURL(this);" accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <img id="blah" src="" class="hide" width="200" height="150"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="add_ad_btn" onclick="submitForm();" class="btn btn-primary">Add Now</button>
            </div>
        </div>
    </div>
</div>
<script>
    function readURL(input, id) {
        id = id || '#blah';
        if (input.files && input.files[0]) {
            $(id).removeClass('hide');
            var reader = new FileReader();

            reader.onload = function (e) {
                $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function submitForm() {
        $('#create_ad_form').submit();
    }
</script>
