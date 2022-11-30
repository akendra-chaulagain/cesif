{{-- @php
     $normal_gallary_notice = App\Models\Navigation::find(2523)->chil;
       
@endphp --}}

<section id="partner" class="row">
    <div class="container">
        <div class="row partnersSlide">
            <div class="owl-carousel partnerSlider">
                @foreach ($home_client as $partners_item)
                    <div class="item"><img src="{{ $partners_item->banner_image }}" alt=""></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
