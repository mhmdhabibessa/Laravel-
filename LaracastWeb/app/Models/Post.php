<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $guarded =[];


    protected $with =['category' ,'author'];


    public function category(){

        return $this ->  belongsTo(Category::class);
    }

    public function author(){

        return $this ->  belongsTo(User::class,'user_id');
    }

    public function comments(){

        return $this ->  hasMany(Comment::class);
    }

    public function findOrFail(){


    }


}



