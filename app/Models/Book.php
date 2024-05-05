<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','author','pages','is_active'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault('No User');   //incase user is deleted
    }
}
