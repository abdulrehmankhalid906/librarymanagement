<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_name',
        'app_img',
        'navbar_toggler',
        'logged_toggler',
        'loggin_message',
        'menu_name',
        'theme_front_color',
        'theme_background_color',
        'footer_front_color',
        'footer_background_color',
        'footer_title',
        'footer_year',
    ];
}
