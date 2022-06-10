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
        'class_room_num',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function classroom(){
        return $this->belongsTo(ClassRoom::class,'class_room_num','num');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
