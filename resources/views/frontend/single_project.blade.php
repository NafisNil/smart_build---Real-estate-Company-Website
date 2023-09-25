@extends('frontend.layout.master')

@section('title')
    Single Project - Smart Build
@endsection

@section('content')
<header class="page primary-bg">
    <div class=container>
      <div class=section_header>
        <span class="subtitle subtitle--extended">Single Project</span>
        <h1 class=title>{{$project->name}}</h1>
        <ul class=breadcrumbs>
          <li class=breadcrumbs_item>
            <a href=index-2.html>Home</a>
          </li>
          <li class="breadcrumbs_item breadcrumbs_item--current">
            <span>{{$project->name}}</span>
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
  <main class="light-bg">
    <div class="about section-nopb">
      <div class=container>
        <div class=about_content>
          <article class=about_article>
            <div class=media>
              <picture>
                <source data-srcset={{(!empty($project->logo))?URL::to('storage/'.$project->logo):URL::to('image/no_image.png')}} srcset={{(!empty($project->logo))?URL::to('storage/'.$project->logo):URL::to('image/no_image.png')}} type=image/webp>
                <img class=lazy data-src={{(!empty($project->logo))?URL::to('storage/'.$project->logo):URL::to('image/no_image.png')}} src={{(!empty($project->logo))?URL::to('storage/'.$project->logo):URL::to('image/no_image.png')}} alt="{{$project->name}}">
              </picture>
            </div>
            <h3 class=about_article-header>Description</h3>
            <p class=about_article-text>{!!$project->desc!!}</p>
         
       
            
          </article>
          <div class=about_aside>
            <div class="about_info about_aside-item">
              <div class=wrapper>
                <div class=wrapper--helper>
                  <h3 class="about_info-title title">Information About the Project</h3>
                  <table class=about_info-table>
                    <tbody>
                      <tr class=about_info-table_row>
                        <td class=property>Location</td>
                        <td class=value>{!!$project->location!!}</td>
                      </tr>
                      <tr class=about_info-table_row>
                        <td class=property>Sector</td>
                        <td class=value>{{$project->sector}}</td>
                      </tr>
                      <tr class=about_info-table_row>
                        <td class=property>Status</td>
                        <td class=value><p><b>{{$project->status}}</b></p></td>
                      </tr>
                      <tr class=about_info-table_row>
                        <td class=property>Start Date</td>
                        <td class=value>  {{Carbon\Carbon::parse($project->start_date)->format('M d, Y')}}</td>
                      </tr>
                      <tr class=about_info-table_row>
                        <td class=property>Completion Date: </td>
                        <td class=value>&nbsp; {{Carbon\Carbon::parse($project->completion_date)->format('M d, Y')}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                </a>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </main>

  @endsection