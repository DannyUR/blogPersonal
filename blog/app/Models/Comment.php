<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $table="comentarios";
     protected $fillable=[
        "content",
        "user_id",
        "post_id",
        
    ];
}
