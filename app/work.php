<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    // protected $fillable = ['workname','department_id'];
    protected $guarded = [];
    public function department()
    {
        return $this->belongsTo(department::class,'department_id');
    }

}
