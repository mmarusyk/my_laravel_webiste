<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Disciplines;
use App\Page;
use App\Professors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard() {
        return view('admin.dashboard', [
            'pages' => Page::lastPages(8),
            'articles' => Article::lastArticles(8),
            'professors' => Professors::lastProfessors(8),
            'disciplines' => Disciplines::lastDisciplines(8),
            'count_pages' => Page::count(),
            'count_articles'=>Article::count(),
            'count_professors'=>Professors::count(),
            'count_disciplines'=>Disciplines::count(),
        ]);
    }
}
