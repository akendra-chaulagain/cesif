@php
    $breed = App\Models\Navigation::find($normal->parent_page_id);
    $global_setting = app\Models\GlobalSetting::all()->first();
    $side_bar = App\Models\Navigation::find($normal->parent_page_id)->childs;
    
@endphp


@extends('layouts.master')
@push('title')
    {{ $normal->caption }}
@endpush
@section('content')
    <section id="pageCover" class="row aboutUs">
        <div class="row pageTitle">{{ $normal->caption }}</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="#">{{ $breed->caption }}</a></li>
                <li class="active">{{ $normal->caption }}</li>
            </ol>
        </div>
    </section>







    @if ($breed->nav_name == 'services')
        <section id="aboutus" class="row">
            <div class="container">
                <div class="row">

                    <div class=" col-sm-12">
                        <div class="row aboutContent">
                            <div class="row aboutUsTexts m0 member">
                                <div class="fleft textsPart">
                                    <h2>{!! $normal->short_content !!}</h2>
                                    <p>{!! $normal->long_content !!}</p>
                                </div>
                                <div class="fleft aboutImg">
                                    <img src="{{ $normal->banner_image }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    @else
        <section id="aboutus" class="row">
            <div class="container">
                <div class="row">

                    <div class=" col-sm-9">
                        <div class="aboutContent">
                            <div class="aboutUsTexts  member">
                                <div class="textsParts">
                                    <h2>{!! $normal->short_content !!}</h2>
                                    <p>{!! $normal->long_content !!}</p>
                                </div>
                                <div class="aboutImg">
                                    <img src="{{ $normal->banner_image }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <aside class="col-sm-3 sidebar">
                        <div class="row m0 recentPostWidget widgetS">
                            <div class="row m0 recentblogs">
                                @foreach ($side_bar as $side_bar_item)
                                    <div class="media recentblog">
                                        <div class="media-body">
                                            <a href="{{ $side_bar_item->nav_name }}">
                                                <h5 class="media-heading">{{ $side_bar_item->caption }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="row m0 contactWidget widgetS">
                            <h4>Contact us</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-phone"></i>
                                    <a href="tel:{{ $global_setting->phone }}">{{ $global_setting->phone }}

                                    </a>
                                </li>
                                <li><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>
                                </li>
                                <li><i class="fa fa-home"></i> {{ $global_setting->website_full_address }}
                                    {{ $global_setting->address_ne }}</li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    @endif
@endsection
