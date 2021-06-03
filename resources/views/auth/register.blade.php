@extends('layouts.auth', ['title' => 'Register'])

@section('auth')
<div class="auth-form-transparent text-left p-3">
    <div class="brand-logo">
      <img src="{{asset('images/logo.png')}}" alt="logo">
    </div>
    <h4>Registrasi</h4>
    {{-- <h6 class="font-weight-light">Join us today! It takes only few steps</h6> --}}
    <form class="pt-3" action="/register" method="post">
      @csrf
      <div class="form-group">
        <label>Name</label>
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <span class="input-group-text bg-transparent border-right-0">
              <i class="mdi mdi-account-outline text-primary"></i>
            </span>
          </div>
          <input type="text" name="name" id="name" class="border-left-0 form-control @error('name')is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
          @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div class="form-group">
        <label>Email</label>
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <span class="input-group-text bg-transparent border-right-0">
              <i class="mdi mdi-email-outline text-primary"></i>
            </span>
          </div>
          <input type="email" name="email" id="email" class="form-control border-left-0 @error('email')is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
          @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <div class="form-group">
        <label>Password</label>
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <span class="input-group-text bg-transparent border-right-0">
              <i class="mdi mdi-lock-outline text-primary"></i>
            </span>
          </div>
          <input type="password" name="password" id="password" class="form-control border-left-0 @error('password')is-invalid @enderror" placeholder="Password">
          @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror                
        </div>
      </div>
      <div class="form-group">
        <label>Password Confirmation</label>
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <span class="input-group-text bg-transparent border-right-0">
              <i class="mdi mdi-lock-outline text-primary"></i>
            </span>
          </div>
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control border-left-0" placeholder="Password Confirmation">
        </div>
      </div>
      <div class="mb-4">
        
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
      </div>
      <div class="text-center mt-4 font-weight-light">
        Already have an account? <a href="/login" class="text-primary">Login</a>
      </div>
    </form>
  </div>
@endsection