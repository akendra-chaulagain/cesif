@php
    $global_setting = app\Models\GlobalSetting::all()->first();
    $normal_gallary_notice = app\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Photo Gallery')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
    
    
    
    
@endphp






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-----SEO--------->

    <title> @stack('title') | {{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">



    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ '/uploads/icons/' . $global_setting->favicon }}" type="image/png">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&amp;family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&amp;display=swap"
        rel="stylesheet">
    <!-- fontawsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link href="/website/css/styles3875.css?1fcca2a2c42e9d47a3eb" rel="stylesheet">




</head>

<body>




    <header class="bg-light">
        <!-- Navbar  Top-->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="topbar-left">
                            <div class="timer_topbar">
                                {{-- Monday, March 22, 2020 --}}
                                <!-- Nepali Time Start -->


                                {{-- <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php" width="185" height="55"></iframe> --}}


                                <div class="nepali-timer" id="nepaliTimer">
                                    <!-- Nepali time and date will be displayed here -->
                                </div>





                                <!-- Nepali Time End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="list-unstyled topbar-right">

                            <ul class="topbar-sosmed">
                             



                                <li> <a href="{{ $global_setting->facebook ?? '' }}"> <i
                                            class="fa-brands fa-facebook"></i>
                                    </a></li>
                                <li> <a href="{{ $global_setting->twitter ?? '' }}"><i
                                            class="fa-brands fa-twitter"></i> </i>
                                    </a></li>
                                <li> <a href="{{ $global_setting->linkedin ?? '#' }}"><i
                                            class="fa-brands fa-instagram"></i> </a>
                                </li>




                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Top  -->

        <!-- Navbar  -->
        <!-- Navbar menu  -->
        <div class="navigation-wrap navigation-shadow bg-white">
            <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
                <div class="container">
                    <div class="offcanvas-header">
                        <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                            <span class="navbar-toggler-icon"></span>
                        </div>
                    </div>
                    <figure class="mb-0 mx-auto">
                        <a href="/">
                            {{-- <img src="/website/images/logo1.png" alt="" class="img-fluid logo"> --}}
                            <img src="/uploads/icons/{{ $global_setting->site_logo }}" alt="_logo"
                                     class="img-fluid logo"/>
                        </a>
                    </figure>

                </div>
            </nav>



            <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
                <div class="container">

                    <div class="collapse navbar-collapse justify-content-between" id="main_nav99">

                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item"><a class="nav-link" href="/">होमपेज</a></li>

                            @foreach ($menus as $menu)
                                @php $submenus = $menu->childs; @endphp
                                <li class="  @if ($menu->nav_name == 'प्रदेश') nav-item dropdown @else @endif  "
                                    @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif>
                                    <a class="nav-link active 
                                        @if ($menu->nav_name == 'प्रदेश') dropdown-toggle  @else    @endif  " 
                                        {{-- data-toggle="dropdown" --}}
                                        @if ($submenus->count() > 0) href="{{ route('category', $menu->nav_name) }}" @else href="  
                                    {{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}

                                    </a>

                                    @if ($submenus->count() > 0)
                                        <ul class="dropdown-menu dropdown-menu-left">
                                            @foreach ($submenus as $sub)
                                                <li>

                                                    <a class="dropdown-item"
                                                        href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach




                        </ul>





                        <!-- Search content bar.// -->
                    </div> <!-- navbar-collapse.// -->
                </div>
            </nav>
        </div>
        <!-- End Navbar menu  -->

        <!-- Navbar sidebar menu  -->

        

        {{-- fetures news --}}

        <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-aside" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="widget__form-search-bar  ">
                            <div class="row no-gutters">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0"
                                        value="" placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <nav class="list-group list-group-flush">


                            {{-- <ul class="navbar-nav ">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle  text-dark" href="#"
                                        data-toggle="dropdown">
                                        Pages </a>
                                    <ul class="dropdown-menu animate fade-up">
                                        <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog </a> </li>
                                    </ul>
                                </li>
                            </ul> --}}


                            <ul class="navbar-nav ">
                                @foreach ($menus as $menu)
                                    @php $submenus = $menu->childs; @endphp
                                    <li class="nav-item dropdown" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif>

                                        <a class="nav-link  text-dark 
                                        @if ($menu->nav_name == 'प्रदेश') dropdown-toggle  href="#" data-toggle="dropdown"  @else   @endif "  
                                            @if ($submenus->count() > 0) href="{{ route('category', $menu->nav_name) }}" @else href="  
                                    {{ route('category', $menu->nav_name) }} " @endif>{{ $menu->caption }}

                                        </a>

                                        @if ($submenus->count() > 0)
                                            <ul class="dropdown-menu animate fade-up">
                                                @foreach ($submenus as $sub)
                                                    <li>

                                                        <a class="dropdown-item icon-arrow  text-dark"
                                                            href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach




                            </ul>






                        </nav>
                    </div>

                </div>
            </div> <!-- modal-bialog .// -->
        </div> <!-- modal.// -->
        <!-- End Navbar sidebar menu  -->
        <!-- End Navbar  -->
    </header>





    @yield('content')


    <section class="wrapper__section p-0">
        <div class="wrapper__section__components">
            <footer>
                <div class="wrapper__footer bg__footer-dark pb-0">
                    <div class="container">
                        <div class="row">
                            {{-- first row footer --}}
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer ">
                                        {{-- <h4 class="footer-title">
                                            world
                                            <span class="fa fa-angle-down"></span>
                                        </h4> --}}

                                    </div>


                                    <ul class="list-unstyled option-content  footer_individual_item">
                                        <li> <a href="/">होमपेज</a>
                                        </li>
                                        @foreach ($menus as $key => $menu)
                                            @if ($key == 3)
                                            @break

                                            ;
                                        @endif
                                        <li> <a
                                                href="{{ route('category', $menu->nav_name) }}">{{ $menu->caption }}</a>
                                        </li>
                                    @endforeach
                                </ul>




                            </div>
                        </div>

                        {{-- second row footer --}}
                        <div class="col-md-3">
                            <div class="widget__footer">
                                <div class="dropdown-footer ">

                                </div>

                                <ul class="list-unstyled option-content  footer_individual_item">
                                    @foreach ($menus as $key => $menu)
                                        @if ($key > 6)
                                            <li> <a href="{{ route('category', $menu->nav_name) }}">{{ $menu->caption }}
                                                </a></li>
                                        @endif
                                    @endforeach
                                </ul>


                            </div>
                        </div>


                        {{-- footer details --}}
                        <div class="col-md-3">
                            <div class="widget__footer">
                                <div class="dropdown-footer ">

                                </div>

                                <ul class="list-unstyled option-content  footer_individual_item">


                                    <li> <a href="#"><i class="fa-regular fa-envelope"></i> </i>
                                            {{ $global_setting->site_email }}</a></li>
                                    <li> <a href="#"><i class="fa-solid fa-phone"></i>
                                            {{ $global_setting->phone }}</a></li>
                                    <li> <a href="#"> <i class="fa-sharp fa-solid fa-location-dot"></i>
                                            {{ $global_setting->website_full_address }}{{ $global_setting->address_ne }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- footer details --}}
                        <div class="col-md-3">
                            <div class="widget__footer">
                                <div class="dropdown-footer ">

                                </div>

                                <ul class="list-unstyled option-content  footer_individual_item">

                                    <li> <a href="{{ $global_setting->facebook ?? '' }}"> <i
                                                class="fa-brands fa-facebook"></i>
                                            Facebook</a></li>
                                    <li> <a href="{{ $global_setting->twitter ?? '' }}"><i
                                                class="fa-brands fa-twitter"></i> </i>
                                            Twitter</a></li>
                                    <li> <a href="{{ $global_setting->linkedin ?? '#' }}"><i
                                                class="fa-brands fa-instagram"></i> Instagram</a>
                                    </li>




                                </ul>
                            </div>
                        </div>








                    </div>
                </div>

            </div>

            <!-- Footer bottom -->
            <div class="wrapper__footer-bottom bg__footer-dark">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="border-top-1 bg__footer-bottom-section">

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span>
                                            Copyright © 2023
                                        </span>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>
</section>





<!--jQuery, Bootstrap and other vendor JS-->
<script src="/website/js/index.bundle3875.js?1fcca2a2c42e9d47a3eb"></script>


{{-- nepali time --}}

<script src="https://unpkg.com/nepali-date-converter@1.1.2/dist/nepali-date-converter.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/nepali-date/dist/nepali-date.js"></script>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



@if (Session::has('contact'))
    <script>
        Swal.fire(
            'Thank You !',
            "Form submitted sucessfully!!!",
            'success'
        )
    </script>
@endif
</body>

</html>
