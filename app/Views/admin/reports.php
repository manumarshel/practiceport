<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row m-b-30">
                    <div class="col-lg-8">
                        <div class="d-md-flex">
                        	<!-- <div class="m-b-10 m-r-15">
                        		<div class="btn-group">
                        		    <select class="custom-select" style="min-width: 180px;">
                        		    	<option selected>Package</option>
                        		    	<option value="">All</option>
                        		    	<option value="">Basic</option>
                        		    	<option value="">Pro</option>
                        		    </select>
                        		</div>
                        	</div>
                            <div class="m-b-10 m-r-15">
                                <select class="custom-select" style="min-width: 180px;">
                                    <option selected>All</option>
                                    <option value="">This Week</option>
                                    <option value="">This Month</option>
                                    <option value="">Last Month</option>
                                    <option value="">This Year</option>
                                </select>
                            </div>
                            <div class="m-b-10 ">
                            	<div class="form-group">
                            	     <label>Range Datepicker</label>
                            	    <div class="d-flex align-items-center">
                            	        <input type="text" class="form-control datepicker-input" name="start" placeholder="From">
                            	        <span class="p-h-10">to</span>
                            	        <input type="text" class="form-control datepicker-input" name="end" placeholder="To">
                            	    </div>
                            	</div>
                            </div> -->
                            <h3>Reports</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a href="<?php echo base_url() . '/admin/reports/download'; ?>" target="_blank" class="btn btn-primary">
                            <i class="anticon anticon-file-excel m-r-5"></i>
                            <span>Export</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-12">
                		<div class="table-responsive">
                			<table id="data-table" class="table">
                			    <thead>
                			        <tr>

                			            <th>ID	</th>
                			            <th>License	</th>
                			            <th>User	</th>
                			            <th>Date	</th>
                			            <th>Package	</th>
                			            <th>Duration</th>
                                        <th>Coupon</th>
                			            <th>Amount</th>

                			        </tr>
                			    </thead>
                			    <tbody>
                                <?php if (isset($users)) {
                                    $ii = 1;
                                    foreach ($users as $user): ?>
                                        <tr>
                                            <td><?= $ii++; ?></td>
                                            <td><?=substr(md5($user['subscription_id']), 0, 10); ?></td>
                                            <td>
                                                <?= $user['first_name']; ?> <?= $user['last_name']; ?>
                                            </td>
                                            <td><?= date('M d Y', strtotime($user['start_date'])); ?></td>
                                            <td> <?= $user['title']; ?></td>
                                            <td>
                                                <?= $user['duration']; ?>
                                            </td>
                                            <td> <?= $user['coupon_used']; ?></td>
                                            <td>₹ <?= $user['cost']; ?></td>
                                        </tr>
                                    <?php endforeach;
                                } ?>
                			    </tbody>
                			    <tfoot>

                			    </tfoot>
                			</table>
                		</div>
                	</div>
                </div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
