<header id="header" class="header sticky-top">

  <div class="topbar d-flex align-items-center {!! get_theme_mod('show_site_contacts') ? 'd-none' : null !!}">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        @isset($contact)<i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{!! $contact !!}">{!! $contact !!}</a></i>@endisset
        @isset($phone)<i class="bi bi-phone d-flex align-items-center ms-4"><span>+{{ $phone['phone'] }}</span></i>@endisset
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
      @isset($socialMedias)
      @foreach ($socialMedias as $type => $link)
          <a href="{{ $link }}" class="{{ $type }}"><i class="bi bi-{{$type}}"></i></a>
      @endforeach
      @endisset
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class="branding d-flex align-items-center">

    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{ home_url('/') }}" class="logo d-flex align-items-center">
         {{-- Uncomment the line below if you also wish to use an image logo --}}
        @if (array_key_exists('logo', $siteLogo))
        <img src="{{ $siteLogo['logo'] }}" {!! array_key_exists('height', $siteLogo) ? 'height="' . $siteLogo['height'] . 'px"' : 'height="26px"' !!} alt="{{ get_bloginfo('name') }}">
        @endif
        @if(get_theme_mod('show_site_name'))
          <h1 class="sitename">{!! $siteName !!}</h1>
        @endif
      </a>
      <nav id="navmenu" class="navmenu" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {{-- https://developer.wordpress.org/reference/functions/wp_nav_menu/ --}}
        {!! wp_nav_menu( array(
              'theme_location'  => 'primary_navigation',
              'depth'           => get_theme_mod('menu_depth') ? esc_attr(get_theme_mod('menu_depth')) : 1, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => false,
              'menu_class'      => 'mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker()
          ) ) !!}
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>

  </div>

</header>