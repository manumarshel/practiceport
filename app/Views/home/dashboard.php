
<?php include('layout/header.php'); ?>
            <div class="row" style="padding-top: 30px;">
                <!-- Welcome Text -->
                <h2 class="fw-bold mb-1">
                    Welcome
                    back, <?php if (isset($user_info['first_name']) && isset($user_info['last_name'])) echo $user_info['first_name'] . ' ' . $user_info['last_name']; ?>
                    ! <span class="wave">👋</span>
                </h2>

                <p class="text-muted mb-0">
                    Continue your learning journey and master accounting simulations
                </p>
            </div>


            <!--  <section class="py-5">-->
            <!-- STATS CARDS -->
            <!--      <div class="row g-4  ">-->

            <!-- Card 1 -->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--        <div class="stat-card">-->
            <!--            <div class="stat-content">-->
            <!--                <div>-->
            <!--                    <h2>12</h2>-->
            <!--                    <p>Simulations Completed</p>-->
            <!--                </div>-->
            <!--                <div class="stat-icon bg-green">-->
            <!--                    <i class="bi bi-check2-circle"></i>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!-- Card 2 -->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--        <div class="stat-card">-->
            <!--            <div class="stat-content">-->
            <!--                <div>-->
            <!--                    <h2>5</h2>-->
            <!--                    <p>In Progress</p>-->
            <!--                </div>-->
            <!--                <div class="stat-icon bg-orange">-->
            <!--                    <i class="bi bi-clock"></i>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!-- Card 3 -->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--        <div class="stat-card">-->
            <!--            <div class="stat-content">-->
            <!--                <div>-->
            <!--                    <h2>48</h2>-->
            <!--                    <p>Total Hours Learned</p>-->
            <!--                </div>-->
            <!--                <div class="stat-icon bg-blue">-->
            <!--                    <i class="bi bi-graph-up-arrow"></i>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!-- Card 4 -->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--        <div class="stat-card">-->
            <!--            <div class="stat-content">-->
            <!--                <div>-->
            <!--                    <h2>3</h2>-->
            <!--                    <p>Certificates Earned</p>-->
            <!--                </div>-->
            <!--                <div class="stat-icon bg-purple">-->
            <!--                    <i class="bi bi-award"></i>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--</div>-->
            <!--</section>-->

            <!-- CONTINUE LEARNING CARD -->
            <!--<div class="continue-wrappers mt-3">-->

            <!--    <div class="continue-card">-->

                    <!-- LEFT SIDE -->
            <!--        <div class="continue-left">-->

            <!--            <h3>Continue Learning</h3>-->
            <!--            <p>Pick up where you left off</p>-->

            <!--            <div class="progress-card">-->
            <!--                <div class="d-flex justify-content-between align-items-center mb-2">-->
            <!--                    <span class="fw-semibold">GST Return Filing – GSTR-1</span>-->
            <!--                    <span class="fw-semibold">75%</span>-->
            <!--                </div>-->

            <!--                <div class="custom-progress">-->
            <!--                    <div class="custom-progress-bar" style="width:75%"></div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--        </div>-->

                    <!-- RIGHT BUTTON -->
            <!--        <div class="continue-right">-->
            <!--            <button class="resume-btn">-->
            <!--                Resume <span class="ms-2">›</span>-->
            <!--            </button>-->
            <!--        </div>-->

            <!--    </div>-->

            <!--</div>-->
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

                                <?php if ($ii == "5") {
                                break;
                            }
                                ?>
                            <?php endforeach;endif; ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>
