@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>WORKERS:</h1>
    <ul>
    	@foreach ($workers as $worker)
        <li>
          <a href="{{ route('worker-show', $worker -> id ) }}">
            {{ $worker -> name }}
            {{ $worker -> lastname }}
          </a>
        </li>
    	@endforeach
    </ul>

  </div>

@endsection
