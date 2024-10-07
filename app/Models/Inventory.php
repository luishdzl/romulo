<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'update_at'];

    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //relacion uno a muchos inversa
    public function post(){
        return $this->belongsTo(Post::class);
    }

}
