<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Institutions</h5>
                    <div>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddnewModal">
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
                                <th>Title</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Package</th> 
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ( isset( $instututions) ):
                                // TODO: From courseId get course name
                                $ii =1;
                                foreach ( $instututions  as $package ):
                                    
                                    ?>
                                    <tr>
                                        <td>#<?=$ii++; ?></td>
                                        <td><?=$package->title; ?></td>
                                        <td><?=$package->email;?></td>
                                        <td><?=$package->mobile;?></td>
                                       <td>
<?php if (!empty($package->PKInstitutionPackageID)) : ?>

    <strong><?= esc($package->package_title) ?></strong>
    <br>

    <small>
        <?= date('d M Y', strtotime($package->start_date)) ?>
        -
        <?= date('d M Y', strtotime($package->end_date)) ?>
    </small>

    <br>

    <span class="badge badge-info">
        <?= $package->max_students ?> Students
    </span>

    <br>

    <?php
        $daysLeft = (strtotime($package->end_date) - time()) / 86400;
    ?>

    <?php if ($daysLeft > 0) : ?>
        <small class="text-success">
            <?= floor($daysLeft) ?> days left
        </small>
    <?php else : ?>
        <small class="text-danger">
            Expired
        </small>
    <?php endif; ?>

    <br>

    <button class="btn btn-sm btn-warning mt-2"
            onclick="renewPackage(<?= $package->PKInstitutionPackageID ?>)">
        <i class="anticon anticon-sync"></i>
        Renew
    </button>

<?php else : ?>

    <span class="text-muted">No Package Assigned</span>

<?php endif; ?>
</td>

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
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item"
                                                   onclick="openAssignModal(<?= $package->PKInstitutionID ?>)">
                                                   <i class="anticon anticon-plus"></i>
                                                   <span class="m-l-10">Assign Package</span>
                                                </a>
                                                <?php if (empty($package->PKInstitutionPackageID)) : ?>
                                                    <a href="javascript:void(0)"
   class="dropdown-item"
   onclick="deleteInstitution(<?= $package->PKInstitutionID ?>)">
   <i class="anticon anticon-delete"></i>
   <span class="m-l-10">Delete</span>
</a>
      <?php endif; ?>
      <!--<a href="<?= base_url(); ?>/admin/institution/edit/<?php echo $package->PKInstitutionID;?>" class="dropdown-item" type="button"><i class="anticon anticon-pencil"></i>-->
                                                        <!--<span class="m-l-10">Edit</span></a>-->
                                                      <a href="javascript:void(0)"
   class="dropdown-item"
   onclick="editInstitution(
       <?= $package->PKInstitutionID ?>,
       '<?= esc($package->title) ?>',
       '<?= esc($package->email) ?>',
       '<?= esc($package->mobile) ?>',
       '<?= esc($package->location) ?>',
       '<?= esc($package->logo) ?>'
   )">
   <i class="anticon anticon-pencil"></i>
   <span class="m-l-10">Edit</span>
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
 
 <!-- assign modal -->
 <div class="modal fade" id="assignPackageModal" tabindex="-1">
  <div class="modal-dialog">
    <form method="post" action="<?= base_url('admin/institution/assign_package') ?>" class="modal-content">
    
     
      <div class="modal-header">
        <h5 class="modal-title">Assign Package</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="anticon anticon-close"></i>
        </button>
      </div>

      <div class="modal-body">

        <input type="hidden" name="institution_id" id="institution_id">

        <div class="form-group">
          <label>Select Package</label>
          <select name="package_id" class="form-control" required>
            <?php foreach ($packages as $p): ?>
              <option value="<?= $p['PKPackageID'] ?>">
                <?= $p['title'] ?> |
                <?= $p['duration'] ?> months |
                <?= $p['license_number'] ?> students
              </option>
            <?php endforeach; ?>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Assign Package</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">
          Cancel
        </button>
      </div>

    </form>
  </div>
</div>
 
 <!-- assign modal ends here -->
 
 
 <div class="modal fade" id="AddnewModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Institution</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/institution/add') ?>"      method="post"      enctype="multipart/form-data"      id="create_package_form">
                 

   <input type="hidden" name="id" id="edit_id">
