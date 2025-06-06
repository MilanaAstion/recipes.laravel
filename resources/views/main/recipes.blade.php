@extends('layouts.main')
@section('content')
    <!-- main -->
    <main class="page">
      <section class="recipes-container">
      
        @include('templates.tags-menu')

        @include('templates.recipes-list')
        
      </section>
    </main>
    <!-- end of main -->
@endsection