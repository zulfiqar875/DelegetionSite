<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Delegations extends Model
{
    protected $primaryKey ='DelegationID';
    public $incrementing = false;
}
