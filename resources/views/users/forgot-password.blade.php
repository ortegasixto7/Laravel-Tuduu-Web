@extends('layouts.app')
@section('title', 'Forgot Password - ')
@section('content')
<div class="row mt-4 justify-content-center">
  <div class="col-sm-12 col-md-8 col-lg-6">
    <div class="card">
      <h3 class="card-title text-center mt-3">Forgot Password</h3>
      <div class="card-body">
        <form action="{{ route('users.change-password-view') }}">
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" autofocus />
          </div>
          <div class="form-group">
            <label for="inputSecurityCode">Security Code</label>
            <input type="password" class="form-control" id="inputSecurityCode" />
          </div>
          <div class="form-group mt-5">
            <button type="submit" class="btn btn-block btn-outline-success">Validate</button>
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