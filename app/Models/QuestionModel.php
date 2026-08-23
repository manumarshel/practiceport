<?php


namespace App\Models;


use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'questions';
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
        'tax_person_id',
    ];
    protected $returnType     = 'array';
}
