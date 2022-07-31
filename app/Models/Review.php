<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use App\Models\User;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = ['rating_points', 'reviews', 'created_at', 'updated_at', 'deleted_at' ,'user_id'];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