<input type="hidden" name="old_logo" id="old_logo">

    <div class="form-group">
        <label>Title</label>
        <input name="title" id="title" type="text" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input name="email" id="email" type="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Mobile</label>
        <input name="mobile" id="mobile" type="text" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Location</label>
        <input name="location" id="location" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label>Logo</label>
        <input name="logo" id="logo" type="file" class="form-control">

        <!-- Preview -->
        <div id="logo_preview" style="margin-top:10px;"></div>
    </div>
    

</form>
                <!--<form action="/admin/institution/add" method="post" class="form" id="create_package_form">-->
                <!--    <div class="form-group">-->
                <!--        <label for=""> Title</label>-->
                <!--        <input name="title" type="text" class="form-control" required>-->
                <!--    </div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="">Package</label>-->
                    <!--    <select name="package_id" id="" class="form-control" required>-->
                    <!--        <?php foreach($packages as $p){ ?>-->
                    <!--        <option value="<?php echo $p['PKPackageID']; ?>"><?php echo $p['title']; ?></option>-->
                    <!--        <?php } ?>-->
                           
                    <!--    </select>-->
                    <!--</div>-->
                <!--    <div class="form-group">-->
                <!--        <label for="">Email</label>-->
                <!--        <input name="email" type="email" class="form-control" required>-->
                <!--    </div>-->
                <!--     <div class="form-group">-->
                <!--        <label for="">Mobile</label>-->
                <!--        <input name="mobile" type="tel" class="form-control" required>-->
                <!--    </div>-->
                <!--     <div class="form-group">-->
                <!--        <label for="">Location</label>-->
                <!--        <input name="location" type="text" class="form-control">-->
                <!--    </div>-->
                <!--    <div class="form-group">-->
                <!--        <label for="">Logo</label>-->
                <!--        <input name="logo" type="file" class="form-control">-->
                <!--    </div>-->
                   
                   
                <!--</form>-->
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
function openAssignModal(institutionId) {
    document.getElementById('institution_id').value = institutionId;
    $('#assignPackageModal').modal('show');
}
</script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function deleteAssignedPackage(institutionPackageId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'This package will be removed from the institution!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href ="<?= base_url('admin/institution/delete_package') ?>/" + institutionPackageId;
        }
    });
} 
function renewPackage(id)
{
    if(confirm("Are you sure you want to renew this package?"))
    {
        fetch("<?= base_url('admin/renew-package') ?>", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: "id=" + id
        })
        .then(response => response.json())
        .then(data => {
            if(data.status == "success")
            {
                alert("Package Renewed Successfully!");
                location.reload();
            }
            else
            {
                alert("Something went wrong!");
            }
        });
    }
} 
 
function editInstitution(id, title, email, mobile, location, logo)
{
    // Fill fields
    $('#edit_id').val(id);
    $('#title').val(title);
    $('#email').val(email);
    $('#mobile').val(mobile);
    $('#location').val(location);
    $('#old_logo').val(logo);

    // Show logo preview
    if (logo) {
        $('#logo_preview').html(
           '<img src="<?= base_url('uploads/institutions') ?>/' + logo + '" width="100">'
        );
    } else {
        $('#logo_preview').html('');
    }

    // 👉 CHANGE ACTION TO UPDATE (ONLY HERE)
    $('#create_package_form').attr(
        'action',
        "<?= base_url('admin/institution/update') ?>/" + id
    );

    $('#action_btn').text('Update');
    $('#AddnewModal .modal-title').text('Edit Institution');

    $('#AddnewModal').modal('show');
}
</script>
<script>
function resetForm()
{
    $('#create_package_form')[0].reset();
    $('#edit_id').val('');
    $('#old_logo').val('');
    $('#logo_preview').html('');

    // 👉 BACK TO ADD
    $('#create_package_form').attr(
        'action',
        "<?= base_url('admin/institution/add') ?>"
    );

    $('#action_btn').text('Add Now');
    $('#AddnewModal .modal-title').text('Add New Institution');
} 
function deleteInstitution(id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: 'This institution will be permanently deleted!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= base_url('admin/institution/delete') ?>/" + id;
        }
    });
} 
</script>
<?= $this->endSection(); ?>

