@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>
      [{{ $brand -> id }}]
      {{ $brand -> name }}:
      {{ $brand -> n_locations }} offices
    </h1>

    <img src="{{ $brand -> logo }}" alt="">

  </div>

@endsection
