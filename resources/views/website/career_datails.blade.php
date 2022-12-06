@php
    $carrer = App\Models\Navigation::find($career_details->parent_page_id)->career_childs->take(5);
@endphp



@extends('layouts.master')
@push('title')
    {{ $career_details->caption }}
@endpush
@section('content')
    <section class="mt-120">
        <div class="container">
            <h3 class="h-sep theme-color"> {{ $career_details->caption }}</h3>
            <div class="divider_block clearfix">
                <hr class="divider first">
                <hr class="divider subheader_arrow">
                <hr class="divider last">
            </div>
        </div>
    </section>

    <section class="detail-page mt-30 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-post-details">
                        <div class="blog-post-img">
                            <img class="img-responsive" src="{{ $career_details->banner_image }}" alt="">
                        </div>
                        <br>
                        <br>
                        {!! $career_details->short_content !!}
                        <br>
                        <br>
                        {!! $career_details->long_content !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-main box-shadow">
                        <h5 class="theme-color h-sep">Thematic <span class="text-ultra-bold blue-color">Areas</span> </h5>
                        <ul class="tri-links list-unstyled mt-20">
                            <li><a href="#"><i class="fa fa-caret-right"></i> Domestic Politics & Governanace</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Federalism</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> International Relation & Foreign
                                    Affairs</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> National Security & Climate Change</a>
                            </li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Gender,Social Inclusion & Human
                                    Rights</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Economy & Development</a></li>
                        </ul>
                        <div class="mt-25 news-event">
                            <h5 class="theme-color mb-25 h-sep">Related <span
                                    class="text-ultra-bold blue-color">Posts</span>
                            </h5>
                            @foreach ($carrer as $carrer_item)
                                <div class="s-post mb-20 pb-20 clearfix">
                                    <a <a href="{{ route('single_career', $carrer_item->nav_name) }}">
                                        <img src="{{ $carrer_item->banner_image }}" alt=""
                                            class="pull-left img-responsive">
                                        <div class="pull-left s-post-detail">
                                            <h6 class="fz-13 black-23 lh-20 mb-10">
                                                {!! Str::limit($carrer_item->caption, 40) !!}
                                            </h6>
                                            @if ($carrer_item->page_keyword)
                                                <span class="ubuntu fz-13 theme-color"><i class="fa fa-calendar"></i>
                                                {{ $carrer_item->page_keyword }}</span @else @endif

                                        </div>
                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
