@extends('Layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-5 mt-3 fw-normal">Register Now</h1>
            <form method="post" action="/register" >
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror"  value="{{ old('name') }}" id="name" name="name" placeholder="Name" required />
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="username" name="username" placeholder="Username" required/>
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com" required/>
                       <label for="email">Email Address</label>
                       @error('email')
                       <div class="invalid-feedback">
                           {{ $message }}
                       </div>
                   @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" name="password" placeholder="password" required/>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mb-4 mt-4" type="submit">
                    Register
                </button>
            </form>
            <small>Alredy Registered? <a href="/login">Login!</a></small>
        </main>
    </div>
</div>

@endsection