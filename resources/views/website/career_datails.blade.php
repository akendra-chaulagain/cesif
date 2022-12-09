@php
    $carrer = App\Models\Navigation::find($career_details->parent_page_id)->career_childs->take(5);
    $thematic_area = App\Models\Navigation::find(2613)->childs->take(5);
    $thematic_area_first = App\Models\Navigation::find(2613);
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

                       

                        <p>
                            {!! $career_details->long_content !!}

                        </p>
                    </div>
                </div>




                <div class="col-md-3">
                    <div class="sidebar-main box-shadow">
                        <h5 class="theme-color h-sep">Thematic <span class="text-ultra-bold blue-color">Areas</span> </h5>
                        <ul class="tri-links list-unstyled mt-20">
                            @foreach ($thematic_area as $thematic_area_item)
                                <li><a href="/{{ $thematic_area_first->nav_name }}/{{ $thematic_area_item->nav_name }}"><i
                                            class="fa fa-caret-right"></i> {{ $thematic_area_item->caption }}</a>
                                </li>
                            @endforeach


                        </ul>
                        <div class="mt-25 news-event">
                            <h5 class="theme-color mb-25 h-sep">Related <span
                                    class="text-ultra-bold blue-color">Posts</span>
                            </h5>

                            @foreach ($carrer as $carrer_item)
                                <div class="s-post mb-20 pb-20 clearfix">
                                    <a href="{{ route('single_career', $carrer_item->nav_name) }}">
                                        <img src="{{ $carrer_item->banner_image }}" alt=""
                                            class="pull-left img-responsive">
                                        <div class="pull-left s-post-detail">
                                            <h6 class="fz-13 black-23 lh-20 mb-10">{!! Str::limit($carrer_item->caption, 40) !!}</h6>
                                            <span class="ubuntu fz-13 theme-color">
                                                @if ($carrer_item->page_keyword)
                                                    <i class="fa fa-calendar"></i> {{ $carrer_item->page_keyword }}
                                                @else
                                                @endif


                                            </span>


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
