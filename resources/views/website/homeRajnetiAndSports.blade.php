<div class="popular__section-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="wrapper__list__article">
                    <h4 class="border_section">राजनिती</h4>
                </div>
                <div class="row ">
                    @foreach ($rajniti as $rajnitis_item)
                        <div class="col-sm-12 col-md-6 mb-4">
                            <!-- Post Article -->
                            <div class="card__post ">
                                <div class="card__post__body card__post__transition">
                                    <a href="/detail/{{ $rajnitis_item->nav_name }}">
                                        <img src="{{ $rajnitis_item->banner_image }}" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">

                                        <div class="card__post__title">
                                            <h5>
                                                <a href="/detail/{{ $rajnitis_item->nav_name }}">
                                                    {{ Str::limit($rajnitis_item->caption, 50) }}</a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a style="color: white" href="#">
                                                        by {{ $rajnitis_item->icon_image_caption }}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{ $rajnitis_item->page_keyword }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>


            <div class="col-md-12 col-lg-4">
                <aside class="wrapper__list__article">
                    <h4 class="border_section">खेलकुद</h4>
                    <div class="wrapper__list-number">

                        <!-- List Article -->
                        @foreach ($sports as $sports_item)
                            <div class="card__post__list">
                                {{-- <div class="list-number">
                                <span>
                                    1
                                </span>
                            </div>
                            <a href="#" class="category">
                                covid-19
                            </a> --}}
                                <ul class="list-inline">
                                    <li class="list-inline-item">

                                        <h5>
                                            <a href="/detail/{{ $sports_item->nav_name }}">
                                                {{ Str::limit($sports_item->caption, 60) }}

                                            </a>
                                        </h5>
                                    </li>
                                    {{-- <li class="list-inline-item">
                                        <a  href="#">
                                            by {{ $sports_item->icon_image_caption }}
                                        </a>
                                    </li> --}}
									 <li class="list-inline-item">
                                                    <span>
                                                        {{ $rajnitis_item->page_keyword }}
                                                    </span>
                                                </li>
                                </ul>

                            </div>
                        @endforeach






                    </div>

					{{-- after sports ads --}}


					   <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ads_after_sports">
                                        <img src="https://highspeednepal.com/wp-content/uploads/2020/11/274234202_107094378572114_5177004768489052758_n.jpg"
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
