<?php


namespace App\Models\gstr1\documents_issues;


use CodeIgniter\Model;

class documents_issues extends Model
{
    protected $table = 'documents_issues';
    protected $primaryKey = 'document_id';
    protected $allowedFields = [
        'doc_no',
        'doc_from',
        'doc_to',
        'total_number',
        'cancelled',
        'net_issues',
        'question_id',
        'data_type',
    ];
}
