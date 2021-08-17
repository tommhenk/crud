@extends(config('settings.theme').'.layouts.crud')

@section('title', 'User '.$user->name)

@section('content')
<a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to users</a>

	<div class="card mt-3" style="width: 18rem;">
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Id: {{ $user->id }}</li>
	    <li class="list-group-item">Name: {{ $user->name }}</li>
	    <li class="list-group-item">Email: {{ $user->email }}</li>
	    <li class="list-group-item">Created: {{ $user->created_at->format("d/m/Y H:i:s") }}</li>
	    <li class="list-group-item">Updated: {{ $user->updated_at->format("d/m/Y H:i:s") }}</li>
	  </ul>
	</div>

	<a class="btn btn-warning mt-3" type="button" href="{{ route('users.edit', $user) }}">Edit</a>
@endsection
