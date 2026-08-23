<?php


namespace App\Models\gstr3b\system_summary;


use CodeIgniter\Model;

class SystemsummaryModel extends Model
{
    protected $table = 'gstr3b_system_generated_summary';
    protected $primaryKey = 'system_id';
    protected $allowedFields = [
        'system_id',
        'liability_gstr1_form_status',
        'liability_gstr1_summary_status',
        'reverse_gstr2b_form_status',
        'reverse_gstr2b_summary_status',
        'tax_credit_gstr2b_form_status',
        'tax_credit_gstr2b_summary_status',
        'question_id'
    ];
}
