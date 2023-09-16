<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegoSubTheme extends Model
{
    use HasFactory;

    protected $table = 'lego_sub_themes';
    
    protected $hidden = [
        'created_at', 
        'updated_at', 
        'id', 
        'parent_theme_code'
    ];
}
