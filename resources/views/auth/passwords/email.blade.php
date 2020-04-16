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
                          Your request reset password has been sent
                        </div>
                    @endif
                    <form action="{{ route('password.email') }}" method="POST" role="form">
                        @csrf
                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <div class="control">
                              <input class="input is-primary @error('email') is-danger @enderror" id="email" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Input email">
                              @error('email')
                                <p class="help is-danger">
                                    {{$message}}
                                </p>
                              @enderror
                            </div>
                          </div>
                          <div class="buttons">
                              <button type="submit" class="button is-primary is-outlined is-fullwidth m-t-30">{{ __('Send Password Reset Link') }}</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
