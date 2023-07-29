


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

{{-- main slider --}}


{{-- features news start --}}


<section>
    <!-- Popular news  header-->
    <div class="popular__news-header">
        <div class="container">
            <div class="row no-gutters">


                <div class="col-md-12 ">
                   
                    <div class="card__post-carousel">

                        @foreach ($sliders as $sliders_item)
                            <div class="item">
                                <!-- Post Article -->
                                <div class="card__post">
                                    <div class="card__post__body">
                                        <a href="#">
                                            <img src="{{ $sliders_item->banner_image }}" class="img-fluid"
                                                alt="">
                                        </a>
                                        <div class="card__post__content bg__post-cover">

                                            <div class="card__post__title card_slider_title">
                                                <h2>
                                                    <a style="color: white" href="detail/{{ $sliders_item->nav_name }}">
                                                        {{ $sliders_item->caption }}
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="card__post__author-info">
                                                {{-- <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#">
                                                            by {{ $sliders_item->icon_image_caption }}
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                            {{ $sliders_item->page_keyword }}
                                                        </span>
                                                    </li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
{{-- feature news --}}
    <div class="popular__news-header-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <div class="wrapper__list__article">
							<h4 class="border_section">फिचर न्युज</h4>
						</div>
                    <div class="top__news__slider">

                        @foreach ($features_news as $features_item)
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="/detail/{{ $features_item->nav_name }}">
                                            {{-- <a href="/detail/{{ $programs_item->nav_name }}"><i class="fa fa-link"></i></a> --}}
                                            <img src="{{ $features_item->banner_image }}" alt=""
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by {{ $features_item->icon_image_caption }}
                                                </span>,
                                            </li>

                                            <li class="list-inline-item">
                                                <span>
                                                    {{ $features_item->page_keyword }}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="/detail/{{ $features_item->nav_name }}">
                                                 {{ Str::limit($features_item->short_content, 52) }}

                                                {{-- {!! $features_item->short_content !!} --}}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ads_after_features_news">
                    <img src="https://highspeednepal.com/wp-content/uploads/2020/11/98BwRmkpauM8.gif"
                        alt="">
                </div>
            </div>

        </div>
    </div>
</section>





    <!-- End Popular news carousel -->
</section>
