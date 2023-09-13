<?php

namespace App\Models;

use App\Models\User;
use App\Models\Profile;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','description','category','category_id', 'profile_id', 'user_id','img'];




    public function category(){

    return $this->belongsTo(Category::class);
    }

    public function profile(){
        return $this->belongsTo(Profile::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
