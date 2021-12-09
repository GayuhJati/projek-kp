@extends('templates.main')
@section('navbar')
    @include('templates.partials.navbar')
@endsection
@section('content')
    <div class="container center" style="margin-bottom: 200px">
        <div class="col-4">
            <h3 style="padding-left: 150px; margin-bottom: 30px">Sign Up</h3>
            <form action="{{ url('resipe') }}" method="post">
                @csrf
                <div class="mb-1">
                    <input type="text" class="form-control" id="username" maxlength="20" name="username" placeholder="Username">
                    <label for="exampleFormControlInput1" class="form-label">Input Max.20 Karakter</label>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" minlength="8" name="password" placeholder="Password">
                    <label for="exampleFormControlInput1" class="form-label">Input Max.8 Karakter</label>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="image">
                    <label class="input-group-text" for="inputGroupFile02">Foto Profil</label>
                </div>
                <button type="submit" class="btn btn-secondary" id="save">Save</button>
            </form>
        </div>
    </div>
@endsection
@section('footer')
    @include('templates.partials.footer')
@endsection