<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    protected $primaryKey = 'num';
    public $keyType = 'string'; 

    public $incrementing = false;

    protected $fillable=[
        'num',
        'name',
    ];

    public $timestamps = false;

    public function items(){
        return $this->hasMany(Item::class);
    }

}
