<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    
    public function index()
    {
        $highlight = Post::orderBy('views', 'desc')
            ->take(1)
            ->get();
    
        $latest = Post::orderBy('postDate', 'desc')
            ->take(4)
            ->get();
    
        $bookSeries = Post::paginate(4);

    
        return view('welcome', compact('highlight', 'latest', 'bookSeries'));
    }


    public function detail($postId)
    {
        $data = Post::where('postId', $postId)->first();
    
        if ($data) {
            return view('detail', ['data' => $data]);
        } else {
            return redirect()->route('home')->with('error', 'Post not found.');
        }
    }

    public function category($categoryId)
    {
        $data = Post::leftJoin('categories', 'posts.categoryId', '=', 'categories.categoryId')
            ->select('posts.title', 'posts.postCover', 'posts.description')
            ->where('posts.categoryId', $categoryId)
            ->get();
    
        return view('category', ['data' => $data]);
    }
    

    
}
