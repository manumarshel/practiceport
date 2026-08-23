<div class="modal fade" id="AddnewModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Video</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/add-videos" method="post" class="form" id="create_video_form">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Youtube URL</label>
                        <input type="text" name="url" class="form-control" required>
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

<div class="modal fade" id="editNewModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Video</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/update-videos" method="post" class="form" id="update_video_form">
                    <div class="form-group">
                        <label for="">Youtube URL</label>
                        <input type="text" name="youtubeUrl" id="youtubeUrl" class="form-control" required>
                        <input type="hidden" name="videoId" id="upVideoId" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="action_btn" onclick="updateForm();" class="btn btn-primary">Update Now</button>
            </div>
        </div>
    </div>
</div>

<script>
    function updateForm() {
        $('#update_video_form').submit();
    }

    function submitForm() {
        $('#create_video_form').submit();
    }
</script>
