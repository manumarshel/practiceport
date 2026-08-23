<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoTutorialModel extends Model
{
    protected $table = 'video_tutorials';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'category_id',
        'title',
        'description',
        'video_platform',
        'video_url',
    ];
    
    // Enable automated timestamps since we have created_at/updated_at fields
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
