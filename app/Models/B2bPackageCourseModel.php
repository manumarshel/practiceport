<?php

namespace App\Models;

use CodeIgniter\Model;

class B2bPackageCourseModel extends Model
{
    protected $table = 'b2b_package_course_mapping';
    protected $primaryKey = 'PKMappingID';
    protected $allowedFields = [
        'PKCourseID',
        'PKPackageID', 
        'status'
    ];
}
