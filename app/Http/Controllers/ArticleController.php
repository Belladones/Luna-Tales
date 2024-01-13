<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class ArticleController extends Controller
{
    public function afficherArticle($id) {
        $book = Books::findOrFail($id);
        return view('home/article', compact('book'));
    }

}
