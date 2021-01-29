@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>LOCATIONS:</h1>
    <ul>
    	@foreach ($locations as $location)
        <li>
          <a href="{{ route('location-show', $location -> id ) }}">
            {{ $location -> name }}
          </a>
        </li>
    	@endforeach
    </ul>

  </div>

@endsection
