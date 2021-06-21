@extends('layouts.auth', ['title' => 'Login'])

@section('auth')
    <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo text-left">
            <img src="{{asset('images/logo.png')}}" alt="logo">
        </div>
        <h3 class="font-weight-bold">Silahkan login</h3>
        {{-- <h6 class="font-weight-light">Happy to see you again!</h6> --}}
        <form class="pt-3" action="/login" method="post">
            @csrf
        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <div class="input-group">
            <div class="input-group-prepend bg-transparent">
                <span class="input-group-text bg-transparent border-right-0">
                    <i class="mdi mdi-account-outline text-primary"></i>
                </span>
            </div>
            <input type="text" name="email" class="form-control form-control-lg border-left-0 @error('email')is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <div class="input-group">
            <div class="input-group-prepend bg-transparent">
                <span class="input-group-text bg-transparent border-right-0">
                <i class="mdi mdi-lock-outline text-primary"></i>
                </span>
            </div>
            <input type="password" name="password" id="password" class="form-control form-control-lg border-left-0 @error('email')is-invalid @enderror" placeholder="Password">
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror                     
            </div>
            
        </div>
        
        <div class="my-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
        </div>
        <div class="mb-2 d-flex">
            <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
              <i class="mdi mdi-facebook mr-2"></i>Facebook
            </button>
            <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
              <i class="mdi mdi-google mr-2"></i>Google
            </button>
          </div>        
        <div class="text-center mt-4 font-weight-light">
            Don't have an account? <a href="/register" class="text-primary">Create</a>
        </div>
        </form>
    </div>
@endsection