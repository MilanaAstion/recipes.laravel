@extends('layouts.main')
@section('content')
    <!-- main -->
    <main class="page">
      <!-- header -->
      <header class="hero">
        <div class="hero-container">
          <div class="hero-text">
            <h1>simply recipes</h1>
            <h4>no fluff, just recipes</h4>
          </div>
        </div>
      </header>
      <!-- end of header -->
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>recipes</h4>
          <div class="tags-list">
            @foreach($tags as $tag)
                <a href="tag-template.html">{{$tag->name}} (1)</a>
            @endforeach
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
            @foreach($recipes as $recipe)
                <!-- single recipe -->
                <a href="single-recipe.html" class="recipe">
                    <img
                    src="{{ asset('img/' . $recipe->img) }}"
                    class="img recipe-img"
                    alt=""
                    />
                    <h5>{{$recipe->name}}</h5>
                    <p>Prep : {{$recipe->prep}}min | Cook : {{$recipe->cook}}min</p>
                </a>
                <!-- end of single recipe -->
          @endforeach
        </div>
        <!-- end of recipes list -->
      </section>
    </main>
    <!-- end of main -->
@endsection
