 <!-- recipes list -->
<div class="recipes-list">
    @foreach($recipes as $recipe)
        <!-- single recipe -->
        <a href="{{ route('recipes.single', ['id' => $recipe->id]) }}" class="recipe">
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