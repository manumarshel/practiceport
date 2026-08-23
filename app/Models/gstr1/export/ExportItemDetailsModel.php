<?php

namespace App\Models\gstr1\export;

use CodeIgniter\Model;

class ExportItemDetailsModel extends Model {

    protected $table = '6a_exports_item_details';
    protected $primaryKey = '6a_id';
    protected $allowedFields = [
        '6a_id',
        'item_detail_id'
    ];
    protected $returnType = 'array';

}
