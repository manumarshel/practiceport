<?php


namespace App\Models;


use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'video_id';
    protected $allowedFields = [
        'slot',
        'url',
    ];


    public function getVideo($slot)
    {
        $result = array();

        if ( $slot != null ) {
            $result = $this->where('slot', $slot)->get()->getResultArray();
        }

        return $result;
    }
}
