<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public function Delegations()
    {
        return $this->hasMany(Delegations::class);
    }
}
