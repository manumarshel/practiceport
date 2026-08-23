<?php

namespace App\Models;

use CodeIgniter\Model;

class UserVideoProgressModel extends Model
{
    protected $table = 'user_video_progress';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'package_id',
        'course_id',
        'video_tutorial_id',
        'question_id',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;
}
