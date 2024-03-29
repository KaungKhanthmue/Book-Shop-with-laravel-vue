<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_users');
    }
    public function contributorRequest()
    {
        return $this->hasMany(ContributorRequest::class);
    }
    public function likeBook()
    {
        return $this->belongsToMany(Book::class, 'book_likes','user_id','book_id');
    }
    public function follower()
    {
        return $this->belongsToMany(User::class,'follows','user_id','follower_id');
    }
    public function following()
    {
        return $this->belongsToMany(User::class,'follows','follower_id','user_id');
    }

    public function follow()
    {
        return $this->following()->attach(auth()->user()->id);
    }
    public function unfollow()
    {
        return $this->following()->detach(auth()->user()->id);
    }
    public function freindOwner()
    {
        return $this->belongsToMany(User::class,'friend_adds','user_id','friend_add_user_id');
    }
    public function freindAdder()
    {
        return $this->belongsToMany(User::class,'user_id','friend_add_user_id','friend_adds');
    }
    public function addfriend()
    {
        return $this->freindOwner()->attach(auth()->user()->id);
    }
    public function unFriend()
    {
        return $this->freindOwner()->detach(auth()->user()->id);
    }

}
