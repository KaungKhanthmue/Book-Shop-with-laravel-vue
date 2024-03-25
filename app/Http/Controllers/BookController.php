<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
     $book= Book::all();
     return BookResource::collection($book);
    }
    public function store(Request $request)
    {
         $aa = Book::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'tag_id' =>$request->tag_id,
            'user_id' =>$request->user_id,
        ]);
        foreach ($request->file('images') as $image) {

            $imagePath = $image->storePublicly('images', 'public');
            $imageName = $image->getClientOriginalName();
            $imageFileType = $image->getClientOriginalExtension();

            $bb = $aa->images()->create([
                'name' => $imageName,
                'file_type' => $imageFileType,
                'image_type' => 'book',
                'url' => $imagePath,
            ]);
        }
        return response()->json([
            'status' => 'success',
        ]);
    }
    public function liked(Book $book)
    {
        $user= auth()->user();
        $aa = $book->like($user->id);
        dd($aa);
    }
}
