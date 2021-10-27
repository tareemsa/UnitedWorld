<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'desc',
        'type',
        'location',
        'work_time',
        'paid_per',
        'salary',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function skills(){
        return $this->belongsToMany('App\Models\Skill');
    }
}
