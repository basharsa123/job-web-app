<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    public function jobs()
    {
        return $this->belongsToMany(job_listing::class ,relatedPivotKey:"job_listing_id");
    }
}