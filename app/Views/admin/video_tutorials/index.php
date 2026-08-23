<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Video Tutorials</h5>
                    <div>
                        <a href="<?= base_url('admin/add-video-tutorial') ?>" class="btn btn-primary btn-sm">
                            <i class="anticon anticon-plus m-r-5"></i> Add New
                        </a>
                    </div>
                </div>

                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-success alert-dismissible fade show m-t-15">
                        <?= session()->getFlashdata('msg') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show m-t-15">
                        <?= session()->getFlashdata('error') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Platform</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Video Link</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($video_tutorials)) : ?>
                                    <?php foreach ($video_tutorials as $index => $video) : ?>
                                        <tr>
                                            <td><?= $index + 1; ?></td>
                                            <td>
                                                <span class="badge badge-pill badge-blue font-size-12">
                                                    <?= esc($video['course_name'] ?? 'Uncategorized'); ?>
                                                </span>
                                            </td>
                                            <td>
                                                <?php if ($video['video_platform'] === 'youtube') : ?>
                                                    <span class="badge badge-pill font-size-11" style="background-color: #ff000020; color: #ff0000; border: 1px solid #ff000040; padding: 2px 8px;"><i class="anticon anticon-youtube"></i> YouTube</span>
                                                <?php elseif ($video['video_platform'] === 'vimeo') : ?>
                                                    <span class="badge badge-pill font-size-11" style="background-color: #00adef20; color: #00adef; border: 1px solid #00adef40; padding: 2px 8px;">Vimeo</span>
                                                <?php else : ?>
                                                    <span class="badge badge-pill font-size-11" style="background-color: #ffc10720; color: #ffc107; border: 1px solid #ffc10740; padding: 2px 8px;">Bunny.net</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><strong><?= esc($video['title']); ?></strong></td>
                                            <td>
                                                <span class="text-muted" title="<?= esc($video['description']); ?>">
                                                    <?= strlen($video['description']) > 60 ? esc(substr($video['description'], 0, 57)) . '...' : esc($video['description']); ?>
                                                </span>
                                            </td>
                                            <td>
                                                <a href="<?= esc($video['video_url']); ?>" target="_blank" class="text-primary font-size-13">
                                                    <i class="anticon anticon-link m-r-5"></i>Open External Link
                                                </a>
                                            </td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-info btn-xs m-r-5 watch-video-btn" 
                                                        data-title="<?= esc($video['title']); ?>" 
                                                        data-embed-url="<?= esc($video['embed_url']); ?>">
                                                    <i class="anticon anticon-play-circle"></i> Watch
                                                </button>
                                                
                                                <a href="<?= base_url('admin/edit-video-tutorial/' . $video['id']); ?>" class="btn btn-primary btn-xs m-r-5">
                                                    <i class="anticon anticon-edit"></i> Edit
                                                </a>
                                                
                                                <button type="button" class="btn btn-danger btn-xs delete-action" 
                                                        data-id="<?= $video['id']; ?>" 
                                                        data-action="delete-video-tutorial">
                                                    <i class="anticon anticon-delete"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">No video tutorials found. Click "Add New" to add one.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dynamic Watch Video Modal -->
<div class="modal fade" id="watchVideoModal" tabindex="-1" role="dialog" aria-labelledby="watchVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-dark text-white border-0">
            <div class="modal-header border-0 p-b-0">
                <h5 class="modal-title text-white" id="watchVideoModalLabel">Watch Video</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body p-t-10">
                <div class="embed-responsive embed-responsive-16by9 rounded shadow-lg">
                    <iframe class="embed-responsive-item" id="videoPlayer" src="" allowfullscreen allow="autoplay; encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handling the watch modal showing and source setup
    $('.watch-video-btn').on('click', function() {
        const title = $(this).data('title');
        const embedUrl = $(this).data('embed-url');
        
        $('#watchVideoModalLabel').text(title);
        $('#videoPlayer').attr('src', embedUrl);
        $('#watchVideoModal').modal('show');
    });

    // Clear iframe src when modal is closed to stop video playing
    $('#watchVideoModal').on('hidden.bs.modal', function () {
        $('#videoPlayer').attr('src', '');
    });
});
</script>

<?= $this->endSection(); ?>
