@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('erorLogin'))
                <div class="alert alert-danger">
                    {{ session('erorLogin') }}
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-5 mt-3 fw-normal">Please Login</h1>
                <form method="post" action="/login">
                    @csrf
                    <div class="form-floating">
                        <input
                            type="text"
                            class="form-control @error('username') is-invalid @enderror"
                            name="username"
                           id="username"
                           placeholder="username"
                           value="{{ old('username') }}"
                           autofocus
                           required
                           />
                           <label for="username">Username</label>
                           @error('username')
                             <div class="invalid-feedback">
                             {{ $message }}
                             </div>
                             @enderror
                    </div>
                    <div class="form-floating">
                        <input
                           type="password"
                            class="form-control"
                            name="password"
                           id="Password"
                           placeholder="Password"
                           required
                       />
                        <label for="Password">Password</label>
                    </div>
                        <button class="w-100 btn btn-lg btn-primary mb-4 mt-4" type="submit">
                           Login
                       </button>
                </form>
                   <small>Not Regstered? <a href="/register">Register Now</a></small>
             </main>
        </div>
    </div>
 @endsection

