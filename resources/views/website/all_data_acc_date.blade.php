@extends('layouts.master')
@push('title')
    Photo Gallery
@endpush
@section('content')
    <section class="mt-120">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <h3 class="h-sep theme-color"> Commentaries</h3>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="s-archive">
                        <div class="input-group">
                            <select name="archive" id="archive">
                                <option value="0">Archives</option>
                                <option value="1">November 2022</option>
                                <option value="2">October 2022</option>
                                <option value="3">August 2022</option>
                                <option value="3">July 2022</option>
                                <option value="3">June 2022</option>
                                <option value="3">May 2022</option>
                                <option value="3">April 2022</option>
                                <option value="3">March 2022</option>
                                <option value="3">February 2022</option>
                                <option value="3">January 2022</option>
                                <option value="3">December 2021</option>
                                <option value="3">November 2021</option>
                                <option value="3">October 2021</option>
                            </select>
                            <div class="input-group-addon gray-777"> <button><i class="fa fa-search"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider_block clearfix">
                <hr class="divider first">
                <hr class="divider subheader_arrow">
                <hr class="divider last">
            </div>
        </div>
    </section>
    <section class="mb-50">
        <div class="container">
            <div class="row">

                @foreach ($dates as $dates_item)
                    <div class="col-md-4 col-sm-6 r-event mt-25">
                        <img src="images/news.jpg" alt="" class="img-responsive">
                        <h4 class="mt-20 fz-15 text-semi-bold d-black">{{ $dates_item->caption }}</h4>
                        <h5 class="ubuntu fz-12 theme-color mt-10 r-divider">Date: <span
                                class="blue-color">{{ $dates_item->page_keyword }}</span>
                            <span class="sep-space"> |</span> Posted by: <span
                                class="blue-color">{{ $dates_item->icon_image_caption }}</span>
                        </h5>
                        <p class="lh-26 mt-20">{{ $dates_item->short_content }}</p>
                        <div class="mt-20">
                            <a href="#" class="btn-green-br">Read More</a>
                        </div>
                    </div>
                @endforeach




            </div>
            <div class="bp-btns mt-50 text-center">
                <a href="#"><i class="fa fa-caret-left"></i> Previous</a>
                <a href="#">Next <i class="fa fa-caret-right"></i></a>
            </div>
        </div>
    </section>
@endsection
