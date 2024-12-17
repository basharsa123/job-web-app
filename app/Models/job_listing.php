<?php
//? Eloquent for job_listing
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_listing extends Model {
    use HasFactory;
    protected $table = 'job_listing';
    protected $fillable = ['employee_id' , 'title' , 'salary']; 
    public function employee()
    {
     return $this->belongsTo(employee::class);
    }
    public function tags()
    {
      return $this->belongsToMany(tag::class );
    }
}
