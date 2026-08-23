<?php

namespace App\Models;

class CourseModel extends \CodeIgniter\Model
{
    protected $table = 'courses';
    protected $primaryKey = 'course_id';
    protected $allowedFields = [
        'course_name',
    ];
}
