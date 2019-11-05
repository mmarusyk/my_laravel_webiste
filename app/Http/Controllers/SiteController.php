<?php

namespace App\Http\Controllers;

use App\Page;
use App\Article;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function page($slug) {
        $page = Page::where('slug', $slug)->first();
        return view('site.page', [
            'page' => $page,
            'articles' => $page->articles()->where('published', 1)->paginate(1)
        ]);
    }
    public function article($slug) {
        return view('site.article', [
            'article' => Article::where('slug', $slug)->first()
        ]);
    }
}
