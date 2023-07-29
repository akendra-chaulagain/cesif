@extends('layouts.master')
@push('title')
    {{ $career_details->caption }}
@endpush
@section('content')
    {{-- for ads --}}

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="for_topbar_ads">
                        <img src="https://highspeednepal.com/wp-content/uploads/2020/02/mahendra-1230_100-Pixel-Bolero-Udemsil-Nepali.jpg"
                            alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="go__explore-title">
                        <h1>{!! $career_details->caption !!}</h1>

                    </div>

                    <hr>
                    <div class="wrap__article-detail-info">
                        <ul class="list-inline">

                            <li class="list-inline-item">

                                <span>
                                    by
                                </span>
                                <a href="#">
                                    {{ $career_details->icon_image_caption ?? "Admin" }},
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-dark text-capitalize ml-1">
                                    {{ $career_details->page_keyword ?? $career_details->created_at}}
                                </span>
                            </li>



                        </ul>
                    </div>

                    <figure>.
                        <div class="detail_image">
                            <img src="{{ $career_details->banner_image ?? " " }}" alt="" class="img-fluid">

                        </div>
                    </figure>


                    {{-- for ads --}}
                    <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="before_text_ads">
                                        <img src="https://highspeednepal.com/wp-content/uploads/2021/04/IPS-connect-.gif"
                                            alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <div class="wrap__article-detail-content">

                        <p class="has-drop-cap-container">
                            {{-- {{ !! $career_details->long_content !! }} --}}
                            {!! $career_details->long_content ?? " " !!}

                        </p>


                        {{-- after _text_ads --}}
                        <section class="bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="after_text_ads">
                                            <img src="https://highspeednepal.com/wp-content/uploads/2021/02/Front-1230x1003-1.gif"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>




                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
