<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // チームは１人のユーザに管理されている
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // チームは複数のレコード（戦績）を持てる
    public function records()
    {
        return $this->hasMany('App\Record');
    }
}
