<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
      'user_id', 'slug'
    ];
    public function getRoleAttribute()
    {
      $slug = $this->slug;
      if($slug == 4) {
        $role = 'Super Admin';
      }
      elseif ($slug == 3) {
        $role = 'Admin';
      }
      elseif ($slug == 2) {
        $role = 'Secretariat';
      }
      elseif ($slug == 1) {
        $role = 'Helper';
      }

      return $role;
    }
}
