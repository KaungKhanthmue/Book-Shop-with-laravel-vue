<?php

namespace App\Http\Controllers;

use App\Http\Resources\FriendListResource;
use App\Http\Resources\FriendRequestResource;
use App\Http\Resources\UserResource;
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
            return "unfollow";
        }
        else{
            $user->follow();
            return "follow";
        }

    }
    public function authFollowList(){
        $user = User::where('id',auth()->user()->id)->first();
        $following = $user->follower()->get();
        return FriendListResource::collection($following);
    }
    public function userFollowList(User $user)
    {
        $following = $user->follower()->get();
        return FriendListResource::collection($following);

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
    public function friendAll(){
        if(auth('sanctum')->user()){
            $user = User::whereNot('id',auth('sanctum')->user()->id)->get();
            return UserResource::collection($user);
        }
        $user = User::all();
        return UserResource::collection($user);
  
    }
}
