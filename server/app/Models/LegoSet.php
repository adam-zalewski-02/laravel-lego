<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegoSet extends Model
{
    use HasFactory;
    protected $table = 'lego_sets';

    protected $fillable = [
        'set_number',
        'theme_code',
        'sub_theme_id',
        'price',
        'piece_count',
        'minifigure_count',
        'year'
    ];
    
    protected $with = [
        'theme', 
        'subTheme',
        'translations'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at', 
        'theme_code', 
        'sub_theme_id'
    ];

    public function theme(){
        return $this->belongsTo(LegoTheme::class,'theme_code', 'code');
    }

    public function subTheme(){
        return $this->belongsTo(LegoSubTheme::class,'sub_theme_id', 'id');
    }

    public function translations(){
        return $this->hasMany(LegoSetsLanguage::class, "set_number", "set_number");
    }
}
