@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-5 mt-3 fw-normal">Register Now</h1>
            <form>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="name" name="name" placeholder="Name"/>
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Name"/>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" />
                       <label for="floatingInput">Email Address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" id="password" name="passsword" placeholder="Password" />
                    <label for="password">Password</label>
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