<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //
    public function departments() {
        return $this->hasOne(Department::class, 'id', 'departmnet');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'tec_id');
    }
}
