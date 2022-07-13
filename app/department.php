<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    // protected $fillable = ['name'];
    protected $guarded = [];
    public function work()
    {
        return $this->hasMany(work::class,'department_id');
    }
}
