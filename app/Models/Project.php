<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'project_id',
        'title',
        'city',
        'town',
        'location',
        'status',
        'uwestate_url',
        'starting_price_usd',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
