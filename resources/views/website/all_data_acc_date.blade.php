@php
    $date = App\Date::all();
@endphp


@extends('layouts.master')
@push('title')
    {{ $dates_title->page_title ?? 'All-data' }}
@endpush
@section('content')
    <section class="mt-120">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <h3 class="h-sep theme-color"> {{ $dates_title->page_title ?? 'All-data' }}</h3>
                </div>
                <div class="col-md-3">
                    <div class="s-archive">
                        <div class="input-group">
                            <select name="archive" id="archive" onchange="javascript:handleSelect(this)">
                                <option value="#">Archives</option>
                                @foreach ($date as $mainitem)
                                    <option value="{{ $mainitem->date_yrs_month }}">

                                        {{ $mainitem->date_yrs_month }}

                                    </option>
                                @endforeach
                            </select>

                            <script type="text/javascript">
                                function handleSelect(elm) {
                                    window.location = "/all-data/" + elm.value;
                                }
                            </script>

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
                        <img src="{{ $dates_item->banner_image }}" alt="" class="img-responsive">
                        <h4 class="mt-20 fz-15 text-semi-bold d-black">{{ $dates_item->caption }}</h4>
                        <h5 class="ubuntu fz-12 theme-color mt-10 r-divider">Date: <span
                                class="blue-color">{{ $dates_item->page_keyword }}</span>
                            @if ($dates_item->icon_image_caption)
                                <span class="sep-space"> |</span> Posted by: <span
                                    class="blue-color">{{ $dates_item->icon_image_caption }}</span>
                            @else
                            @endif




                        </h5>
                        <p class="lh-26 mt-20">
                            {{ Str::limit($dates_item->short_content, 130) }}

                        </p>
                        <div class="mt-20">
                            <a href="{{ route('single_career', $dates_item->nav_name) }}" class="btn-green-br">Read More</a>
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
