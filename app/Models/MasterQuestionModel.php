<?php


namespace App\Models;


use CodeIgniter\Model;

class MasterQuestionModel extends Model
{
    protected $table = 'mst_questions';
    protected $primaryKey = 'question_id';
    protected $allowedFields = [
        'question',
        'category',
        'question_type',
        'company_id',
        'questionscol',
        'ip_contribution',
        'emp_contribution',
        'emp_code',
        'ecr_file',
        'srum_file',
        'tax_person_id',
        'vat_type'
    ];
    protected $returnType     = 'array';
}