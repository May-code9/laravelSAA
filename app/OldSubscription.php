<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldSubscription extends Model
{
  protected $fillable = [
    'user_id', 'timeline', 'session', 'capital', 'start_month', 'end_month', 'subscription_cost'
  ];
}
