<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    protected $fillable = ['show_id', 'when', 'location_id'];

    public function shows()
    {
        return $this->belongsTo('App\Show');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
    public function locations()
    {
        return $this->belongsTo('App\Locations');
    }
}
