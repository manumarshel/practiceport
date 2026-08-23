<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'package_id';
    protected $allowedFields = [
        'title',
        'cost',
        'duration',
        'status',
        'course_id',
        'date_created',
        'date_modified'
    ];
}
