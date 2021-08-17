@extends(config('settings.theme').'.layouts.crud')

@section('title', isset($user) ? "Update - ".$user->name : 'Create user')

@section('content')
	@dd($user)
@endsection
