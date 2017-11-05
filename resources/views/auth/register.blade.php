@extends('layouts.app')
@section('content')
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <form action="{{ route('register') }}" method="post" role="form">
                {{ csrf_field() }}
                <!-- card -->
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Register</h1>
                        <div class="field">
                            <label for="name" class="label">Names</label>
                            <p class="control">
                                <input type="text" class="input {{ $errors->has('email') ? 'is-danger' : ''}}" name="name" id="email" placeholder="Your name" value="{{ old('name') }}" required>
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input type="text" class="input {{ $errors->has('email') ? 'is-danger' : ''}}" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="Password" class="label">Password</label>
                                    <p class="control">
                                        <input type="password" class="input {{ $errors->has('password') ? 'is-danger' : ''}}"  name="password" id="password" required>
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label for="Password" class="label">Confirm Password</label>
                                    <p class="control">
                                        <input type="password" class="input {{ $errors->has('password_confirmation') ? 'is-danger' : ''}}"  name="password" id="password" required>
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>
                    </div>
                </div>
                <!-- end card -->
            </form>
            <h5 class="has-text-centered m-t-20"><a href="{{ route('login')}}" class="is-muted">Already have an Account</a></h5>
        </div>
    </div>
@endsection
