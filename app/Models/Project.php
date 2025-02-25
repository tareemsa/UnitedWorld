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

        'user_id',
        'title',
        'city',
        'town',
        'location',
        'status',
        'phone',
        'uwestate_url',
        'starting_price_usd',
        'rooms',
        'sea_view',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
