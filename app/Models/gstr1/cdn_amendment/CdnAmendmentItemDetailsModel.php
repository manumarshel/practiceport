<?php


namespace App\Models\gstr1\cdn_amendment;


use CodeIgniter\Model;

class CdnAmendmentItemDetailsModel extends Model
{
    protected $table = '9c_cd_notes_registered_item_details';
    protected $primaryKey = '9c_cdnr_id';
    protected $allowedFields = [
        '9c_cdnr_id',
        'item_detail_id',
    ];
}
