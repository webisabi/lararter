<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;
class Artwork extends Model
{
    // add location coordinates
    use Spatial;
    protected $spatial = ['location'];
}
