<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $primaryKey = 'inventory_num';

    public $keyType = 'string'; 

    public $incrementing = false;

    protected $fillable=[
        'inventory_num',
        'name',
        'category_id',
        'classroom_num',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
