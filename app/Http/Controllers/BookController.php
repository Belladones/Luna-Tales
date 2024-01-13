<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{

    public function showCatalogue(Request $request)
    {
        $genres = Books::select('genre')->distinct()->pluck('genre');
        $selectedGenre = $request->input('genre');
        $selectedLetter = $request->input('letter');
        $selectedType = $request->input('type');
        $searchTerm = $request->input('search');


        $query = Books::query();

        if ($selectedGenre) {
            $query->where('genre', $selectedGenre);
        }

        if ($selectedLetter) {
            $query->where('title', 'like', $selectedLetter . '%');
        }

        if ($selectedType) {
            $query->where('type', $selectedType);
        }

        if ($searchTerm) {
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('author', 'like', '%' . $searchTerm . '%');
            });
        }

        $books = $query->get();

        return view('home/catalogue', compact('books', 'genres', 'selectedGenre', 'selectedLetter', 'selectedType', 'searchTerm'));
    }
}
