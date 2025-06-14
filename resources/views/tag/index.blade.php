@extends('layouts.admin')
@section('content')
	<div class="container">
		<h1 class="text-center">Tags</h1>
		
		<a href="form.html" class="btn btn-primary mb-3" role="button">Add tag</a>
		
		<table class="table table-bordered table-hover">
			<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Actions</th>
			</tr>
			</thead>
			<tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$tag->name}}</td>
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