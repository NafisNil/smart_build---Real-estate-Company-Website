@extends('frontend.layout.master')

@section('title')
    Single Service - Smart Build
@endsection

@section('content')
<header class="page primary-bg">
    <div class=container>
      <div class=section_header>
        <span class="subtitle subtitle--extended">Single service</span>
        <h1 class=title>{{$service->title}}</h1>
        <ul class=breadcrumbs>
          <li class=breadcrumbs_item>
            <a href=index-2.html>Home</a>
          </li>
          <li class="breadcrumbs_item breadcrumbs_item--current">
            <span>{{$service->title}}</span>
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
    <section class="tabs section">
      <div class=container>
        <div class="tabs_header section_header">
          <div class=tabs_header-wrapper>
            <span class=subtitle data-aos=fade-down>{{$service->title}}</span>
            <h2 class=title data-aos=fade-right>We Provide <span class=highlight>{{$service->title}}</span> Services </h2>
          </div>
          <p class=text data-aos=fade-left>{!! $service->short_desc!!}</p>
          <br> <br>
          <p class=text data-aos=fade-left>{!! $service->long_desc!!}</p>
        </div>

      </div>
    </section>

  </main>

  @endsection