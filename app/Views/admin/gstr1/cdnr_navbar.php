<ul class="nav nav-tabs m-b-20" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link <?= (empty($segment)) ? 'active' : ''; ?>"  href="<?= base_url('admin/gstr1/cdnr/' . $question_id) ?>" role="tab">Uploaded by Taxpayer</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($segment == 'receiver-upload') ? 'active' : ''; ?>"  href="<?= base_url('admin/gstr1/cdnr/receiver-upload/' . $question_id) ?>" role="tab">Uploaded by Receiver</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($segment == 'receiver-modified') ? 'active' : ''; ?>"  href="<?= base_url('admin/gstr1/cdnr/receiver-modified/' . $question_id) ?>" role="tab">Modified by Receiver</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($segment == 'receiver-rejected') ? 'active' : ''; ?>"  href="<?= base_url('admin/gstr1/cdnr/receiver-rejected/' . $question_id) ?>" role="tab">Rejected by Receiver</a>
    </li>
</ul>
