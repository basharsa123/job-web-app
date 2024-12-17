<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
    public function jobs()
    {
        return $this->hasMany(job_listing::class);
    }
    public function user()
    {
       return $this->belongsto(User::class);
    }
}