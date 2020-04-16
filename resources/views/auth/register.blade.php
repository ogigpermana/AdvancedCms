@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Join in Community</h1>
                    <form action="{{ route('register') }}" method="POST" role="form">
                        @csrf
                        <div class="field">
                            <label for="name" class="label">name</label>
                            <div class="control">
                              <input class="input is-primary @error('name') is-danger @enderror" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Input name" required>
                              @error('name')
                                <p class="help is-danger">
                                    {{$message}}
                                </p>
                              @enderror
                            </div>
                          </div>
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
                              <button type="submit" class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>
                          </div>
                    </form>
                </div>
            </div>
            <div class="has-text-centered m-t-20">
                @if (Route::has('login'))
                <a class="is-muted" href="{{ route('login') }}">
                    {{ __('Already have an account?') }}
                </a>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
