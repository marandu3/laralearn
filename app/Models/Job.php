<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;




class Job extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='jobs_listings';

    protected $fillable=['title','company'];
    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: "jobs_listings_id");
    }
}
?>