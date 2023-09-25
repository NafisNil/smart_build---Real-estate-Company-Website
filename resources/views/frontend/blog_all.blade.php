@extends('frontend.layout.master')

@section('title')
    All Blogs - Smart Build
@endsection

@section('content')

<header class="page primary-bg">
    <div class=container>
      <div class=section_header>
        <span class="subtitle subtitle--extended">Better than others</span>
        <h1 class=title>All Blogs </h1>
        <ul class=breadcrumbs>
          <li class=breadcrumbs_item>
            <a href=index-2.html>Home</a>
          </li>
          <li class="breadcrumbs_item breadcrumbs_item--current">
            <span>All Blogs </span>
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
  <main class="blog section light-bg">
    <div class=container>
      <div class=blog_wrapper>
        <ul class=blog_feed>
            @foreach ($blog as $item)
                
      
          <li class=blog_feed-item>
            <div class=media>
              <picture>
                <source data-srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}  srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}  type=image>
                <img class=lazy data-src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}  src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}  alt="{{$item->title}}">
              </picture>
            </div>
            <div class=main>
              <div class=metadata>
           
                <i class="icon icon-dot"></i>
                <span class=date>{{$item->created_at->format('d M, Y')}}</span>
              </div>
              <h4 class=main_title>{{$item->title}}</h4>
              <p class=main_text>{!!substr($item->desc, 0, 100)!!}</p>
              <a class="link link-arrow" href={{route('single_blog', $item->id)}}>Read post <i class="icon-arrow_right icon"></i>
              </a>
            </div>
          </li>
          @endforeach

        </ul>
  
      </div>

    </div>
  </main>
@endsection