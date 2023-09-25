@extends('frontend.layout.master')

@section('title')
    Single Service - Smart Build
@endsection

@section('content')

<header class="page primary-bg">
    <div class=container>
      <div class=section_header>
        <span class="subtitle subtitle--extended">Better than others</span>
        <h1 class=title>Single Service </h1>
        <ul class=breadcrumbs>
          <li class=breadcrumbs_item>
            <a href=index-2.html>Home</a>
          </li>
          <li class="breadcrumbs_item breadcrumbs_item--current">
            <span>Single Service </span>
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
  <main class="team section">
    <div class=container>
      <ul class=team_list>
        @foreach ($team as $item)
              <li class=team_list-item data-aos=fade-up>
          <div class=media>
            <picture>
              <source data-srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} srcset={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} type=image>
              <img class=lazy data-src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} src={{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}} alt="{{$item->name}}" style="max-width:350px;max-height:350px">
            </picture>
          </div>
          <div class=main>
            <h4 class=main_name>{{$item->name}}</h4>
            <h5 class=main_position>{{$item->designatioon}}</h5>
            <p class=main_text>{!!$item->desc!!}</p>
            <ul class=socials>
              <li class=socials_item>
                <a class=socials_item-link href={{$item->facebook}} target=_blank rel="noopener noreferrer" aria-label=Facebook>
                  <i class=icon-facebook></i>
                </a>
              </li>
              <li class=socials_item>
                <a class=socials_item-link href={{$item->instagram}} target=_blank rel="noopener noreferrer" aria-label=Instagram>
                  <i class=icon-instagram></i>
                </a>
              </li>
              <li class=socials_item>
                <a class=socials_item-link href={{$item->twitter}} target=_blank rel="noopener noreferrer" aria-label=Twitter>
                  <i class=icon-twitter></i>
                </a>
              </li>
              <li class=socials_item>
                <a class=socials_item-link href={{$item->whatsapp}} target=_blank rel="noopener noreferrer" aria-label=WhatsApp>
                  <i class=icon-whatsapp></i>
                </a>
              </li>
            </ul>
          </div>
        </li>
        @endforeach

      </ul>
    </div>
  </main>
@endsection