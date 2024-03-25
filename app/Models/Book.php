<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'category_id',
        'tag_id',
        'user_id',
    ];
    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function tags()
    {
        return $this->belongsTo(Tag::class,'tag_id');
    }
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
    public function bookLike()
    {
        return $this->belongsToMany(User::class, 'book_likes');
    }
    public function like($id)
    {
        return $this->bookLike()->attach($id);
    }
    public function unlike($id)
    {
        return $this->likeBook()->detach($id);
    }
}
