@extends('frontend.layout.master')
@section('title')
    About Us - Smart Build
@endsection
@section('content')
<header class="page primary-bg">
    <div class=container>
      <div class=section_header>
        <span class="subtitle subtitle--extended">Smart Build</span>
        <h1 class=title>About</h1>
        <ul class=breadcrumbs>
          <li class=breadcrumbs_item>
            <a href={{route('index')}}>Home</a>
          </li>
          <li class="breadcrumbs_item breadcrumbs_item--current">
            <span>About</span>
          </li>
        </ul>
      </div>
    </div>
    <div class=media>
      <picture>
        <source data-srcset={{asset('frontend')}}/img/plan.webp srcset={{asset('frontend')}}/img/plan.webp type=image>
        <img class=lazy data-src={{asset('frontend')}}/img/plan.png src={{asset('frontend')}}/img/plan.png alt=media>
      </picture>
    </div>
  </header>
  <main>
    <section class="about section light-bg">
      <div class=container>
        <div class=main>
          <div class=section_header>
            <span class=subtitle data-aos=fade-down>Who we are</span>
            <h2 class=title data-aos=fade-right> <span class=highlight>Quality Construction, </span>Better Life </h2>
      
          </div>
     {!!$about->desc!!}
     <br>
          <div class=wrapper data-aos=fade-up>
            <a class=btn href={{route('contact_us')}}#consultancy>Consult now</a>
          </div>
        </div>
        <div class=media data-aos=zoom-in data-aos-duration=700>
          <picture>
            <source data-srcset={{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}} srcset={{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}} type=image/webp>
            <img class=lazy data-src={{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}} src={{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}} alt="About Us">
          </picture>
        </div>
      </div>
    </section>

  </main>
@endsection