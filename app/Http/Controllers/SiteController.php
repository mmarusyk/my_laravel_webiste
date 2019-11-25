<?php

namespace App\Http\Controllers;

use App\Page;
use App\Article;
use App\Professors;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function page($slug) {
        $page = Page::where('slug', $slug)->first();
        return view('site.page', [
            'page' => $page,
            'articles' => $page->articles()->where('published', 1)->paginate(20)
        ]);
    }
    public function article($slug) {
        return view('site.article', [
            'article' => Article::where('slug', $slug)->first()
        ]);
    }

    public function professors() {
        return view('site.professors', [
            'professors'=> Professors::paginate(20)
        ]);
    }
    public function professor($id) {
        return view('site.professor', [
            'professor'=> Professors::where('id', $id)->first()
        ]);
    }
}
