@extends(config('settings.theme').'.layouts.crud')

@section('title', 'users')

@section('content')
<a class="btn btn-primary" role="button" href="{{ route('users.create') }}">Create user</a>
<table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($users as $user)
      	<tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>
          	<a href="{{ route('users.show', $user) }}">
          		{{ $user->name }}
          	</a>
          </td>
          <td>
          	<a href="{{ route('users.show', $user) }}">
          		{{ $user->email }}
          	</a>
          </td>
          <td>
          	<form action="{{ route('users.destroy', $user) }}" method="POST">
          		@method('DELETE')
          		@csrf
          		<a class="btn btn-warning" type="button" href="{{ route('users.edit', $user) }}">Edit</a>
          		<button type="submit" class="btn btn-danger">Delete</button>
          	</form>
          </td>
        </tr>
      	@endforeach

      </tbody>
    </table>
@endsection
