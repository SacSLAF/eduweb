@extends('layouts.website')

@section('title', 'Home Page')

@section('content')
@include('partials-web.hero')
@include('partials-web.courses',['courses' => $courses])
@endsection
