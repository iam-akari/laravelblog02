<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    /**
     * ブログ一覧を表示する
     */
    public function showList()
    {
        return view('blog.list');
    }
}
