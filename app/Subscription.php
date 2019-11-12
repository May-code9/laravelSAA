<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
      'user_id', 'timeline', 'session', 'capital', 'subscription_month', 'subscription_cost'
    ];
}
