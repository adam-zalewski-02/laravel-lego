<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegoTheme extends Model
{
    use HasFactory;

    protected $table = 'lego_themes';
    
    protected $fillable = ['code', 'name'];
    protected $visible = ['code', 'name'];

    protected $hidden = [
        'created_at', 
        'updated_at'
    ];
}
