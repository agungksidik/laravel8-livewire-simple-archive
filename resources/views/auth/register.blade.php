@extends('layouts.auth')

@section('auth')
<div class="auth-form-transparent text-left p-3">
    <div class="brand-logo">
      <img src="{{asset('images/logo-uniga.png')}}" alt="logo">
    </div>
    <h4>Registrasi</h4>
    {{-- <h6 class="font-weight-light">Join us today! It takes only few steps</h6> --}}
    <form class="pt-3">
      <div class="form-group">
        <label>Username</label>
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <span class="input-group-text bg-transparent border-right-0">
              <i class="mdi mdi-account-outline text-primary"></i>
            </span>
          </div>
          <input type="text" class="form-control form-control-lg border-left-0" placeholder="Username">
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
          <input type="email" class="form-control form-control-lg border-left-0" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label>Country</label>
        <select class="form-control form-control-lg" id="exampleFormControlSelect2">
          <option>Country</option>
          <option>United States of America</option>
          <option>United Kingdom</option>
          <option>India</option>
          <option>Germany</option>
          <option>Argentina</option>
        </select>
      </div>
      <div class="form-group">
        <label>Password</label>
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <span class="input-group-text bg-transparent border-right-0">
              <i class="mdi mdi-lock-outline text-primary"></i>
            </span>
          </div>
          <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
        </div>
      </div>
      <div class="mb-4">
        
      </div>
      <div class="mt-3">
        <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a>
      </div>
      <div class="text-center mt-4 font-weight-light">
        Already have an account? <a href="login.html" class="text-primary">Login</a>
      </div>
    </form>
  </div>
@endsection