@extends('frontend.layout.master')

@section('title')
    Single Blog - Smart Build
@endsection

@section('content')
<header class="page primary-bg">
    <div class=container>
      <div class=section_header>
        <span class="subtitle subtitle--extended">Single Blog</span>
        <h1 class=title>{{$blog->title}}</h1>
        <ul class=breadcrumbs>
          <li class=breadcrumbs_item>
            <a href=index-2.html>Home</a>
          </li>
          <li class="breadcrumbs_item breadcrumbs_item--current">
            <span>{{$blog->title}}</span>
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
  <main class="post section-nopb light-bg">
    <div class="post_container container">
      <div class=post_content>
        <article class=post_article>
          <div class=post_article-media>
            <picture>
              <source data-srcset={{(!empty($blog->logo))?URL::to('storage/'.$blog->logo):URL::to('image/no_image.png')}}  srcset={{(!empty($blog->logo))?URL::to('storage/'.$blog->logo):URL::to('image/no_image.png')}}  type=image>
              <img class=lazy data-src={{(!empty($blog->logo))?URL::to('storage/'.$blog->logo):URL::to('image/no_image.png')}}  src={{(!empty($blog->logo))?URL::to('storage/'.$blog->logo):URL::to('image/no_image.png')}}  alt=media>
            </picture>
          </div>
          <br>
          <div class=metadata>
            <span class=date>{{$blog->created_at->format('d M,Y')}}</span>
            <i class="icon icon-dot"></i>
          
            </span>
           
          </div>
          <br>
          <p class=post_article-text>{!!$blog->desc!!}</p>
          <br>

        </article>
   

       
      </div>
     
    </div>
    <br><br>
  </main>

  @endsection