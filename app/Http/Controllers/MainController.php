<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Tag;

class MainController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        $tags = Tag::all();
        return view('main.index', ['recipes' => $recipes, 'tags' => $tags]);
    }
}
