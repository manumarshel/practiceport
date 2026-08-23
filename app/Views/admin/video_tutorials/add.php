<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title"><?= isset($video_tutorial) ? 'Edit Video Tutorial' : 'Add New Video Tutorial'; ?></h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="<?= base_url('admin/video-tutorials') ?>" class="breadcrumb-item"><i class="anticon anticon-play-circle m-r-5"></i>Video Tutorials</a>
                            <span class="breadcrumb-item active"><?= isset($video_tutorial) ? 'Edit' : 'Add'; ?> Details</span>
                        </nav>
                    </div>
                </div>
                
                <div class="m-t-30">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if (isset($validation)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (session()->getFlashdata('error')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif; ?>

                            <form action="<?= isset($video_tutorial) ? base_url('admin/edit-video-tutorial/' . $video_tutorial['id']) : base_url('admin/add-video-tutorial'); ?>" method="post" class="form">
                                
                                <div class="form-group">
                                    <label for="category_id">Video Category</label>
                                    <select name="category_id" id="category_id" class="form-control" required>
                                        <option value="">-- Select Category --</option>
                                        <?php if (!empty($courses)) : ?>
                                            <?php foreach ($courses as $course) : ?>
                                                <option value="<?= $course['course_id']; ?>" 
                                                    <?= (old('category_id', $video_tutorial['category_id'] ?? '') == $course['course_id']) ? 'selected' : ''; ?>>
                                                    <?= esc($course['course_name']); ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" 
                                           value="<?= esc(old('title', $video_tutorial['title'] ?? '')); ?>" 
                                           placeholder="Enter video tutorial title" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="10" rows="5" class="form-control" 
                                              placeholder="Enter video tutorial description"><?= esc(old('description', $video_tutorial['description'] ?? '')); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="video_platform">Video Platform</label>
                                    <select name="video_platform" id="video_platform" class="form-control" required>
                                        <option value="">-- Select Platform --</option>
                                        <option value="youtube" <?= (old('video_platform', $video_tutorial['video_platform'] ?? '') == 'youtube') ? 'selected' : ''; ?>>YouTube</option>
                                        <option value="vimeo" <?= (old('video_platform', $video_tutorial['video_platform'] ?? '') == 'vimeo') ? 'selected' : ''; ?>>Vimeo</option>
                                        <option value="bunny" <?= (old('video_platform', $video_tutorial['video_platform'] ?? '') == 'bunny') ? 'selected' : ''; ?>>Bunny.net</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="video_url">External Video URL (YouTube, Vimeo, Bunny.net)</label>
                                    <input type="url" name="video_url" id="video_url" class="form-control" 
                                           value="<?= esc(old('video_url', $video_tutorial['video_url'] ?? '')); ?>" 
                                           placeholder="e.g. https://www.youtube.com/watch?v=... or https://vimeo.com/..." required>
                                    <small class="form-text text-muted">Supports standard share links or direct embed URLs from YouTube, Vimeo, or Bunny.net.</small>
                                </div>

                                <div class="m-t-20">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="anticon anticon-save m-r-5"></i> Save Video Tutorial
                                    </button>
                                    <a href="<?= base_url('admin/video-tutorials') ?>" class="btn btn-default">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
