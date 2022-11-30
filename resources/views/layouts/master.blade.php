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




    <link rel="apple-touch-icon" href="/website/img/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="website/css/bootstrap.css">
    <link rel="stylesheet" href="website/css/font-awesome.min.css">
    <link rel="stylesheet" href="website/css/owl.carousel.css">
    <link rel="stylesheet" href="website/css/owl.theme.css">
    <link rel="stylesheet" href="website/css/animate.css">
    <link rel="stylesheet" href="website/css/normalize.css">
    <link rel="stylesheet" href="website/css/main.css">
    <link rel="stylesheet" href="website/css/responsive.css">
    <script src="website/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <header>
        <div class="main-nav">
            <div class="container">
                <div class="col-md-3 col-sm-2 text-center logo">
                    <a href="index.html">
                        <img class="img-responsive" src="images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-9 col-sm-10">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse no-margin no-padding">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">About Us <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About CESIF</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Thematic Areas <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="thmetic-area-list.html">Domestic Politics & Governanace</a></li>
                                        <li><a href="thmetic-area-list.html">Federalism</a></li>
                                        <li><a href="thmetic-area-list.html">International Relation & Foreign
                                                Affairs</a></li>
                                        <li><a href="thmetic-area-list.html">National Security & Climate Change</a>
                                        </li>
                                        <li><a href="thmetic-area-list.html">Gender,Social Inclusion & Human Rights</a>
                                        </li>
                                        <li><a href="thmetic-area-list.html">Economy & Development</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Research Outputs <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="research-output-list.html">News Digest</a></li>
                                        <li><a href="research-output-list.html">Commentaries</a></li>
                                        <li><a href="#">Monthly-Analysis</a></li>
                                        <li><a href="#">Publications</a></li>
                                        <li><a href="#">Policy Briefs</a></li>
                                    </ul>
                                </li>
                                <li><a class="" href="#">Career </a></li>
                                <li><a class="" href="contact.html">Contact Us </a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </header>




    @yield('content')






    <!--jQuery, Bootstrap and other vendor JS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="/website/js/jquery-1.11.3.min.js"><\/script>')
    </script>
    <script src="/website/js/bootstrap.min.js"></script>
    <script src="/website/js/owl.carousel.js"></script>
    <script src="/website/js/jquery.countdown.min.js"></script>
    <script src="/website/js/jquery.mixitup.js"></script>
    <script src="/website/js/Chart.min.js"></script>
    <script src="/website/js/main.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if (Session::has('contact'))
        <script>
            Swal.fire(
                'Thanks!',
                "Form submitted sucessfully!!!",
                'success'
            )
        </script>
    @endif
</body>

</html>
