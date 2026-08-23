<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5>Package Lessons Sequence (Drag & Drop)</h5>
                    <button class="btn btn-success btn-sm" id="btnSaveSequence" disabled>
                        <i class="anticon anticon-save m-r-5"></i> Save Sequence
                    </button>
                </div>

                <div class="row mb-4">
                    <!-- Package Type Selector -->
                    <div class="col-md-4 form-group">
                        <label for="packageTypeSelector" class="font-weight-bold">Package Type:</label>
                        <select class="form-control" id="packageTypeSelector">
                            <option value="normal">Normal Package</option>
                            <option value="b2b">B2B Package</option>
                        </select>
                    </div>

                    <!-- Package Selector -->
                    <div class="col-md-4 form-group">
                        <label for="packageSelector" class="font-weight-bold">Select Package:</label>
                        <select class="form-control" id="packageSelector">
                            <option value="">-- Select a Package --</option>
                            <?php if(!empty($packages)): foreach($packages as $p): ?>
                                <option value="<?= $p['package_id'] ?>"><?= $p['title'] ?></option>
                            <?php endforeach; endif; ?>
                        </select>
                    </div>

                    <!-- Category Selector -->
                    <div class="col-md-4 form-group">
                        <label for="categorySelector" class="font-weight-bold">Select Category:</label>
                        <select class="form-control" id="categorySelector" disabled>
                            <option value="">-- Select a Category --</option>
                        </select>
                    </div>
                </div>

                <div id="loader" class="text-center my-5" style="display:none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <div id="sequenceWrapper" style="display:none;">
                    <div class="alert alert-info mb-4" id="sequenceInfoMsg">
                        Drag items from <strong>Available Lessons</strong> to <strong>Selected Lessons</strong>. 
                        You can reorder the items in the Selected list. When done, click <strong>Save Sequence</strong>.
                    </div>
                    
                    <div class="row">
                        <!-- Left Column: Available Lessons -->
                        <div class="col-md-6">
                            <div class="card border">
                                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Available Lessons</h6>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary px-2 py-0" id="btnMoveAll" title="Move All to Selected">
                                            Move All <i class="anticon anticon-double-right"></i>
                                        </button>
                                        <span class="badge badge-secondary ml-2" id="countAvailable">0</span>
                                    </div>
                                </div>
                                <div class="p-3 border-bottom">
                                    <input type="text" class="form-control form-control-sm" id="searchAvailable" placeholder="Search available items...">
                                </div>
                                <div class="card-body p-2" style="height: 500px; overflow-y: auto;">
                                    <ul class="list-group" id="availableList" style="min-height: 50px;">
                                        <!-- Populated via AJAX -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Selected Lessons -->
                        <div class="col-md-6">
                            <div class="card border border-success">
                                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 text-white">Selected Lessons for Package</h6>
                                    <div>
                                        <button class="btn btn-sm btn-light text-danger px-2 py-0" id="btnRemoveAll" title="Remove All from Selected">
                                            <i class="anticon anticon-double-left"></i> Remove All
                                        </button>
                                        <span class="badge badge-light text-success ml-2" id="countSelected">0</span>
                                    </div>
                                </div>
                                <div class="card-body p-2 bg-light" style="height: 550px; overflow-y: auto;">
                                    <ul class="list-group" id="selectedList" style="min-height: 100%; padding-bottom: 50px;">
                                        <!-- Populated via AJAX -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="noItemsMsg" class="alert alert-warning" style="display:none;">
                    No videos or questions found for the selected category.
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

<script>
var normalPackages = <?= json_encode($packages ?? []) ?>;
var b2bPackages = <?= json_encode($b2b_packages ?? []) ?>;

