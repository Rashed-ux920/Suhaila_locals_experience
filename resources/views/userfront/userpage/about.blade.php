@extends('userfront.layout.master')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
          <h1>About</h1>
          <nav class="breadcrumbs">
            <ol>
                @if (Auth::check())
                <li><a href="{{route('home')}}">Home</a></li>
                @else
                <li><a href="{{route('landing')}}">Home</a></li>
                @endif

              <li class="current">About</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
      @include('userfront.includes.sectiones.misstion')
      @include('userfront.includes.sectiones.whyus')
@endsection
