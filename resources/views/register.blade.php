@extends('templates.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center vh-100">
            <div class="col-lg-8 text-center align-self-center">
                <h1 class="fs-2">Register Your Account</h1>
                <div class="row justify-content-center my-3">
                    <div class="col-lg-6 tex-start">
                        <form action="{{ url('register') }}" method="post">
                            @csrf
                            <input type="text" id="username" placeholder="Username" class="form-control border-3 rounded-3" name="username" value="">
                            <input type="password" id="password" placeholder="Password" class="form-control border-3 rounded-3" name="username">
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-dark rounded-3">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection