<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class BlogController extends Controller
{
    public function index()
    {
        $data = DB::table('blog_posts')
            ->orderBy('id', 'desc')->first();
        return view('index', compact('data'));
    }

    public function postIndex($id)
    {
        $ind = DB::table('blog_posts')
            ->where('id', $id)
            ->first();
        return view('post_details', compact('ind'));
    }

    public function allpost()
    {
        $data = DB::table('blog_posts')
            ->get();
        return view('all_posts', compact('data'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'blog_name' => 'required|string',
        ]);

        $searched = DB::table('blog_posts')
            ->where('title', 'like', '%' . $request->blog_name . '%')
            ->get();

        return view('searched', compact('searched', 'request'));
    }
}
