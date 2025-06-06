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
       
      @include('templates.tags-menu')

      @include('templates.recipes-list')

      </section>
    </main>
    <!-- end of main -->
@endsection
