<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldPaymentImage extends Model
{
  protected $fillable = [
    'user_id', 'admin_id', 'image'
  ];
}
