<?php


namespace App\Models\gstr1\_11a_tax_liabilities;


use CodeIgniter\Model;

class _11a_tax_liabilities extends Model
{
    protected $table = '11a_tax_liabilities';
    protected $primaryKey = '11a_tax_id';
    protected $allowedFields = [
        'pos',
        'supply_type'
    ];
}
