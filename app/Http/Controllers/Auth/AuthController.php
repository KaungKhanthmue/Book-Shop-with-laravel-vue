<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'user'  => $user,
                'token' => $token]);
        }
    }
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
        }
    public function edit(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $del_profile = $user->images()->where('image_type', 'profile_photo')->first();
        $del_cover = $user->images()->where('image_type', 'cover_photo')->first();
        
        if ($del_profile) {
            $del_profile->delete();
        }
        
        if ($del_cover) {
            $del_cover->delete();
        }
        $user->update([
            'name'=>$request->name,
            'nick_name' =>$request->nick_name,
        ]);
        $profile_image = $request->file('profile_image');
        $profile_img_path = $profile_image->storePublicly('images', 'public');
        $profileName = $profile_image->getClientOriginalName();
        $profileFileType = $profile_image->getClientOriginalExtension();

        $user->images()->create([
            'name' => $profileName,
            'file_type' => $profileFileType,
            'image_type' => 'profile_photo',
            'url' => $profile_img_path,
        ]);

        $cover_image = $request->file('cover_image');
        $cover_img_path  = $cover_image->storePublicly('images', 'public');
        $coverName = $cover_image->getClientOriginalName();
        $coverFileType = $cover_image->getClientOriginalExtension();
        $user->images()->create([
            'name' => $coverName,
            'file_type' => $coverFileType,
            'image_type' => 'cover_photo',
            'url' => $cover_img_path,
        ]);
        return new UserResource($user);
    }
    public function yourInfo()
    {
        return new UserResource(auth()->user());
    }
}

