<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterPackageModel extends Model
{
    protected $table = 'mst_packages';
    protected $primaryKey = 'package_id';
    protected $allowedFields = [
        'title',
        'custom_title',
        'cost',
        'duration',
        'status',
        'course_id',
        'date_created',
        'description',
        'active',
        'date_modified'
    ];
}
