@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">{{ __('Reset Password') }}</h1>
                    @if(session('status'))
                        <div class="notification is-success">
                        Your password has been reset!
                        </div>
                    @endif
                    <form action="{{ route('password.update') }}" method="POST" role="form">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <div class="control">
                              <input class="input is-primary @error('email') is-danger @enderror" id="email" type="text" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                              @error('email')
                                <p class="help is-danger">
                                    {{$message}}
                                </p>
                              @enderror
                            </div>
                          </div>
                          <div class="columns">
                              <div class="column">
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
                              </div>
                              <div class="column">
                                <div class="field">
                                    <label for="password_confirm" class="label">Confirm Password</label>
                                    <div class="control">
                                      <input name="password_confirm" id="password_confirm" class="input is-primary @error('password_confirm') is-danger @enderror" type="password" required>
                                      @error('password_confirm')
                                        <p class="help is-danger">
                                            {{$message}}
                                        </p>
                                      @enderror
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="buttons">
                              <button type="submit" class="button is-primary is-outlined is-fullwidth m-t-30"> {{ __('Reset Password') }}</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