window.onload = function() {
    var sortableAvailable = null;
    var sortableSelected = null;

    // Helper to build list items
    function buildListItem(item) {
        var badgeClass = item.type === 'video' ? 'badge-primary' : 'badge-warning text-dark';
        var iconClass = item.type === 'video' ? 'anticon-play-circle' : 'anticon-question-circle';
        
        var li = $('<li class="list-group-item d-flex justify-content-between align-items-center item-row" style="cursor: grab;"></li>');
        li.attr('data-id', item.id);
        li.attr('data-type', item.type);
        // Replace quotes so data-title attribute doesn't break
        var safeTitle = item.title ? item.title.replace(/"/g, '&quot;') : '';
        li.attr('data-title', safeTitle.toLowerCase());
        
        var content = '<div class="text-truncate" style="max-width: 90%;">';
        content += '<i class="anticon anticon-drag m-r-10 text-muted fs-5"></i>';
        content += '<span class="badge ' + badgeClass + ' m-r-10 text-uppercase" style="width: 80px;"><i class="anticon ' + iconClass + '"></i> ' + item.type + '</span>';
        content += '<span class="font-weight-bold item-title" title="' + safeTitle + '">' + safeTitle + '</span>';
        content += '</div>';
        
        li.html(content);
        return li;
    }

    function updateCounts() {
        $('#countAvailable').text($('#availableList li').length);
        $('#countSelected').text($('#selectedList li').length);
    }

    // Package Type change logic
    $('#packageTypeSelector').on('change', function() {
        var type = $(this).val();
        var pkgList = type === 'b2b' ? b2bPackages : normalPackages;
        var idField = type === 'b2b' ? 'PKPackageID' : 'package_id';
        
        $('#packageSelector').empty().append('<option value="">-- Select a Package --</option>');
        $.each(pkgList, function(i, p) {
            $('#packageSelector').append('<option value="'+p[idField]+'">'+p.title+'</option>');
        });
        
        // Reset subsequent fields
        $('#packageSelector').trigger('change');
    });

    // Package change logic
    $('#packageSelector').on('change', function() {
        var packageId = $(this).val();
        var packageType = $('#packageTypeSelector').val();
        
        $('#categorySelector').empty().append('<option value="">-- Select a Category --</option>').prop('disabled', true);
        $('#sequenceWrapper, #noItemsMsg').hide();
        $('#btnSaveSequence').prop('disabled', true);

        if (!packageId) return;

        $('#loader').show();
        $.ajax({
            url: "<?= base_url('admin/video-tutorials/get-categories-by-package') ?>/" + packageId + "?package_type=" + packageType,
            type: "GET",
            dataType: "json",
            success: function(response) {
                $('#loader').hide();
                if (response.status === 'success' && response.categories.length > 0) {
                    $('#categorySelector').prop('disabled', false);
                    $.each(response.categories, function(index, cat) {
                        $('#categorySelector').append('<option value="'+cat.course_id+'">'+cat.course_name+'</option>');
                    });
                } else {
                    $('#noItemsMsg').text('No categories linked to this package.').show();
                }
            },
            error: function() {
                $('#loader').hide();
                alert('Error loading categories.');
            }
        });
    });

    // Category change logic
    $('#categorySelector').on('change', function() {
        var packageId = $('#packageSelector').val();
        var courseId = $(this).val();
        var packageType = $('#packageTypeSelector').val();
        
        $('#availableList, #selectedList').empty();
        $('#btnSaveSequence').prop('disabled', true);
        
        if (!courseId || !packageId) {
            $('#sequenceWrapper, #noItemsMsg').hide();
            return;
        }

        $('#loader').show();
        $('#sequenceWrapper, #noItemsMsg').hide();
        $('#searchAvailable').val('');

        $.ajax({
            url: "<?= base_url('admin/video-tutorials/get-course-items') ?>/" + packageId + "/" + courseId + "?package_type=" + packageType,
            type: "GET",
            dataType: "json",
            success: function(response) {
                $('#loader').hide();
                
                if (response.status === 'success' && (response.available_items.length > 0 || response.selected_items.length > 0)) {
                    $('#sequenceWrapper').show();
                    $('#btnSaveSequence').prop('disabled', false);

                    $.each(response.available_items, function(index, item) {
                        $('#availableList').append(buildListItem(item));
                    });

                    $.each(response.selected_items, function(index, item) {
                        $('#selectedList').append(buildListItem(item));
                    });

                    updateCounts();

                    // Initialize Sortable
                    if (sortableAvailable) sortableAvailable.destroy();
                    if (sortableSelected) sortableSelected.destroy();

                    sortableAvailable = Sortable.create(document.getElementById('availableList'), {
                        group: 'shared',
                        animation: 150,
                        ghostClass: 'bg-info',
                        onEnd: updateCounts
                    });

                    sortableSelected = Sortable.create(document.getElementById('selectedList'), {
                        group: 'shared',
                        animation: 150,
                        ghostClass: 'bg-info',
                        onEnd: updateCounts
                    });
                } else {
                    $('#noItemsMsg').text('No videos or questions found for the selected category.').show();
                }
            },
            error: function() {
                $('#loader').hide();
                alert('Error loading items.');
            }
        });
    });

    // Search filter for Available Items
    $('#searchAvailable').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $("#availableList li").each(function() {
            if ($(this).attr('data-title').indexOf(value) > -1) {
                $(this).removeClass('d-none').addClass('d-flex');
            } else {
                $(this).removeClass('d-flex').addClass('d-none');
            }
        });
    });

    // Move All to Selected
    $('#btnMoveAll').on('click', function(e) {
        e.preventDefault();
        // only move visible ones if searched
        $('#availableList li').not('.d-none').each(function() {
            $('#selectedList').append($(this));
        });
        updateCounts();
    });

    // Remove All from Selected
    $('#btnRemoveAll').on('click', function(e) {
        e.preventDefault();
        $('#selectedList li').each(function() {
            // make sure it's visible when returned
            $(this).removeClass('d-none').addClass('d-flex');
            $('#availableList').append($(this));
        });
        updateCounts();
    });

    // Save Sequence
    $('#btnSaveSequence').on('click', function() {
        var packageId = $('#packageSelector').val();
        var packageType = $('#packageTypeSelector').val();
        var courseId = $('#categorySelector').val();
        if (!packageId || !courseId) return;

        var sequence = [];
        $('#selectedList li').each(function() {
            sequence.push({
                item_id: $(this).data('id'),
                item_type: $(this).data('type')
            });
        });

        var btn = $(this);
        btn.prop('disabled', true).html('<i class="anticon anticon-loading m-r-5"></i> Saving...');

        $.ajax({
            url: "<?= base_url('admin/video-tutorials/save-sequence') ?>",
            type: "POST",
            dataType: "json",
            data: {
                package_id: packageId,
                package_type: packageType,
                course_id: courseId,
                sequence: JSON.stringify(sequence)
            },
            success: function(response) {
                btn.prop('disabled', false).html('<i class="anticon anticon-save m-r-5"></i> Save Sequence');
                if (response.status === 'success') {
                    alert('Sequence saved successfully!');
                } else {
                    alert(response.message || 'Error saving sequence.');
                }
            },
            error: function() {
                btn.prop('disabled', false).html('<i class="anticon anticon-save m-r-5"></i> Save Sequence');
                alert('Server error saving sequence.');
            }
        });
    });
};
</script>
<?= $this->endSection(); ?>
