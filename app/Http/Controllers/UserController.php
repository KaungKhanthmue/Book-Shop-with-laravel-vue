<?php

namespace App\Http\Controllers;

use App\Http\Resources\FriendRequestResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function follow_unfollow(User $user)
    {
        $isFollowing = $user->following()->where('follower_id',auth()->user()->id)->exists();
        
        if($isFollowing)
        {
            $user->unfollow();
            dd('unfollow');
        }
        else{
            $user->follow();
            dd('follow');
        }

    }

    public function addAndRemoveFriend(User $user)
    {
        $friend = $user->freindOwner()->wherePivot('friend_add_user_id',auth()->user()->id)->exists();
        if($friend)
        {
            $user->unfriend();
            // dd('unfriend');
        }
        else{
            $user->addfriend();
            // dd('added friend');
        }
    }
    public function freindRequestList(User $user)
    {
         $request = $user->freindOwner();

         return FriendRequestResource::collection($request);
    }
}
