<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add New Question</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="add-company.html" class="breadcrumb-item active"><i class="anticon anticon-file-unknown m-r-5"></i>Question Details</a>
                            <a class="breadcrumb-item" href="add-company-gstr1.html">GSTR1 Data</a>
                            <a class="breadcrumb-item" href="add-company-gstr3b.html">GSTR3B Data</a>
                            <a class="breadcrumb-item" href="add-company-payment.html">Payment Details</a>
                        </nav>
                    </div>
                </div>
                <!-- <div class="d-flex justify-content-between align-items-center">
                    <h5>Companies</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary">Add New</a>
                    </div>
                </div> -->
                <div class="m-t-30">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if (isset($validation)): ?>
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php
                            $question_id = '';
                            $question = '';
                            $category = '';
                            $question_type = '';
                            $company_id = '';
                            if (isset($question_) && !empty($question_)):

                                $question_id = $question_['question_id'];
                                $question = $question_['question'];
                                $category = $question_['category'];
                                $question_type = $question_['question_type'];
                                $company_id = $question_['company_id'];
                            endif;
                            ?>
                                <?php if (isset($question_) && !empty($question_)): ?>
                                <form action="<?= base_url(); ?>/admin/add-question/<?= $question_id; ?>" method="post" class="form" enctype="multipart/form-data">
                                    <?php else: ?>
                                    <form action="add-question" method="post" class="form" enctype="multipart/form-data">
<?php endif; ?>
                                    <div class="form-group">
                                        <label for="">Question</label>
                                        <textarea name="question" id="question" cols="10" rows="4" class="form-control"><?= $question; ?></textarea>
    <!--                                    <input type="text" name="" class="form-control">-->
                                    </div>
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="gstr1" <?php if ($category === 'gstr1') echo "selected"; ?>>GSTR1</option>
                                            <option value="gstr3b" <?php if ($category === 'gstr3b') echo "selected"; ?>>GSTR3B</option>
                                            <option value="tds" <?php if ($category === 'tds') echo "selected"; ?>>TDS</option>
                                            <option value="ewaybill" <?php if ($category === 'ewaybill') echo "selected"; ?>>Eway Bill</option>
                                            <option value="efiling" <?php if ($category === 'efiling') echo "selected"; ?>>TDS Filing</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Question Type</label>
                                        <select name="question_type" id="question_type" class="form-control">
                                            <option value="easy" <?php if ($question_type === 'easy') echo "selected"; ?>>Easy</option>
                                            <option value="intermediate" <?php if ($question_type === 'intermediate') echo "selected"; ?>>Intermediate</option>
                                            <option value="advanced" <?php if ($question_type === 'advanced') echo "selected"; ?>>Advanced</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select Company</label>
                                        <select name="company_id" id="company_id" class="form-control">
                                            <?php
                                            if (isset($companies)):
                                                foreach ($companies as $company):
                                                    ?>
                                                    <option value="<?= $company['company_id']; ?>" <?php if ($company['company_id'] === $company_id) echo "selected"; ?>><?= $company['name']; ?></option>
    <?php endforeach;
    ;
endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Data File</label>
                                        <div class="custom-file">
                                            <input type="file" name="question_data" class="custom-file-input" id="question_data">
                                            <label class="custom-file-label" for="question_data">Choose file</label>
                                        </div>
                                        <p class="upload-info"></p>
                                    </div>
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-tone">Save</button>
                                    <button type="submit" name="submit" value="submit_continue" class="btn btn-primary">Save & Continue</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
