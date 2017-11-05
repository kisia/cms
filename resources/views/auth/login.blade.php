@extends('layouts.app')
@section('content')
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <form action="{{ route('login') }}" method="post" role="form">
                {{ csrf_field() }}
                <!-- card -->
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Log In</h1>
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
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
                        <b-checkbox name="remember" class="m-t-20"> Remember Me</b-checkbox>

                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Log In</button>
                    </div>
                </div>
                <!-- end card -->
            </form>
            <h5 class="has-text-centered m-t-20"><a href="{{ route('password.request')}}" class="is-muted">Forgot Your Password</a></h5>
        </div>
    </div>
@endsection
