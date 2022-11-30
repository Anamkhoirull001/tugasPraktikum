@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-5 mt-3 fw-normal">Please Login</h1>
                <form>
                    <div class="form-floating">
                        <input
                            type="email"
                            class="form-control"
                           id="floatingInput"
                           placeholder="name@example.com"
                           />
                           <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input
                           type="password"
                            class="form-control"
                           id="floatingPassword"
                           placeholder="Password"
                       />
                        <label for="floatingPassword">Password</label>
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

