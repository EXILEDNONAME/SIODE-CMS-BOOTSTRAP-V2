<main id="main">

  @foreach($section_main as $section)

  @if ($section->url == 'about')
  @include('pages.frontend.theme.t3.partial.about')
  @endif

  @if ($section->url == 'team')
  @include('pages.frontend.theme.t3.partial.team')
  @endif

  @if ($section->url == 'testimonial')
  @include('pages.frontend.theme.t3.partial.testimonials')
  @endif

  @if ($section->url == 'client')
  @include('pages.frontend.theme.t3.partial.client')
  @endif

  @if ($section->url == 'pricing')
  @include('pages.frontend.theme.t3.partial.pricing')
  @endif

  @if ($section->url == 'contact-us')
  @include('pages.frontend.theme.t3.partial.contact-us')
  @endif

  @if ($section->url == 'service')
  @include('pages.frontend.theme.t3.partial.services')
  @endif

  @endforeach

  <!-- @include('pages.frontend.theme.t3.partial.skill') -->
  <!-- @include('pages.frontend.theme.t3.partial.portfolio') -->
  <!-- @include('pages.frontend.theme.t3.partial.faq') -->
</main>
