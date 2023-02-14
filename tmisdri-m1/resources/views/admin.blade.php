@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Auth::user()->role == 2)
            <h1>This is Admin</h1>
        @else
            <h1>not way</h1>
        @endif
    </div>
@endsection
