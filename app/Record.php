<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    // レコード（戦績）は１つのチームに管理されている
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}