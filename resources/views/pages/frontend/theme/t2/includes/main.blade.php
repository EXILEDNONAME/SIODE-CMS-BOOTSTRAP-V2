<main id="main">
  @foreach($section_main as $section)

  @if ($section->url == 'about')
  @include('pages.frontend.theme.t2.partial.about')
  @endif

  @if ($section->url == 'count')
  @include('pages.frontend.theme.t2.partial.count')
  @endif

  @if ($section->url == 'team')
  @include('pages.frontend.theme.t2.partial.team')
  @endif

  @if ($section->url == 'testimonial')
  @include('pages.frontend.theme.t2.partial.testimonials')
  @endif

  @if ($section->url == 'client')
  @include('pages.frontend.theme.t2.partial.client')
  @endif

  @if ($section->url == 'pricing')
  @include('pages.frontend.theme.t2.partial.pricing')
  @endif

  @if ($section->url == 'contact-us')
  @include('pages.frontend.theme.t2.partial.contact-us')
  @endif

  @if ($section->url == 'service')
  @include('pages.frontend.theme.t2.partial.services')
  @endif

  @endforeach

  <!-- @include('pages.frontend.theme.t2.partial.skill') -->
  <!-- @include('pages.frontend.theme.t2.partial.portfolio') -->
  <!-- @include('pages.frontend.theme.t2.partial.faq') -->
  <!-- @include('pages.frontend.theme.t2.partial.features') -->
</main>
