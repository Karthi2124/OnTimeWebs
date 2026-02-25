@extends('layouts.app')

@section('title', 'OnTimeWebs - Affordable Websites for Indian Startups')

@section('content')
    @include('partials.banner')
    @include('partials.company')
    @include('partials.enquiry-form')
    @include('partials.about')
    @include('partials.services')
    @include('partials.features')
    @include('partials.vision-mission')
    @include('partials.what-we-do')
    @include('partials.pricing')
    @include('partials.contact')
    @include('partials.google-map')
    @include('partials.address')
   
@endsection