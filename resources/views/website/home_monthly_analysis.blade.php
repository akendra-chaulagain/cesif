


<div class="section-block projects monthly-analysis">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="text-uppercase theme-color h-sep">Monthly<span class="text-ultra-bold blue-color">
                        Analysis</span> </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="monthly-analysis-slider mt-30">
                    @foreach ($date as $date_item)
                    @if ($date_item->date_yrs_month)
                        <a href="javascript:" data-filter=".{{ $date_item->date_yrs_month }}"
                            class="filter ubuntu text-medium">{{ $date_item->date_yrs_month }}</a>
                    @endif
                        
                    @endforeach


                </div>
            </div>
        </div>
        <div id="Container" class="mt-25">
            @foreach ($monthly_analysis as $monthly_analysisitem)
                <div class="row mix {{ $monthly_analysisitem->page_title }}">
                    @foreach ($monthly_analysisitem->childs as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="monthly-analysis-item">
                                <a href="{{ route('single_career', $item->nav_name) }}"></a>
                                <div class="monthly-img text-center">
                                    <img src="{{ $item->banner_image }}" alt="" class="img-responsive">
                                    <h5 class="martel text-semi-bold d-black">{{ $item->caption }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach


        </div>
    </div>
</div>
