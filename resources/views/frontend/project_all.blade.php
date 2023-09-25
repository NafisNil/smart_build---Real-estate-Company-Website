@extends('frontend.layout.master')

@section('title')
    All Project - Smart Build
@endsection

@section('content')

<header class="page primary-bg">
    <div class=container>
      <div class=section_header>
        <span class="subtitle subtitle--extended">Better than others</span>
        <h1 class=title>All Projects </h1>
        <ul class=breadcrumbs>
          <li class=breadcrumbs_item>
            <a href=index-2.html>Home</a>
          </li>
          <li class="breadcrumbs_item breadcrumbs_item--current">
            <span>All Projects </span>
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
  <main class="projects section light-bg">
    <div class=container>
      <ul class=projects_list>
        @foreach ($project as $item)
            
 
        <li class=projects_list-item >
          <div class=media data-aos=zoom-in-right>
            <picture>
              <source data-srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} type=image>
              <img class=lazy data-src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} alt="{{$item->name}}">
            </picture>
          </div>
          <div class=main>
            <div class=main_info>
              <span class=location data-aos=fade-up>
                <i class="icon-location icon"></i> {!!$item->location!!} </span>
            </div>
            <h3 class=main_title data-aos=fade-up data-aos-delay=50>{{$item->name}}</h3>
            <p class=main_text data-aos=fade-up data-aos-delay=100>{{$item->sector}}</p>
            <a class="link link-arrow" href={{route('single_project', $item->id)}} data-aos=fade-in data-aos-delay=50>Details <i class="icon-arrow_right icon"></i>
            </a>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </main>
@endsection