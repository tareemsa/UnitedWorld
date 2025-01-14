<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use HasFactory;
    use SoftDeletes; 

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

    protected $dates = ['deleted_at']; // Ensure 'deleted_at' is treated as a date

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
