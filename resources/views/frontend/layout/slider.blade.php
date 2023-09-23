<section class="hero primary-bg">
    <span class=hero_overlay></span>
    <div class="container container_regular">
       <div class=section_header><span class="subtitle subtitle--extended">Our services</span></div>
       <div class=hero_main>
          <div class="hero_slider--main swiper">
             <div class=swiper-wrapper>
@foreach ($service as $item)

                <div class="service swiper-slide" data-bg={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}>
                   <h2 class="title h1">{{$item->title}}</h2>
                   <p class=text>{{$item->short_desc}}</p>
                   <a class=btn href=#>service details</a>
                </div>
    
                @endforeach
             </div>
          </div>
          <div class="hero_slider-nav swiper-pagination"></div>
       </div>
    </div>
    <div class="container container_thumbs">
       <div class="hero_slider--thumbs swiper">
          <div class=swiper-wrapper>
            @foreach ($service as $item)
             <div class="thumb swiper-slide">
                <div class=media>
                   <picture>
                      <source data-srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} type=image>
                      <img class=lazy data-src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} alt=thumb>
                   </picture>
                </div>
                <h4 class=title>{{$item->title}}</h4>
             </div>
             @endforeach
          </div>
       </div>
    </div>
 </section>