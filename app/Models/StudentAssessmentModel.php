<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentAssessmentModel extends Model
{
    protected $table = 'student_assessments';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'institution_id',
        'package_id',
        'course_id',
        'assessment_id',
        'answer_file',
        'status',
        'score',
        'remarks',
        'submitted_at',
        'reviewed_at'
    ];
}
