<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>

<div class="row">
	<div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <h3 class="font-weight-bold text-dark mb-1" style="font-size: 22px;">Subscription &amp; Sales Reports</h3>
                <p class="text-muted mb-0" style="font-size: 13.5px;">Detailed logs of package purchases, licenses, and revenue.</p>
            </div>
            <div>
                <a href="<?= base_url('admin/reports/download') ?>" target="_blank" class="btn btn-success d-inline-flex align-items-center gap-1 font-weight-semibold shadow-sm" style="background-color: #059669; border: none; border-radius: 8px; padding: 8px 18px;">
                    <i class="anticon anticon-file-excel mr-1"></i> Export Excel
                </a>
            </div>
        </div>

		<div class="admin-table-card">
			<div class="card-body p-4">
        		<div class="table-responsive-fixed">
        			<table id="data-table" class="table table-hover align-middle mb-0">
        			    <thead>
        			        <tr>
        			            <th style="width: 50px;">#</th>
        			            <th>License Code</th>
        			            <th>Subscriber</th>
        			            <th>Start Date</th>
        			            <th>Package</th>
        			            <th>Duration</th>
                                <th>Coupon</th>
        			            <th>Amount</th>
        			        </tr>
        			    </thead>
        			    <tbody>
                        <?php if (isset($users)): ?>
                            <?php $ii = 1; foreach ($users as $user): ?>
                                <tr>
                                    <td class="font-weight-bold text-muted">#<?= $ii++; ?></td>
                                    <td>
                                        <span class="badge badge-light border font-weight-bold px-2 py-1" style="font-family: monospace; font-size: 12px;">
                                            <?= strtoupper(substr(md5($user['subscription_id']), 0, 10)); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="font-weight-bold text-dark">
                                            <?= esc($user['first_name'] . ' ' . $user['last_name']); ?>
                                        </div>
                                    </td>
                                    <td class="text-muted small"><?= date('M d, Y', strtotime($user['start_date'])); ?></td>
                                    <td>
                                        <span class="badge badge-pill badge-primary font-weight-semibold" style="background: #eff6ff; color: #1d4ed8; border: 1px solid #bfdbfe; font-size: 11.5px;">
                                            <?= esc($user['title']); ?>
                                        </span>
                                    </td>
                                    <td class="text-muted small"><?= esc($user['duration']); ?></td>
                                    <td>
                                        <?php if (!empty($user['coupon_used'])): ?>
                                            <span class="badge badge-pill badge-warning text-dark font-weight-bold" style="background: #fef3c7; font-size: 11px;">
                                                <?= esc($user['coupon_used']); ?>
                                            </span>
                                        <?php else: ?>
                                            <span class="text-muted small">-</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <strong class="text-success" style="font-size: 14.5px;">₹<?= number_format($user['cost'], 2); ?></strong>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
        			    </tbody>
        			</table>
        		</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
