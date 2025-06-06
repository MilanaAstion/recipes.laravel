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