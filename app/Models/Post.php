<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Only fillable properties
    protected $fillable = ["title", "excerpt", "body"];

    protected $with = ['category','author'];

    // Or use guarded as opposite to fillable properties 
    // the mentioned fields will be ignored automatically
    // protected $guarded = ["id"];

    // If you would like model binding to always use a database column other than id when retrieving a 
    // given model class, you may override the getRouteKeyName method on the Eloquent model
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // Eloquent model relationships
    // hasOne, hasMany, belongsTo, belongsToMany
    // For this example, a post belongs to a particular category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
