<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Restaurant extends Model
{
    protected $collection = 'restaurants';
}
