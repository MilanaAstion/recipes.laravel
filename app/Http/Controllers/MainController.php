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

    public function single($id)
    {
        $recipe = Recipe::find($id);
        return view('main.single', ['recipe' => $recipe]);
    }

    public function tags()
    {
        $tags = Tag::all();
        return view('main.tags', ['tags' => $tags]);
    }

    public function recipes()
    {
        $recipes = Recipe::all();
        $tags = Tag::all();
        return view('main.recipes', ['recipes' => $recipes, 'tags' => $tags]);
    }
}
