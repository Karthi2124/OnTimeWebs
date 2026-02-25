@extends('layouts.app')

@section('title', 'OnTimeWebs - Affordable Websites for Indian Startups')

@section('content')

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="max-w-4xl mx-auto mt-6 bg-red-100 text-red-700 p-4 rounded-lg shadow">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Success Message --}}
    @if(session('success'))
        <div class="max-w-4xl mx-auto mt-6 bg-green-100 text-green-700 p-4 rounded-lg shadow text-center">
            {{ session('success') }}
        </div>
    @endif

    {{-- Page Sections --}}
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