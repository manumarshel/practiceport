<?php

namespace App\Models;

use CodeIgniter\Model;

class AssessmentModel extends Model
{
    protected $table = 'assessments';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'course_id',
        'company_id',
        'title',
        'question',
        'download_file',
        'status',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
