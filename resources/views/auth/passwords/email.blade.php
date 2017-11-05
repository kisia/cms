@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="notification is-success">
            {{session('status') }}
        </div>
    @endif
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <form action="{{ route('password.email') }}" method="post" role="form">
                {{ csrf_field() }}
                <!-- card -->
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Reset Password</h1>
                        <div class="field">
                            <label for="email" class="label">E-Mail Address</label>
                            <p class="control">
                                <input type="text" class="input {{ $errors->has('email') ? 'is-danger' : ''}}" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <button class="button is-success is-outlined is-fullwidth m-t-30">Send Password Reset Link</button>
                    </div>
                </div>
                <!-- end card -->
            </form>
            <h5 class="has-text-centered m-t-20"><a href="{{ route('login')}}" class="is-muted">Already have an Account</a></h5>
        </div>
    </div>
@endsection
