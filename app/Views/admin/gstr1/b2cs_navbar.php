<ul class="nav nav-tabs m-b-20" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link <?= (empty($segment)) ? 'active' : ''; ?>"  href="<?= base_url('admin/gstr1/b2cs/'.$question_id) ?>" role="tab">Other than E-Commerce</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($segment == 'ecomm') ? 'active' : ''; ?>"  href="<?= base_url('admin/gstr1/b2cs/ecomm/'.$question_id) ?>" role="tab">E-Commerce</a>
    </li>
</ul>
