<?php


namespace App\Models\gstr3b\iosup;


use CodeIgniter\Model;

class IosupModel extends Model
{
    protected $table = 'gstr3b_out_in_supplies_charges';
    protected $primaryKey = 'outin_id';
    protected $allowedFields = [
        'outin_id',
        'outward_tax_non_zero_taxable_value',
        'outward_tax_non_zero_integrated_tax',
        'outward_tax_non_zero_central_tax',
        'outward_tax_non_zero_state_tax',
        'outward_tax_non_zero_cess',
        'outward_tax_zero_taxable_value',
        'outward_tax_zero_integrated_tax',
        'outward_tax_zero_cess',
        'other_outward_nill_taxable_value',
        'inward_supplies_reverse_charges_taxable_value',
        'inward_supplies_reverse_charges_intetrated_tax',
        'inward_supplies_reverse_charges_central_tax',
        'inward_supplies_reverse_charges_state_tax',
        'inward_supplies_reverse_charges_cess',
        'non_gst_outward_taxable_value',
        'question_id'
    ];
}
