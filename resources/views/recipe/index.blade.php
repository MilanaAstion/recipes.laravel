@extends('layouts.admin')
@section('content')
	<div class="container">
		<h1 class="text-center">Recipes</h1>
		
		<a href="form.html" class="btn btn-primary mb-3" role="button">Add recipe</a>
		
		<table class="table table-bordered table-hover">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Image</th>
					<th scope="col">Prep time</th>
					<th scope="col">Cook time</th>
					<th scope="col">Serving</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($recipes as $recipe)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>
							<a href="single_recipe.html">Banana Pancakes</a>	
						</td>
						<td><img src="{{ asset('img/' . $recipe->img) }}" height="100px"></td>
						<td>{{$recipe->prep}} min</td>
						<td>{{$recipe->cook}} min</td>
						<td>{{$recipe->serving}} servings</td>
						<td>
							<a href="#" class="btn-sm btn-danger">Delete</a>
							<a href="#" class="btn-sm btn-primary">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
