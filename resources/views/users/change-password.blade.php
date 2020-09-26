@extends('layouts.app')
@section('title', 'Change Password - ')
@section('content')
<div class="row mt-4 justify-content-center">
  <div class="col-sm-12 col-md-8 col-lg-6">
    <div class="card">
      <h3 class="card-title text-center mt-3">Change Password</h3>
      <div class="card-body">
        <form action="{{ route('users.login-view') }}">
          <div class="form-group">
            <label for="inputNewPassword">New Password</label>
            <input type="password" class="form-control" id="inputNewPassword" autofocus />
          </div>
          <div class="form-group mt-5">
            <button type="submit" class="btn btn-block btn-outline-success">Change</button>
          </div>
          <div class="form-group">
            <a href="{{ route('users.login-view') }}" class="btn btn-block btn-secondary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection