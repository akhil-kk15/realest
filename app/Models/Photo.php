<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'path',
        'listing_id',
    ];

    /**
     * Get the listing that owns the photo.
     */
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
