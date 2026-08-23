<?php


namespace App\Models;


use CodeIgniter\Model;

class CouponModel extends Model
{
    protected $table = 'coupons';
    protected $primaryKey = 'cpn_id';
    protected $allowedFields = [
        'code',
        'type',
        'amount',
        'usage_limit',
        'expiry_date'
    ];
}
