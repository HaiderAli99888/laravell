@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2">{{ __('Blog Management | Register') }}</h3>
                </div>
                <div class="card-body px-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                            <input id="name" type="text" placeholder="John Doe" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="xyz@gmail.com" name="email" value="{{ old('email') }}"  autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="***************" name="password"  autocomplete="new-password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light border toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="input-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="***************"  autocomplete="new-password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light border toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="role" class="col-form-label text-md-end">{{ __('Role') }}</label>
                            <select id="role" class="form-select form-control" name="role">
                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-0">
                            <button type="submit" class="btn btn-primary btn-block mt-4">{{ __('Register') }}</button>
                            <a href="{{route('login')}}" class="mt-3">{{ __('Already have an account? Login here.') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".toggle-button").click(function(){
            var type=$('#password').attr('type');
            if(type=='password'){
                $('#password').attr('type','text');
            }else{
                $('#password').attr('type','password');
            }
            $(".toggle-icon").toggleClass("fa-eye fa-eye-slash ");
        });
    });
</script>
@endsection
