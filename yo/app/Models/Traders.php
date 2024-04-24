<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traders extends Model
{
    use HasFactory;
    protected $table = 'traders';
    protected $fillable = [
        'name',
        'image',
        'copier',
        'gains',
        'risk',
        'loss',
        'commission',
        'total_transactions',


    ];
}