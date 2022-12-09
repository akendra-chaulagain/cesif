@php
    $all_nav_data = App\Models\Navigation::query()
        ->orWhere('page_type', 'Monthly Analysis')
        ->orderBy('page_title', 'desc')
        ->get();
    
    $all_nav = [];
    $commentaries = App\Models\Navigation::query()
        ->where('page_type', 'Monthly Analysis')
        ->get();
    
    foreach ($commentaries as $index => $value) {
        $p = $value;
        $all_nav[$p->page_title] = $p;
    }
    
@endphp


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
                    @foreach ($all_nav as $date_item)
                        {{-- @if ($date_item->date_yrs_month) --}}
                        <a href="javascript:" data-filter=".{{ $date_item->page_title }}"
                            class="filter ubuntu text-medium">

                            {{-- {{ $date_item->page_title }} --}}
                            {{ date('F-Y', strtotime($date_item->page_title)) }}


                        </a>
                        {{-- @endif --}}
                    @endforeach


                </div>
            </div>
        </div>
        <div id="Container" class="mt-25">
            @foreach ($all_nav_data as $monthly_analysisitem)
                <div class="row mix {{ $monthly_analysisitem->page_title }}">

                    <div class="col-md-4 col-sm-6">
                        <div class="monthly-analysis-item">
                            <a href="{{ route('single_career', $monthly_analysisitem->nav_name) }}"></a>
                            <div class="monthly-img text-center">
                                <img src="{{ $monthly_analysisitem->banner_image }}" alt=""
                                    class="img-responsive">
                                <h5 class="martel text-semi-bold d-black">{{ $monthly_analysisitem->caption }}
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach


        </div>
    </div>
</div>
