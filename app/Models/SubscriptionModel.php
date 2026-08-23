<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriptionModel extends Model
{
    protected $table = 'subscriptions';
    protected $primaryKey = 'subscription_id';
    protected $allowedFields = [
        'start_date',
        'cost',
        'coupon_used',
        'end_date',
        'user_id',
        'payment_id',
        'package_id'
    ];
}
