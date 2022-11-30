 <section id="aboutus" style="background: #f7f7f7">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="aboutContent">
                        <div class="member">
                            <div class="textsPart">
                                  <h3>{{ $message->caption }}</h3>
                                  <p>{!! $message->long_content !!}.</p>
                            </div>
                            <div class="memImg">
                                <img src="{{$message->banner_image  }}" alt="">
                            </div>
                            <div class="memberIntro">
                                <div class="namePro">
                                    <span class="name">{{ $message->caption }}</span> {!! $message->short_content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>