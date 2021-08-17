@extends(config('settings.theme').'.layouts.crud')

@section('title', isset($user) ? "Update - ".$user->name : 'Create user')

@section('content')
<a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to users</a>
<form action="{{ isset($user) ? route('users.update', $user) : route('users.store') }}" method="POST">
  @isset ($user)
      @method('PUT')
  @endisset
  @csrf
  <div class="row mt-3">
    <div class="col">
      <input type="text" name="name" class="form-control" placeholder="name" aria-label="Name" value="{{ isset($user) ? $user->name : old('name') }}">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <input type="text" name="email" class="form-control" placeholder="email" aria-label="Email" value="{{ isset($user) ? $user->email : old('email') }}">
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <button type="submit" class="btn btn-success">{{ isset($user) ? 'Update' : 'Create' }}</button>
    </div>
    
  </div>
</form>
@endsection
