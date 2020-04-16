@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Log in</h1>
                    <form action="{{ route('login') }}" method="POST" role="form">
                        @csrf
                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <div class="control">
                              <input class="input is-primary @error('email') is-danger @enderror" id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Input Email" required>
                              @error('email')
                                <p class="help is-danger">
                                    {{$message}}
                                </p>
                              @enderror
                            </div>
                          </div>
                          <div class="field">
                            <label for="password" class="label">Password</label>
                            <div class="control">
                              <input name="password" id="password" class="input is-primary @error('password') is-danger @enderror" type="password" required>
                              @error('password')
                                <p class="help is-danger">
                                    {{$message}}
                                </p>
                              @enderror
                            </div>
                          </div>
                          <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
                          <div class="buttons">
                              <button type="submit" class="button is-primary is-outlined is-fullwidth m-t-30">Login</button>
                          </div>
                    </form>
                </div>
            </div>
            <div class="has-text-centered m-t-20">
                @if (Route::has('password.request'))
                <a class="is-muted" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
