<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Housing extends Model
{
    protected $fillable = [
        'title',
        'description',
        'address',
        'price',
        'number_rooms',
        'number_salons',
        'number_toilets',
        'number_kitchens',
        'status',
        'image',
        'category_id',
        'user_id'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function city():BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function address():BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}
