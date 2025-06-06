@extends('layouts.main')
@section('content')
    <main class="page">
         <section class="tags-wrapper">
            @foreach($tags as $tag)
                <!-- single tag -->
                    <a href="tag-template.html" class="tag">
                        <h5>{{ $tag->name }}</h5>
                        <p>1 recipe</p>
                    </a>
                    <!-- end of single tag -->
            @endforeach
        </section>
    </main>
@endsection