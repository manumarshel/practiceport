<?php if (! isset($index)) $index = 1; ?>
<ul class="nav nav-tabs ret-tabs">
    <li <?php if($index === 1) echo 'class="active"'; ?>><a href="cdnr">Uploaded by Taxpayer</a></li>
    <li <?php if($index === 2) echo 'class="active"'; ?>><a href="cdnr-receiver-uploded">Uploaded by Receiver</a></li>
    <li <?php if($index === 3) echo 'class="active"'; ?>><a href="cdnr-receiver-modified">Modified by Receiver</a></li>
    <li <?php if($index === 4) echo 'class="active"'; ?>><a href="cdnr-receiver-rejected">Rejected by Receiver</a></li>
</ul>
