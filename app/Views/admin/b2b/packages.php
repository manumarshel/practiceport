<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All B2B Packages</h5>
                    <div>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddnewModal">
                            Add New
                        </button>
<!--                        <button type="button"-->
<!--        class="btn btn-primary btn-sm"-->
<!--        data-toggle="modal"-->
<!--        data-target="#AddnewModal"-->
<!--        onclick="resetForm()">-->
<!--    Add New-->
<!--</button>-->
                    </div>
                </div>
                <?php if (session('msg')) : ?>
                    <div class="alert alert-info alert-dismissible">
                        <?= session('msg') ?>
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    </div>
                <?php endif ?>
                <div class="m-t-30">
                    <div class="table-responsive" >
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Custom Title</th>
                                <th>Cost</th>
                                <th>Duration</th>
                                <th>Course</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ( isset( $packages) ):
                                // TODO: From courseId get course name
                                $ii =1;
                                foreach ( $packages  as $package ):
                                    $exp_date = '';
                                    if ( $package->date_created  && $package->date_created  != '' ) {
                                        $exp_date = date('d M Y', strtotime($package->date_created ));
                                    }
                                    ?>
                                    <tr>
                                        <td>#<?=$ii++; ?></td>
                                        <td><?=$package->title; ?></td>
                                        <td><?=$package->custom_title; ?></td>
                                        <td><?=$package->cost;?></td>
                                        <td><?=$package->duration;?></td>
                                        <td><?= esc($package->course_names) ;?></td>
                                        <td><?=$exp_date;?></td>
                                        <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                    <i class="anticon anticon-ellipsis"></i>
                                                </a>
                                                <div class="dropdown-menu">
<!--                                                    <button class="dropdown-item" type="button">-->
<!--                                                        <i class="anticon anticon-edit"></i>-->
<!--                                                        <span class="m-l-10">Edit</span>-->
<!--                                                    </button>-->
                                                    <!--<button class="dropdown-item" type="button" data-questionId="<?=$package->PKPackageID;?>" onclick>-->
                                                    <!--    <i class="anticon anticon-delete"></i>-->
                                                    <!--    <span class="m-l-10">Remove</span>-->
                                                    <!--</button>-->
                                                    <a href="javascript:void(0)"
   class="dropdown-item" 
   onclick="editPackage(
    <?= $package->PKPackageID ?>,
    '<?= esc($package->title) ?>',
    '<?= esc($package->custom_title ?? '') ?>',
    '<?= esc($package->cost) ?>',
    '<?= esc($package->duration) ?>',
    '<?= esc($package->license_number ?? '') ?>',
    '<?= $package->course_ids ?? '' ?>'
)">
   <i class="anticon anticon-pencil"></i>
   <span class="m-l-10">Edit</span>
</a>

<a href="javascript:void(0)"
   class="dropdown-item"
   onclick="deletePackage(<?= $package->PKPackageID ?>)">
   <i class="anticon anticon-delete"></i>
   <span class="m-l-10">Remove</span>
</a>
                                                      
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach;endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
 
 
 <div class="modal fade" id="AddnewModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New B2B Package</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/b2b_package_add') ?>" method="post" class="form" id="create_package_form">
                    <div class="form-group">
                        <label for=""> Title</label>
                        <input name="title" id="title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Custom Title</label>
                        <input name="custom_title" id="custom_title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Course Type</label>
                        <select name="course_id[]" id="course_id" class="form-control" multiple>
    <?php foreach($course_items as $cc){ ?>
        <option value="<?= $cc['course_id']; ?>">
            <?= $cc['course_name']; ?>
        </option>
    <?php } ?>
</select>
                    </div>
                    <input type="hidden" name="id" id="edit_id">
                    <div class="form-group">
                        <div class="d-flex">
                            <div class="col-md-6">
                                <label for="">License Number</label>
                                <input name="license_number" id="license_number" type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Cost</label>
                                <input name="cost"  id="cost" type="text" class="form-control">
                            </div>
                        </div>
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
    
</script>

<script>
function editPackage(id, title, custom_title, cost, duration, license_number, course_ids)
{
    $('#edit_id').val(id);
    $('#title').val(title);
    $('#custom_title').val(custom_title);
    $('#cost').val(cost);
    $('#duration').val(duration);
    $('#license_number').val(license_number);

    // ✅ CLEAR first
    $('#course_id option').prop('selected', false);

    if (course_ids && course_ids.toString().trim() !== '') {
        let idsArray = course_ids.toString().split(',').map(id => id.trim());
        $.each(idsArray, function(index, val) {
            $('#course_id option[value="' + val + '"]').prop('selected', true);
        });
    }

    // Trigger change for any listeners
    $('#course_id').trigger('change');

    $('#create_package_form').attr(
        'action',
        "<?= base_url('admin/b2b_package_update') ?>/" + id
    );

    $('#action_btn').text('Update');
    $('#exampleModalLabel').text('Edit B2B Package');

    $('#AddnewModal').modal('show');
} 
function resetForm()
{
    $('#create_package_form')[0].reset();
    $('#edit_id').val('');

    $('#course_id option').prop('selected', false);

    $('#create_package_form').attr(
        'action',
        "<?= base_url('admin/b2b_package_add') ?>"
    );

    $('#action_btn').text('Add Now');
    $('#exampleModalLabel').text('Add New B2B Package');
}
function deletePackage(id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: 'This package will be deleted!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href =
                "<?= base_url('admin/b2b_package_delete') ?>/" + id;
        }
    });
}
</script>
<?= $this->endSection(); ?>

