@extends('layouts.app')
@section('title', 'Alms Oil Nigeria Limited | Integrated Energy Services')

@section('content')

{{-- 1. Hero --}}
@include('sections.hero')

{{-- 2. Certifications Marquee --}}
@include('sections.certifications')

{{-- 3. About --}}
@include('sections.about')

{{-- 4. Services --}}
@include('sections.services')

{{-- 5. Core Values --}}
@include('sections.values')

{{-- 6. Testimonials --}}
@include('sections.testimonials')

{{-- 7. Blog Preview --}}
@include('sections.blog-preview')

{{-- 8. FAQ --}}
@include('sections.faq')

{{-- 9. Looking Ahead / CTA --}}
@include('sections.looking-ahead')

@endsection
