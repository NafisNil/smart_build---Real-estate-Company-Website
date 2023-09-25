@extends('frontend.layout.master')

@section('title')
    Contact Us - Smart Build
@endsection

@section('content')
<link rel=stylesheet href={{asset('frontend')}}/css/contacts2.min.css>
<header class="page primary-bg">
    <div class=container>
      <div class=section_header>
        <span class="subtitle subtitle--extended">We create the world</span>
        <h1 class=title>Contacts</h1>
        <ul class=breadcrumbs>
          <li class=breadcrumbs_item>
            <a href=index-2.html>Home</a>
          </li>
          <li class="breadcrumbs_item breadcrumbs_item--current">
            <span>Contacts</span>
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
  <main >
    <section class="contact section secondary-bg">
      <div class=container>
        <div class=main>
          <div class="contact_header section_header" id="consultancy">
            <span class=subtitle>Contact us</span>
            <h2 class=title>Get <span class=highlight>a Consultancy</span>
            </h2>
           
          </div>
          @if (session('success'))
                    
          <p style="color: cornflowerblue"> {{ session('success') }}</p>  
          
     
      @endif

      @if (session('error'))
   <p style="color: brown">    {{ session('error') }}</p>
          
              
       @endif

     @csrf
          <form action={{route('appointment.store')}} class="contact_form contact-form d-flex flex-wrap justify-content-between" method=POST >
            @csrf
            <input class="contact-form_field contact-form_field--half field required" name=name id=feedbackName type=text placeholder="Full name">
            <input class="contact-form_field contact-form_field--half field required" data-type=tel type=text name=phone id=feedbackTel placeholder="Phone">
            <input class="contact-form_field field required" data-type=email type=text name=email id=feedbackEmail placeholder="Email Address">
            <textarea class="contact-form_field field required" data-type=message name=message id=feedbackMessage placeholder=Message></textarea>
            <button type=submit class=" btn">Send message</button>
          </form>
        </div>
        <div class=secondary>
          <ul class="contact_info contact-info">
            <li class=contact-info_group>
              <span class=name>Address</span>
              <span class=content>{!!$contact->address!!}</span>
            </li>
            <li class=contact-info_group>
              <span class=name>Email</span>
              <span class="content d-inline-flex flex-column">
                <a class=link href=mailto:{{$contact->email}}>{{$contact->email}}</a>
             
              </span>
            </li>
            <li class=contact-info_group>
              <span class=name>Phone</span>
              <span class="content d-inline-flex flex-column">
                <a class=link href=tel:{{$contact->phone}}>{{$contact->phone}}</a>
               
              </span>
            </li>
          </ul>
          <ul class=socials>
            <li class=socials_item>
              <a class=socials_item-link href={{$social->facebook}} target=_blank rel="noopener noreferrer" aria-label=Facebook>
                <i class=icon-facebook></i>
              </a>
            </li>
            <li class=socials_item>
              <a class=socials_item-link href={{$social->instagram}}  target=_blank rel="noopener noreferrer" aria-label=Instagram>
                <i class=icon-instagram></i>
              </a>
            </li>
            <li class=socials_item>
              <a class=socials_item-link href={{$social->twitter}}  target=_blank rel="noopener noreferrer" aria-label=Twitter>
                <i class=icon-twitter></i>
              </a>
            </li>
            <li class=socials_item>
              <a class=socials_item-link href={{$social->whatsapp}}  target=_blank rel="noopener noreferrer" aria-label=WhatsApp>
                <i class=icon-whatsapp></i>
              </a>
            </li>
          </ul>
        </div>

      </div>

    </section>

  </main>
@endsection