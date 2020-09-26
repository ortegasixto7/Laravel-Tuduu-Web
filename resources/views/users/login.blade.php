@extends('layouts.app')
@section('title', 'Login - ')
@section('content')
<div class="row mt-4 justify-content-center">
  <div class="col-sm-12 col-md-8 col-lg-6">
    <div class="card">
      <h3 class="card-title text-center mt-3">Login</h3>
      <div class="card-body">
        <form action="{{ route('home.index') }}">
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" autofocus />
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" />
          </div>
          <div class="form-group">
            <a href="{{ route('users.forgot-password-view') }}">Forgot password?</a>
          </div>
          <div class="form-group">
            <p>Don't have an account? <a href="{{ route('users.register-view') }}">Register here</a></p>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-block btn-outline-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection