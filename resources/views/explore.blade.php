@extends('templates.main')
@section('navbar')
    @include('templates.partials.navbar')
@endsection
@section('content')
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
@endsection
@section('footer')
    @include('templates.partials.footer')
@endsection