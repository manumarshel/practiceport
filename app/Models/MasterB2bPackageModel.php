<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterB2bPackageModel extends Model
{
    protected $table = 'b2b_packages';
    protected $primaryKey = 'PKPackageID';
    protected $allowedFields = [
        'title',
        'custom_title',
        'cost',
        'duration',
        'status', 
        'license_number',
        'date_created',
        'date_modified'
    ];
}
