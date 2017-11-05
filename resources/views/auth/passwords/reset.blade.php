@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            {{session('status') }}
        </div>
    @endif
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <form action="{{ route('password.request') }}" method="post" role="form">
                {{ csrf_field() }}
                <!-- card -->
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Reset Password</h1>
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input type="hidden" name="token" value="{{ $token }}">
                                <input type="text" class="input {{ $errors->has('email') ? 'is-danger' : ''}}" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="Password" class="label">Password</label>
                            <p class="control">
                                <input type="password" class="input {{ $errors->has('password') ? 'is-danger' : ''}}"  name="password" id="password">
                            </p>
                            @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="Password" class="label">Confirm Password</label>
                            <p class="control">
                                <input type="password" class="input {{ $errors->has('password_confirmation') ? 'is-danger' : ''}}"  name="password_confirmation" id="password-confirm">
                            </p>
                            @if ($errors->has('password_confirmation'))
                                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                            @endif
                        </div>

                        <button class="button is-success is-outlined is-fullwidth m-t-30">Reset Password</button>
                    </div>
                </div>
                <!-- end card -->
            </form>
        </div>
    </div>
@endsection
