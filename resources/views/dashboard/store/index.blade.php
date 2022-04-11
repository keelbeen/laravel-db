@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="h-100 p-5 bg-light border rounded-3">
      <h1 class="display-4">{{ auth()->user()->username }}</h1>
      <h2 class="lead">{{ auth()->user()->email }}</h2>
      <p class="lead">{{ auth()->user()->phone }}</p>
    </div>
  </div>
</div>
    
@endsection