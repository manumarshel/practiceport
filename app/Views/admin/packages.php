<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Packages</h5>
                    <div>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddnewModal" onclick="resetForm()">
                            Add New
                        </button>
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
                                <th>Visibility</th>
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
                                        
                                        <td><?php if($package->active =="1"){  echo "Active"; }else{ echo "Inactive"; } ?></td>
                                        <td><?=$exp_date;?></td>
                                        <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                    <i class="anticon anticon-ellipsis"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="javascript:void(0)"
                                                       class="dropdown-item" 
                                                       onclick="editPackage(
                                                        <?= $package->package_id ?>,
                                                        '<?= esc($package->title) ?>',
                                                        '<?= esc($package->custom_title ?? '') ?>',
                                                        '<?= esc($package->cost) ?>',
                                                        '<?= esc($package->duration) ?>',
                                                        '<?= esc(str_replace(["\r", "\n"], ["\\r", "\\n"], $package->description ?? '')) ?>',
                                                        '<?= $package->course_ids ?? '' ?>'
                                                    )">
                                                       <i class="anticon anticon-pencil"></i>
                                                       <span class="m-l-10">Edit</span>
                                                    </a>
                                                    <!--<button class="dropdown-item" type="button" data-questionId="<?=$package->package_id;?>" onclick>-->
                                                    <!--    <i class="anticon anticon-delete"></i>-->
                                                    <!--    <span class="m-l-10">Remove</span>-->
                                                    <!--</button>-->
                                                    <a href="<?= base_url(); ?>/admin/packages/delete_package/<?php echo $package->package_id;?>" class="dropdown-item" type="button"><i class="anticon anticon-delete"></i>
                                                        <span class="m-l-10">Remove</span></a>
                                                        
                                                        <?php if($package->active =="0"){ ?>
                                                         <a href="<?= base_url(); ?>/admin/packages/change_status/<?php echo $package->package_id;?>" class="dropdown-item" type="button"> 
                                                        <span class="m-l-10">Make Visible</span></a>
                                                        <?php }else{ ?>
                                                        <a href="<?= base_url(); ?>/admin/packages/change_status_deactivate/<?php echo $package->package_id;?>" class="dropdown-item" type="button"> 
                                                        <span class="m-l-10">Make Invisible</span></a>
                                                        <?php } ?>
                                                      
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
<?php include_once ('modals/package_modal.php'); ?>
<script>
function editPackage(id, title, custom_title, cost, duration, description, course_ids)
{
    $('#edit_id').val(id);
    $('#title').val(title);
    $('#custom_title').val(custom_title);
    $('#cost').val(cost);
    $('#duration').val(duration);
    $('#description').val(description);

    $('#course_id').val([]);

    if (course_ids) {
        let idsArray = course_ids.split(',').map(id => id.trim());
        $('#course_id').val(idsArray);
    }

    $('#course_id').trigger('change');

    $('#create_package_form').attr(
        'action',
        "<?= base_url('admin/packages/update') ?>/" + id
    );

    $('#action_btn').text('Update');
    $('#exampleModalLabel').text('Edit Package');

    $('#AddnewModal').modal('show');
}

function resetForm()
{
    $('#create_package_form')[0].reset();
    $('#edit_id').val('');

    $('#course_id option').prop('selected', false);

    $('#create_package_form').attr(
        'action',
        "<?= base_url('admin/packages/add') ?>"
    );

    $('#action_btn').text('Add Now');
    $('#exampleModalLabel').text('Add New Package');
}
</script>
<?= $this->endSection(); ?>

