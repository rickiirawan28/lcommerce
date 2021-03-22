@extends('layouts.app')

@section('body')
<x-navbar />
<div class="py-2">
    @yield('content')
</div>
@endsection
