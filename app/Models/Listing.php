<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'title',
        'description',
        'price',
        'location',
        'user_id',
    ];

    /**
     * Get the user that owns the listing.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the photos for the listing.
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
