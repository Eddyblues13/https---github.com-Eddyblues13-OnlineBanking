<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'kycs';
    protected $fillable = [
        'user_id',
        'photo',
       
 
    ];

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id','id');
    }
}
