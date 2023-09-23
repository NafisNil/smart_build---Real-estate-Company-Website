@extends('frontend.layout.master')
@section('title')
    Index - Smart Build
@endsection

@section('content')
<main>
    @include('frontend.layout.slider')
    <section class="partners section">
       <div class=container>
          <div class=partners_grid>
             <div class="partners_header section_header">
                <span class=subtitle>Our Clients/Partners</span>
                <h2 class=title><span class=highlight>Top Ranking</span> Company</h2>
             </div>
             @foreach ($partner as $item)
             <div class=partners_grid-card data-aos=fade-up><img class=media src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} alt=logo title="{{$item->title}}"></div>
             @endforeach
            
           
          </div>
       </div>
    </section>
    <section class="about primary-bg section">
       <div class=container>
          <div class="about_header section_header">
             <span class=subtitle data-aos=fade-down>About Us</span>
             <h2 class=title data-aos=fade-right>{{$about->title}}</h2>
             <p class=text data-aos=fade-in data-aos-duration=700>{!!$about->desc!!}</p>
            
             <span class="wrapper d-block" data-aos=fade-right data-aos-delay=50><a class=btn href=#>About company</a></span>
          </div>
          <div class=secondary>
     
             <div class=media data-aos=zoom-in data-aos-duration=600>
                <picture>
                   <source data-srcset={{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}} srcset={{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}} type=image/webp>
                   <img class=lazy data-src={{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}}  src={{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}}  alt=media>
                </picture>
             </div>
          </div>
       </div>
    </section>
    <section class="advantages section-nopb">
      <div class=container>
         <div class="advantages_header section_header">
            <span class=subtitle data-aos=fade-down>Our Uniqueness</span>
            <h2 class=title data-aos=fade-right>Why Choose <span class=highlight>Us</span></h2>
            <ul class=numbers_list>
               @foreach ($general as $item)
                   
              
               <li class=numbers_list-item>
                  <h2 class="number countNum" data-value=200 data-suffix=+>{{$item->info}}</h2>
                  <span class=label>{{$item->name}}</span>
               </li>
             
             @endforeach
            </ul>
         </div>
         <div class=main>
            
            <ul class=main_list>
               {!!$choose->desc!!}
            </ul>
         </div>
      </div>
   </section>
    <section class="gallery section">
       <div class=container>
          <div class="gallery_header section_header">
             <span class=subtitle>What we do</span>
             <h2 class=title>Our <span class=highlight>Gallery</span></h2>
          </div>
          <ul class="gallery_grid d-grid" data-role=gallery>
            @foreach ($gallery as $item)

             <li class=gallery_item data-aos=fade-up>
                <a class=media href={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} data-caption="{{$item->title}}" data-role=gallery-link>
                  <div class=overlay>
                     <h4 class=overlay_caption>{{$item->title}}</h4>
                     <span class=overlay_label>Image Gallery</span>
                  </div>
                   <picture>
                      <source data-srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}  srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}  type=image>
                      <img class=lazy data-src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}  src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}  alt="{{$item->title}}">
                   </picture>
               
                </a>
             </li>
                
             @endforeach
          </ul>
       </div>
    </section>

    <section class="feedback section">
       <div class="container reverse">
          <div class="feedback_header section_header">
             <span class=subtitle>Feedback</span>
             <h2 class=title>What <span class=highlight>Our Clients</span> Say About Us</h2>
    <br>
             <a class=btn href=contacts.html>Consult now</a>
          </div>
          <div class="feedback_slider swiper">
             <div class=swiper-wrapper>
               @foreach ($feedback as $item)
                   
        
                <div class="feedback_slider-slide swiper-slide">
                   <p class=main>{!!$item->desc!!}</p>
                   <div class=media>
                      <div class=avatar>
                   
                      </div>
                      <div class=media_info><span class=name>{{$item->name}}</span> <span class=company>{!!$item->designation!!}</span></div>
                   </div>
                </div>
                @endforeach
             </div>
             <div class="feedback_slider-pagination swiper-pagination"></div>
          </div>
       </div>
    </section>
    <section class="contact section">
       <div class=container>
          <div class=contact_wrapper>
             <div class="contact_header section_header">
                <span class=subtitle>Contact us</span>
                <h2 class=title><span class=highlight>Contacts</span> information</h2>
                
             </div>
             <ul class=contact-info>
                <li class=contact-info_group><span class=name>Address</span> <span class=content>{!!$contact->address!!}</span></li>
                <li class=contact-info_group><span class=name>Email</span> <span class="content d-inline-flex flex-column"><a class=link href=mailto:{{$contact->email}}>{{$contact->email}}</a> </span></li>
                <li class=contact-info_group><span class=name>Phone</span> <span class="content d-inline-flex flex-column"><a class=link href=tel:{{$contact->phone}}>{{$contact->phone}}</a></span></li>
             </ul>
             <ul class=socials>
                <li class=socials_item><a class=socials_item-link href={{$social->facebook}} target=_blank rel="noopener noreferrer" aria-label=Facebook><i class=icon-facebook></i></a></li>
                <li class=socials_item><a class=socials_item-link href={{$social->instagram}} target=_blank rel="noopener noreferrer" aria-label=Instagram><i class=icon-instagram></i></a></li>
                <li class=socials_item><a class=socials_item-link href={{$social->twitter}} target=_blank rel="noopener noreferrer" aria-label=Twitter><i class=icon-twitter></i></a></li>
                <li class=socials_item><a class=socials_item-link href={{$social->youtube}} target=_blank rel="noopener noreferrer" aria-label=Youtube><i class="fa-brands fa-youtube"></i></a></li>
             </ul>
          </div>
          <div class=contact_map>
            <section class="contact section">
               <div class=container>
                 <div class=main>
                   <div class="contact_header section_header">
                     <span class=subtitle>Contact us</span>
                     <h2 class=title>Need  <span class=highlight>A Consultancy!</span>
                     </h2>
                     
                   </div>
                   @include('backend.sessionMsg')
                   <form action={{route('appointment.store')}} class=" d-flex flex-wrap justify-content-between" method=POST  data-type=feedback>
                     @if (session('success'))
                    
                          <p style="color: cornflowerblue"> {{ session('success') }}</p>  
                          
                     
                      @endif

                      @if (session('error'))
                   <p style="color: brown">    {{ session('error') }}</p>
                          
                              
                       @endif
         
                     @csrf
                     <input class="contact-form_field contact-form_field--half field required" name=name id=feedbackName type=text placeholder="Full name">
                     <input class="contact-form_field contact-form_field--half field required" data-type=tel type=text name=phone id=feedbackTel placeholder=Phone>
                     <input class="contact-form_field field required" data-type=email type=text name=email id=feedbackEmail placeholder="Email Address">
                     <textarea class="contact-form_field field required" data-type=message name=message id=feedbackMessage placeholder=Message></textarea>
                     <button type=submit class=" btn">Send message</button>
                   </form>
                 </div>
  
               </div>
             </section>
          </div>
       </div>
    </section>
 </main>
@endsection