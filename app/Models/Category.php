<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
        //to write
        protected $fillable = ['name', 'slug'];

        public function getRouteKeyName()
        {
            return "slug";
        }

        //relacion uno a muchos inversa
        public function post(){
            return $this->hasMany(Post::class);
        }
}
