<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <h1 class="logo mr-auto"><a href="/"> {{ isset($general->name) ? $general->name : '-' }} <span>.</span></a></h1>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="/">Home</a></li>

        @foreach($section_menu as $section)
        @if ($section->url == 'about') <li><a href="#about"> About </a></li> @endif
        @if ($section->url == 'client') <li><a href="#clients"> Clients </a></li> @endif
        @if ($section->url == 'feature') <li><a href="#features">Features</a></li> @endif
        @if ($section->url == 'pricing') <li><a href="#pricing">Pricing</a></li> @endif
        @if ($section->url == 'service') <li><a href="#services">Services</a></li> @endif
        @if ($section->url == 'team') <li><a href="#team"> Team </a></li> @endif
        @if ($section->url == 'testimonial') <li><a href="#testimonial"> Testimonials </a></li> @endif
        @if ($section->url == 'contact-us') <li><a href="#contact"> Contact </a></li> @endif
        @endforeach

      </ul>
    </nav>
  </div>
</header>
