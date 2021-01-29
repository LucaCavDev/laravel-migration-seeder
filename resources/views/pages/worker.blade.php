@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>
      [{{ $worker -> id }}]
      {{ $worker -> name }}
      {{ $worker -> lastname }}
      {{ $worker -> hire_date }}
    </h1>

  </div>

@endsection
