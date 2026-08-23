<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageCourseModel extends Model
{
    protected $table = 'package_course_mapping';
    protected $primaryKey = 'PKMappingID';
    protected $allowedFields = [
        'PKCourseID',
        'PKPackageID', 
        'status'
    ];
}
