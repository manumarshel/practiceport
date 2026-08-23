<?php


namespace App\Models;


use CodeIgniter\Model;

class AddModel extends Model
{
    protected $table = 'ads';
    protected $primaryKey = 'ad_id';
    protected $allowedFields = [
        'ad_url',
        'image',
    ];

    public function getAd($url)
    {
        $result = array();

        if ( $url != null ) {
            $result = $this->where('ad_url', $url)->get()->getResultArray();
        }

        return $result;
    }
}
