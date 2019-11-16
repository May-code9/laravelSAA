<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
  protected $fillable = [
    'user_id', 'admin_id', 'qrcode'
  ];
}
