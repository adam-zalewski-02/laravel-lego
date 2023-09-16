<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegoSetsLanguage extends Model
{
    use HasFactory;
    protected $table = "lego_sets_language";

    protected $fillable = [
        'set_number',
        'language',
        'name',
        'description'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at',
        'set_number'
    ];

    public function legoset(){
        return $this->belongsTo(LegoSet::class, "set_number", "set_number");
    }

}
