@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>
      [{{ $location -> id }}]
      {{ $location -> name }}:
      {{ $location -> address }}
      {{ $location -> n_workers }}
    </h1>

  </div>

@endsection
