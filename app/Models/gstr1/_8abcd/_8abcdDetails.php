<?php


namespace App\Models\gstr1\_8abcd;


use CodeIgniter\Model;

class _8abcdDetails extends Model
{
    protected $table = '8abcd_details';
    protected $primaryKey = '8baced_detail_id';
    protected $allowedFields = [
        'description',
        'nill_rated_supplies',
        'exempted',
        'non_gst_supplies',
        'question_id',
    ];
}
