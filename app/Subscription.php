<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
      'user_id', 'timeline', 'session', 'capital', 'start_month', 'end_month', 'subscription_cost'
    ];
    public function getDaterAttribute()
    {
      $currentDate = $this->end_month;
      $convert = strtotime($currentDate);
      $newFormat = date('d F Y', $convert);

      return $newFormat;
    }
}
