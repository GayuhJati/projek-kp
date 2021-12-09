@extends('templates.main')

@section('navbar')
    @include('templates.partials.navbar')
@endsection
@section('content')
    <div class="container">
          <div class="diffdiv rounded-sm">
              <div class="judul">
                  <h1>Where the best recipe were made.</h1>
                  <h6>All recipe of food that you can found and recipe that you can make
                      for your page or you just want to share your beautiful recipe to the world
                  </h6>
                  <a class="btn btn-secondary tombol" href="/register" role="button">Create Now</a>
              </div>
          </div>
          <div class="diffdiv rounded-sm mt-3" style="height: 100%">
            <div class="container mt-3" style="">
              <div><h4 style="padding-top: 20px">Explore</h4></div>
              <div class="col">
                @forelse ($reseps as $resep)
                  <div class="card mb-3" >
                    <img src="{{ $resep['image'] }}" class="card-img-top" alt="..." style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">{{ $resep['title'] }}</h5>
                      <p class="card-text">{{ $resep['body'] }}</p>
                      <p class="card-text"><small class="text-muted">{{ $resep['writer'] }}</small></p>
                    </div>
                    <a class="btn btn-secondary tombol mb-3" href="/explore" role="button">Find More</a>
                  </div>
                  
                @empty
                    <div class="col-12">
                      <div class="alert alert-warning" style="margin-top: 20px">
                        <h4 class="alert-heading">Explore having a problem</h4>
                        <p>
                          No data recipe found in database
                        </p>
                      </div>
                    </div>
                @endforelse
                </div>
            </div>
          </div>
          
    </div>
@endsection
@section('footer')
    @include('templates.partials.footer')
@endsection
