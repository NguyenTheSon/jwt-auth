<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Table extends Model
{
    protected $collection = 'tables';
}
