<header class="header  sticky" data-page=home2 data-page-parent=home>
    <div class="container d-flex">
       <a class=brand href={{route('index')}}><img class=brand_logo src={{(!empty($logo->logo))?URL::to('storage/'.$logo->logo):URL::to('image/no_image.png')}} alt="Axial Construct" style="max-width:"> </a>
       <nav class="header_nav collapse" id=headerMenu>
          <ul class=header_nav-list>
             <li class="header_nav-list_item dropdown">
                <a class="nav-link nav-item dropdown-toggle" href={{route('index')}} data-bs-toggle=collapse data-bs-target=#homeMenu data-trigger=dropdown data-main-link=true aria-expanded=false aria-controls=homeMenu data-page=home data-page-parent=home><span class=nav-item_text>Home </span></a>

             </li>
             <li class=header_nav-list_item><a class="nav-item nav-link" href={{route('about_us')}} data-page=about data-single=true><span class=nav-item_text>About</span></a></li>
             <li class=header_nav-list_item><a class="nav-item nav-link" href={{route('team_all')}} data-page=about data-single=true><span class=nav-item_text>Team</span></a></li>
             <li class=header_nav-list_item><a class="nav-item nav-link" href={{route('project_all')}} data-page=about data-single=true><span class=nav-item_text>Project</span></a></li>
             <li class=header_nav-list_item><a class="nav-item nav-link" href={{route('blog_all')}} data-page=about data-single=true><span class=nav-item_text>Blog</span></a></li>
             <li class=header_nav-list_item><a class="nav-item nav-link" href={{route('contact_us')}} data-page=about data-single=true><span class=nav-item_text>Contact</span></a></li>
            
          </ul>
       </nav>
       <button class=header_trigger data-bs-toggle=collapse data-bs-target=#headerMenu aria-controls=headerMenu aria-expanded=false><span class="line line--short"></span> <span class=line></span> <span class="line line--short"></span> <span class=line></span></button>
    </div>
 </header>