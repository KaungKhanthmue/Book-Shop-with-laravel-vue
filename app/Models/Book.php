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
    public function tag()
    {
        return $this->hasMany(Tag::class,'tag_id');
    }
    public function category()
    {
        return $this->hasMany(Category::class,'category_id');
    }
}
