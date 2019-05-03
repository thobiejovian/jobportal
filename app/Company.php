<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Company extends Model
{
  public function jobs(){
    return $this->hasMany('App\Job');
  }

  public function getRouteKeyName() {
    return 'slug';
  }


}
