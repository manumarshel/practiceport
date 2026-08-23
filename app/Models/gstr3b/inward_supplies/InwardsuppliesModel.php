<?php


namespace App\Models\gstr3b\inward_supplies;


use CodeIgniter\Model;

class InwardsuppliesModel extends Model
{
    protected $table = 'gstr3b_inward_supplies';
    protected $primaryKey = 'inward_id';
    protected $allowedFields = [
        'inward_id',
        'composition_inter_state',
        'composition_intra_state',
        'nongst_inter_state',
        'nongst_intra_state',
        'question_id'
    ];
}
