@extends('layouts.app')

@section('content')

<div class="container">
    @Auth
        <profile-component></profile-component>
    @endAuth
</div>

@endsection
