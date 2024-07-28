<footer id="footer" class="footer" style="background:color-mix(in srgb,gray,transparent 90%);">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ home_url('/') }}" class="logo d-flex align-items-center">
                    @if (array_key_exists('logo', $site_logo))
                        <div class="d-flex flex-column">
                            @if (get_theme_mod('hide_footer_site_name'))
                                <span class="sitename mb-2">{!! $siteName !!}</span>
                            @endif
                            @if (get_theme_mod('show_footer_logo_image'))
                                <img src="{{ $site_logo['logo'] }}" {!! array_key_exists('height', $site_logo) ? 'height="' . $site_logo['height'] . 'px"' : 'height="26px"' !!} alt="{{ get_bloginfo('name') }}">
                            @endif
                        </div>
                    @else
                        <span class="sitename">{!! $siteName !!}</span>
                    @endif
                </a>
                <div class="footer-contact pt-3">
                    <div class="row">
                        <div class="col-8">
                            <p>{!! htmlspecialchars_decode(nl2br($address)) !!}</p>
                            @isset($phone)
                                <p class="mt-3"><strong>Phone:</strong> <span>{!! $phone['phone'] !!}</span></p>
                                <p><strong>Fax:</strong> <span>{!! $phone['fax'] !!}</span></p>
                            @endisset
                            @isset($contact)
                                <p><strong>Email:</strong> <span>{!! $contact !!}</span></p>
                            @endisset
                        </div>
                        <div class="col align-self-center">
                            <img style="height:80px;" src="@asset('images/qr-code-location.png')" alt="{{ $siteName }} Location">
                        </div>
                    </div>
                </div>

                <div class="social-links d-flex mt-4">
                    @isset($social_medias)
                        @foreach ($social_medias as $type => $link)
                            <a href="{{ $link }}" class="{{ $type }}"><i
                                    class="bi bi-{{ $type }}"></i></a>
                        @endforeach
                    @endisset
                </div>
            </div>

            <div class="col-lg-4 col-md-3 footer-links">
                @if (strlen(wp_get_nav_menu_name('footer_navigation')) > 0)
                    <h4>{!! wp_get_nav_menu_name('footer_navigation') !!}</h4>
                    {!! wp_nav_menu([
                        'theme_location' => 'footer_navigation',
                        'depth' => get_theme_mod('menu_depth') ? esc_attr(get_theme_mod('menu_depth')) : 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container' => false,
                        'fallback_cb' => false,
                        'items_wrap' => '<ul id="%1$s" class="%2$s menu-lain d-flex flex-wrap flex-column align-content-start">%3$s</ul>',
                    ]) !!}
                @endif
            </div>

            <div class="col-lg-2 col-md-12 footer-newsletter">
                <h4 class="footer-etc" style="margin-top: 13px !important;">Bilangan Pelawat</h4>
                <p style="margin-top: -20px;"></p>
                <a href='https://www.acadoo.de/fachrichtungen/ghostwriter-medizin/'>Med. Ghostwriting</a>
                <script type='text/javascript'
                    src='https://www.freevisitorcounters.com/auth.php?id=b50988fd82099ee9719807c13b62d82c6f030fa4'></script>
                <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1205921/t/5"></script>
                <h4 class="footer-etc mt-4">Tarikh Kemaskini</h4>
                <div>
                    <p>{!! get_the_modified_date('') !!}</p>
                </div>
                <div class="mt-4">
                    <img style="height:50px;" src="@asset('images/msc.webp')" alt="MSC" />
                </div>
            </div>
        </div>

        <div class="container copyright mt-4 text-start">
            <div class="row">
                <div class="col-lg">
                    <p class="disclaimer">Institut Dewan Bandaraya Kuala Lumpur tidak bertanggungjawab terhadap sebarang
                        kehilangan atau kerosakan yang dialami kerana menggunakan maklumat dalam laman ini</p>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1">{!! get_bloginfo('name') !!}</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

</footer>
