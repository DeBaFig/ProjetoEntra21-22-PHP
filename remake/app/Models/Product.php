<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'address',
        'reference_link',
        'min_price',
        'max_price',
        'quantity',
        'isNew',
        'isNegotiable',
        'isActive',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'publish_at' => 'timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
