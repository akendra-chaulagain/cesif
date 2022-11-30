{{-- 


 <section id="nr_slider" class="row">
     <div class="mainSliderContainer">
         <div class="mainSlider">
             <ul>
                 @foreach ($sliders as $sliders_item)
                     <li data-transition="boxslide" data-slotamount="7">
                         <img src="{{ $sliders_item->banner_image }}" alt="slidebg1" data-bgfit="cover"
                             data-bgposition="left top" data-bgrepeat="no-repeat">
                         <div class="caption sfr str" data-x="center" data-y="400" data-speed="700" data-start="1700"
                             data-easing="easeOutBack">
                             <h2><strong>{{ $sliders_item->caption }}</strong></h2>
                         </div>
                         <div class="caption sfl stl" data-x="center" data-y="480" data-speed="500" data-start="1900"
                             data-easing="easeOutBack">
                             <h4>{!! $sliders_item->short_content !!}</h4>
                         </div>
                     </li>
                 @endforeach



             </ul>
         </div>
     </div>

     <div class="container sliderAfterTriangle"></div>
     <!--Triangle After Slider-->
 </section>
  --}}


<div class="container-fluid no-padding">
    <div class="main-slider">
        @foreach ($sliders as $sliders_item)
            <div class="item">
                <div class="main-slider-img position-r">
                    <img src="{{ $sliders_item->banner_image }}" alt="">
                    <div class="overlay"></div>
                    <div class="main-slider-content slide-2 text-center">
                        <h3 class="white text-uppercase mt-25 position-r">{!! $sliders_item->short_content !!}</h3>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
