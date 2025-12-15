@extends('layouts.app')

@section('content')
    @include('front.banner')
    @include('front.counter')
    @include('front.popularCourses')
    @include('front.actionBox')
    @include('front.trendingCourses')
    @include('front.reviews')
@endsection
