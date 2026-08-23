<?php


namespace App\Models\gstr1\nil_rated;


class NilModel extends \CodeIgniter\Model
{
    protected $table = '8abcd_details';
    protected $primaryKey = '8baced_detail_id ';
    protected $allowedFields = [
        '8baced_detail_id ',
        'inter_reg_nill_rated_supplies',
        'inter_reg_exempted',
        'inter_reg_non_gst_supplies',
        'inter_unreg_nill_rated_supplies',
        'inter_unreg_exempted',
        'inter_unreg_non_gst_supplies',
        'intra_reg_nill_rated_supplies',
        'intra_reg_exempted',
        'intra_reg_non_gst_supplies',
        'intra_unreg_nill_rated_supplies',
        'intra_unreg_exempted',
        'intra_unreg_non_gst_supplies',
        'question_id',
    ];
}
