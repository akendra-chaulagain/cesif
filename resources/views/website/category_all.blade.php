@php
    
    $quick_links = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', 'Group')
         ->where('nav_name', '!=', 'प्रदेश')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    
    // return $quick_links;
    
@endphp


@extends('layouts.master')
@push('title')
    {{ $category_heading->caption }}
@endpush
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="/" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>

                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            {{ $category_heading->caption }}
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <aside class="wrapper__list__article " style="margin-bottom: 60px">
                        <h4 class="border_section">{{ $category_heading->caption }}</h4>

                        <!-- Post Article List -->
                        @foreach ($category_all as $categorys_item)
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="/detail/{{ $categorys_item->nav_name }}">
                                                <img src="{{ $categorys_item->banner_image }}" class="img-fluid w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by {{ $categorys_item->icon_image_caption ?? 'Admin' }}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">

                                                                {{-- {{ date('F-Y', strtotime($dates_title->page_title ?? "All Data")) }} --}}
                                                                {{-- Carbon::parse($createdAt)->toDateTimeString(); --}}
                                                                {{ $categorys_item->page_keyword ?? $categorys_item->created_at }}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">

                                                    <a style="color: black !important"
                                                        href="/detail/{{ $categorys_item->nav_name }}">
                                                        {{ $categorys_item->caption }}
                                                    </a>

                                                </div>
                                                <p class="d-none d-lg-block d-xl-block mb-0">
                                                    {!! Str::limit($categorys_item->long_content, 70) !!}
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </aside>


                    {{-- pagination --}}

                    <div class="bp-btns mt-50 text-center">
                        @if ($category_all->hasPages())
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    @if ($category_all->onFirstPage())
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fa fa-caret-left"></i>
                                                Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                                href="{{ $category_all->previousPageUrl() }}"><i
                                                    class="fa fa-caret-left"></i> Previous</a></li>
                                    @endif

                                    @foreach ($category_all as $element)
                                        @if (is_string($element))
                                            <li class="page-item disabled">{{ $element }}</li>
                                        @endif
                                        @if (is_array($element))
                                            @foreach ($element as $page => $url)
                                                @if ($page == $category_all->currentPage())
                                                    <li class="page-item active">
                                                        <a class="page-link">{{ $page }}</a>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link"
                                                            href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach

                                    @if ($category_all->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $category_all->nextPageUrl() }}"
                                                rel="next">Next <i class="fa fa-caret-right"></i></a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#">Next <i class="fa fa-caret-right"></i></a>
                                        </li>
                                    @endif
                                </ul>
                        @endif



                    </div>




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













                <div class="col-md-4">
                    <div class="sidebar-sticky">
                        <aside class="wrapper__list__article ">
                            <div class="col-md-12 col-lg-12">
                                <aside class="wrapper__list__article">
                                    <h4 class="border_section">
                                        द्रुत लिङ्कहरू</h4>
                                    <div class="wrapper__list-number">
                                        <div class="card__post__list">

                                                <ul class="list-inline">
                                                    <li class="list-inline-item">

                                                        <h5>
                                                            <a href="/">
                                                                होमपेज
                                                            </a>
                                                        </h5>
                                                    </li>
                                                </ul>

                                            </div>

                                        @foreach ($quick_links as $quick_links_item)
                                            <div class="card__post__list">

                                                <ul class="list-inline">
                                                    <li class="list-inline-item">

                                                        <h5>
                                                            <a href="{{ $quick_links_item->nav_name }}">
                                                                {{ $quick_links_item->caption }}

                                                            </a>
                                                        </h5>
                                                    </li>
                                                </ul>

                                            </div>
                                        @endforeach




                                    </div>
                                </aside>
                            </div>



                            {{-- sidebar_ads --}}
                            <section class="bg-light">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="sidebar_ads">
                                                <img src="https://highspeednepal.com/wp-content/uploads/2020/04/Nepatop-sab-thik-thak-250x250-3092020043952.gif"
                                                    alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>


                        </aside>




                    </div>
                </div>
            </div>



        </div>
    </section>
@endsection
