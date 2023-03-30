<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */
    public function showList()
    {
        $blogs = Blog::all();
        return view('blog.list', 
        ['blogs' => $blogs]);
    }

    /**
     * ブログ詳細を表示する
     * @param in $id
     * @return view
     */
    public function showDetail($id)
    {
        $blog = Blog::find($id);

        if (is_null($blog)) {
            \Session::flash('err_msg', 'データがない');
            return redirect(route('blogs'));
        }

        return view('blog.detail', 
        ['blog' => $blog]);
    }

    public function showCreate()
    {
        return view('blog.form');
    }
}
