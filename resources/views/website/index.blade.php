@extends('layouts.master')
@push('title')
    Home
@endpush

@section('content')
<section class="pt-0">
    @include('website.main_slider')
    @include('website.homeRajnetiAndSports')
    @include('website.home_artha')
    @include('website.homeWorld')


    {{-- @include('website.home_about_company') --}}
    {{-- @include('website.home_monthly_analysis') --}}
    {{-- @include('website.home_commentries') --}}

    {{-- @include('website.home_about_company')
    @include('website.home_job_category')
    @include('website.home_message')
    @include('website.home_notice')
    @include('website.company_partner') --}}
</section>
@endsection
