<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    protected $fillable = [
        'user_id',
        'title',
        'desc',
        'type',
        'work_time',
        'paid_per',
        'salary',
        'city',
        'area',
        'military_status',
        'education_level',
        'relationship_status',
        'currency',
        'experience',
        'smoker',
        'driver_license',
        'category',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function skills(){
        return $this->belongsToMany('App\Models\Skill');
    }
}
