<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Manager extends Model
{
    protected $collection = 'manages';
}
