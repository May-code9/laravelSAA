<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentImage extends Model
{
    protected $fillable = [
      'user_id', 'admin_id', 'image'
    ];
}
