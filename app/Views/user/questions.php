
<?php include('layout/header.php'); ?>
            
 
            <!-- SIMULATIONS TABLE -->
            <div class="sim-table-wrapper mt-3">

                <h4 class="mb-4 fw-bold">Simulations</h4>
                <div class="filter-strip p-3 mb-4">
                    <div class="row align-items-center">

                        <!-- Left Title -->
                        <div class="col-md-4 mb-2 mb-md-0">
                            <h5 class="mb-0 fw-bold">Filters</h5>
                        </div>

                        <!-- Filters -->
                        <div class="col-md-8">
                            <div class="d-flex flex-column flex-md-row gap-2 justify-content-md-end">

                                <!-- Filter 1 -->
                                <select class="form-control  form-select filter-select" id="mode_cate"
                                        onChange="fetch_items(this.value);" style="float:left;">
                                    <option value="">--All Category--</option>
                                    <?php if (isset($courses)) {

                                        foreach ($courses as $course) { ?>
                                            <option value="<?php echo $course['course_id']; ?>"><?php echo $course['course_name']; ?></option>
                                        <?php }
                                    } ?> 
                                </select>
                                <select class="form-select filter-select" id="mode_type"
                                        onChange="fetch_items(this.value);" style="float:left;">
                                    <option value="">--All Type--</option>
                                    <option value="easy">EASY</option>
                                    <option value="intermediate">INTERMEDIATE</option>
                                    <option value="advanced">ADVANCED</option>
                                </select>
 
                            </div>
                        </div>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table sim-table align-middle">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Question</th>
                            <th>Category</th>
                            <th>Company</th>
                            <th>Data</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody id="tbodyDiv">
                        <?php if (isset($questions)):
                            $ii = 1;
                            foreach ($questions as $question):
                                $filePath = base_url() . '/public/assets/uploads/questions/' . $question['questionscol'];
                                $run = base_url() . '/simulation/dashboard/' . $question['question_id'];

                                if ($question['category'] == "8") {
                                    $run = base_url() . '/eway-load/' . $question['question_id'];
                                }

                                if ($question['category'] == "3") {
                                    $run = base_url() . '/efiling-load/' . $question['question_id'];
                                    $question['category'] = "TDS FILING";
                                }

                                if ($question['category'] == "9") {
                                    $run = base_url() . '/esi-load/' . $question['question_id'];
                                }
                                if ($question['category'] == "10") {
                                    $run = base_url() . '/pf-load/' . $question['question_id'];
                                }
                                if ($question['category'] == "11") {
                                    $run = base_url() . '/vat-load/' . $question['question_id'];
                                }
                                if ($question['category'] == "12") {
                                    $run = base_url() . '/user/accounting/' . $question['question_id'];

                                }
                                ?>
                                <tr>
                                    <td>#<?= $ii++; ?></td>
                                    <td>
                                        <span class="badge badge-easy"><?= strtoupper($question['question_type']); ?></span>
                                    </td>
                                    <td class="question-col">
                                        <?= $question['question']; ?>
                                    </td>
                                    <td><?= strtoupper($question['course_name']); ?></td>
                                    <td><?= $question['name']; ?></td>
                                    <td>
                                        <a class="btn btn-download d-flex gap-1"
                                           href="<?= $filePath; ?> " <?php if ($question['category'] == "12") {
                                            echo "disabled";
                                        } ?>>
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo $run; ?>" class="btn btn-run d-flex gap-1">
                                            <i class="bi bi-play-fill"></i> Run
                                        </a>
                                    </td>
                                </tr>

                                
                            <?php endforeach;endif; ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>
