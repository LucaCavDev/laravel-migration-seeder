@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>BRANDS:</h1>
    <ul>
    	@foreach ($brands as $brand)
        <li>
          <a href="{{ route('brand-show', $brand -> id ) }}">
            {{ $brand -> name }}<br>
          </a>
        </li>
    	@endforeach
    </ul>

  </div>

@endsection
