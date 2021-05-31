@extends('layouts.auth', ['title' => 'Login'])

@section('auth')
    <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo text-left">
            <img src="{{asset('images/logo-uniga.png')}}" alt="logo">
        </div>
        <h3 class="font-weight-bold">Silahkan login</h3>
        {{-- <h6 class="font-weight-light">Happy to see you again!</h6> --}}
        <form class="pt-3">
        <div class="form-group">
            <label for="exampleInputEmail">Username</label>
            <div class="input-group">
            <div class="input-group-prepend bg-transparent">
                <span class="input-group-text bg-transparent border-right-0">
                <i class="mdi mdi-account-outline text-primary"></i>
                </span>
            </div>
            <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username">
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
            <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
            </div>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
            
            </div>
        </div>
        <div class="my-3">
            <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">LOGIN</a>
        </div>
        
        <div class="text-center mt-4 font-weight-light">
            Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
        </div>
        </form>
    </div>
@endsection