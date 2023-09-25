<footer class="footer primary-bg">
    <div class=container>
       <div class=footer_main>
          <div class=footer_main-block>
             <a class=brand href=index-2.html><img class=brand_logo src={{(!empty($logo->logo))?URL::to('storage/'.$logo->logo):URL::to('image/no_image.png')}} alt="Smart Build"> </a>
            
          </div>
          <div class=footer_main-block>
             <h4 class=footer_main-block_title>Contacts</h4>
             <div class=group-wrapper>
                <i class="icon-call icon"></i>
                <div class=group><a href="tel:{{$contact->phone}}">{{$contact->phone}}</a> </div>
             </div>
             <div class=group-wrapper>
                <i class="icon-location icon"></i>
                <div class=group>{!!$contact->address!!}</div>
             </div>
          </div>
          <div class=footer_main-block>
             <h4 class=footer_main-block_title>Company</h4>
             <ul class=footer_main-block_nav>
                <li class=list-item><a class="nav-link link" href={{route('about_us')}} data-page=about><i class="icon-chevron_right icon"></i> About</a></li>
                <li class=list-item><a class="nav-link link" href={{route('team_all')}} data-page=services><i class="icon-chevron_right icon"></i> Team</a></li>
                <li class=list-item><a class="nav-link link" href={{route('project_all')}} data-page=projects><i class="icon-chevron_right icon"></i> Projects</a></li>
                <li class=list-item><a class="nav-link link" href={{route('blog_all')}} data-page=blog><i class="icon-chevron_right icon"></i> Blog</a></li>
             </ul>
          </div>
  
       </div>
       <div class=footer_secondary>
          <p class=footer_secondary-copyright><span>Smart Build &copy; </span> <span>All rights reserved Copyrights <span id=currentYear></span></span></p>
          <ul class=socials>
             <li class=socials_item><a class=socials_item-link href={{$social->facebook}} target=_blank rel="noopener noreferrer" aria-label=Facebook><i class=icon-facebook></i></a></li>
             <li class=socials_item><a class=socials_item-link href={{$social->instagram}} target=_blank rel="noopener noreferrer" aria-label=Instagram><i class=icon-instagram></i></a></li>
             <li class=socials_item><a class=socials_item-link href={{$social->twitter}} target=_blank rel="noopener noreferrer" aria-label=Twitter><i class=icon-twitter></i></a></li>
             <li class=socials_item><a class=socials_item-link href={{$social->youtube}} target=_blank rel="noopener noreferrer" aria-label=WhatsApp><i class="fa-brands fa-youtube"></i></a></li>
          </ul>
       </div>
    </div>
 </footer>