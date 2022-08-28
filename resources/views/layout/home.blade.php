<main class="vlt-main">

    <div class="vlt-page-content">

        <section class="position-relative">

            <div class="vlt-site-fixed-bar vlt-site-fixed-bar--right has-white-color position-absolute">
                <div class="flex-grow-0 flex-shrink-0"></div>
                <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center justify-content-center">
                    <div class="vlt-swiper-progress vlt-homepage-12-anchor" data-direction="vertical"><span
                            class="current"></span>
                        <div class="bar"><span></span></div><span class="total"></span>
                    </div>
                </div>
                <div class="flex-grow-0 flex-shrink-0 text-center"></div>
            </div>

            <div class="vlt-project-showcase vlt-project-showcase--style-7"
                data-navigation-anchor=".vlt-homepage-12-anchor">
                <div class="vlt-project-showcase__footer">
                    <ul class="vlt-project-showcase__navigation">
                        @if (isset($work))
                            @foreach ($work as $data)
                                <li><br>{{ $data->getTranslatedAttribute('name') }}</li>
                            @endforeach
                        @endif
                    </ul>

                    <div
                        class="vlt-slider-controls vlt-slider-controls--style-1 vlt-homepage-12-anchor has-white-color">
                        <div class="vlt-swiper-button-prev">@lang('texts.prev')
                        </div><span class="sep">|</span>
                        <div class="vlt-swiper-button-next">@lang('texts.next')
                        </div>
                    </div>
                    <div class="vlt-project-showcase__socials has-white-color">
                        <a class="vlt-social-icon vlt-social-icon--style-1" href="#">Fb.</a>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @if (isset($work))
                            @foreach ($work as $data)
                                <div class="swiper-slide">
                                    <div class="vlt-project-showcase__item">
                                        <div class="vlt-project-showcase__image"
                                            style="background-image: url({{ Voyager::image($data->fimage) }});"></div>
                                        <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center">
                                            <div class="vlt-project-showcase__content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-7"><span
                                                                class="vlt-project-showcase__subtitle">{{ $data->type }}</span>
                                                            <h1 class="vlt-project-showcase__title">
                                                                {{ $data->getTranslatedAttribute('name') }}</h1>
                                                        </div>
                                                    </div>
                                                    <div class="vlt-project-showcase__info">
                                                        <p class="vlt-project-showcase__text">
                                                            {{ $data->getTranslatedAttribute('description') }}.</p>
                                                        <a class="vlt-btn vlt-btn--primary vlt-btn--md"
                                                            href="/work/{{ $data->id }}"
                                                            target="_self">@lang('texts.explore')</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="jarallax"><img class="jarallax-img" src="assets/img/homepage-12-background-2.png" alt=""
                loading="lazy">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">

                    <div class="col-md-5 offset-md-1">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <div class="vlt-section-title vlt-section-title--style-1">
                                <span class="vlt-section-title__subtitle">@lang('texts.about-us')</span>
                            </div>
                            <div class="vlt-gap-30"></div>
                            <div class="vlt-section-title vlt-section-title--style-1">
                                <img src="assets/img/log.png" alt="">
                            </div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-md-5">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-3">@lang('texts.about-us-text1') </p>
                            <div class="vlt-gap-50"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pr-0">

                        <div class="vlt-simple-image">
                            <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                <div class="inside"></div>
                            </div><img src="assets/img/about1.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <div class="vlt-gap-80"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <h5> </h5>
                        </div>
                        <div class="vlt-gap-30"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-3">@lang('texts.about-us-text2')</p>
                        </div>
                        <div class="vlt-gap-40"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-black-color">
                                <a class="vlt-simple-link vlt-simple-link--md" href="#"
                                    target="_self">@lang('texts.more')<i class="icon-arrow-top-right"></i></a>
                            </div>
                        </div>
                        <div class="vlt-gap-80--sm"></div>
                    </div>
                    <div class="col-md-5 offset-md-1 pl-0">

                        <div class="vlt-simple-image">
                            <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                <div class="inside"></div>
                            </div><img src="assets/img/7.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>


        <section class="jarallax has-white-color"><img class="jarallax-img" src="assets/img/counter-background.png"
                alt="" loading="lazy">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6  ">
                        <div class="vlt-gap-70"></div>
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <div class="vlt-counter-up vlt-counter-up--style-3" data-animation-speed="1000"
                                data-delimiter="">
                                <div class="vlt-counter-up__icon"><i class="icon-case"></i></div>
                                <div class="vlt-counter-up__counter">500</div>
                                <h5 class="vlt-counter-up__title">@lang('texts.projects')
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="vlt-gap-70"></div>
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="vlt-counter-up vlt-counter-up--style-3" data-animation-speed="1000"
                                data-delimiter="">
                                <div class="vlt-counter-up__icon"><i class="icon-heart-2"></i></div>
                                <div class="vlt-counter-up__counter">550</div>
                                <h5 class="vlt-counter-up__title">@lang('texts.implemented')
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="vlt-gap-70"></div>
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">
                            <div class="vlt-counter-up vlt-counter-up--style-3" data-animation-speed="1000"
                                data-delimiter="">
                                <div class="vlt-counter-up__icon"><i class="icon-reward"></i></div>
                                <div class="vlt-counter-up__counter">35</div>
                                <h5 class="vlt-counter-up__title">@lang('texts.employee')
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6  ">
                        <div class="vlt-gap-70"></div>
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <div class="vlt-counter-up vlt-counter-up--style-3" data-animation-speed="1000"
                                data-delimiter="">
                                <div class="vlt-counter-up__icon"><i class="icon-star"></i></div>
                                <div id="demo" class="vlt-counter-up__counter"></div>
                                <h5 class="vlt-counter-up__title">@lang('texts.years')
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-70"></div>
        </section>
        <section class="has-extra-light-gray-background-color">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <div class="vlt-section-title vlt-section-title--style-1"><span
                                    class="vlt-section-title__subtitle">@lang('texts.our-team')</span>
                                <p class="pt-4" style="font-size:18px;">@lang('texts.our-team-text')</p>
                            </div>


                        </div>
                        <div class="vlt-gap-40"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <a class="vlt-btn vlt-btn--secondary vlt-btn--md" href="our-team.html"
                                target="_self">@lang('texts.more')</a>
                        </div>
                        <div class="vlt-gap-60--sm"></div>
                    </div>
                    <div class="col-md-7 offset-md-1">
                        <div class="vlt-stretch-block to-right reset-mobile">

                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">

                                <div class="vlt-content-slider " data-navigation-anchor="" data-gap="30"
                                    data-loop="enable" data-speed="" data-autoplay="" data-autoplay-speed=""
                                    data-slides-centered=""
                                    data-slide-settings="{&quot;slides_to_show&quot;:3,&quot;slides_to_show_mobile&quot;:1}"
                                    data-free-mode="" data-slider-offset="" data-mousewheel="">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            @if (isset($team))
                                                @foreach ($team as $data)
                                                    <div class="swiper-slide">

                                                        <div class="vlt-team-member vlt-team-member--style-1">
                                                            <div class="vlt-team-member__avatar"><img
                                                                    src="{{ Voyager::image($data->image) }}"
                                                                    alt="" loading="lazy">

                                                            </div>
                                                            <div class="vlt-team-member__content">
                                                                <h5 class="vlt-team-member__name">
                                                                    {{ $data->getTranslatedAttribute('name') }}
                                                                </h5>
                                                                <p class="vlt-team-member__function">
                                                                    {{ $data->getTranslatedAttribute('position') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <div class="container text-center">
            <div class="vlt-gap-120"></div>
            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                <div class="vlt-section-title vlt-section-title--style-1"><span
                        class="vlt-section-title__subtitle">@lang('texts.design')</span>
                </div>

                <div class="vlt-gap-60"></div>
            </div>
            <div class="row">
                <div class="col-lg-3">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                        <div class="vlt-proccess">
                            <div class="vlt-proccess__number">01
                            </div>


                            <p class="vlt-proccess__text">@lang('texts.design1')
                            </p>
                        </div>
                    </div>
                    <div class="vlt-gap-60--md"></div>
                </div>
                <div class="col-lg-3">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="100">

                        <div class="vlt-proccess">
                            <div class="vlt-proccess__number">02
                            </div>

                            <p class="vlt-proccess__text">@lang('texts.design2')
                            </p>
                        </div>
                    </div>
                    <div class="vlt-gap-60--md"></div>
                </div>
                <div class="col-lg-3">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="200">

                        <div class="vlt-proccess">
                            <div class="vlt-proccess__number">03
                            </div>

                            <p class="vlt-proccess__text">@lang('texts.design3')
                            </p>
                        </div>
                    </div>
                    <div class="vlt-gap-60--md"></div>
                </div>

                <div class="col-lg-3">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                        <div class="vlt-proccess">
                            <div class="vlt-proccess__number">04
                            </div>

                            <p class="vlt-proccess__text">@lang('texts.design4')
                            </p>
                        </div>
                    </div>
                    <div class="vlt-gap-60--md"></div>
                </div>
            </div>
        </div>

        <section>
            <div class="vlt-gap-120"></div>
            <div class="container text-center">

                <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                    <div class="vlt-section-title vlt-section-title--style-1"><span
                            class="vlt-section-title__subtitle">@lang('texts.service')</span>
                        <p class="pt-4"> @lang('texts.service-text')</p>
                    </div>


                </div>
                <div class="vlt-gap-60"></div>
            </div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">

                            <div class="vlt-service vlt-service--style-5"><a class="vlt-service__link"
                                    href="service-single.html"></a>
                                <div class="vlt-service__media"><img src="assets/img/root/interior-design.png"
                                        alt=""></div>
                                <div class="vlt-service__content">
                                    <h6 class="vlt-service__title">@lang('texts.arch')
                                    </h6>
                                    <p class="vlt-service__text">@lang('texts.arch-text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">

                            <div class="vlt-service vlt-service--style-5"><a class="vlt-service__link"
                                    href="service-single.html"></a>
                                <div class="vlt-service__media"><img src="assets/img/root/handshake.png"
                                        alt=""></div>
                                <div class="vlt-service__content">
                                    <h6 class="vlt-service__title">@lang('texts.consulting')
                                    </h6>
                                    <p class="vlt-service__text">@lang('texts.consulting-text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">

                            <div class="vlt-service vlt-service--style-5"><a class="vlt-service__link"
                                    href="service-single.html"></a>
                                <div class="vlt-service__media"><img src="assets/img/root/staircase.png"
                                        alt=""></div>
                                <div class="vlt-service__content">
                                    <h6 class="vlt-service__title">@lang('texts.interior')
                                    </h6>
                                    <p class="vlt-service__text">@lang('texts.interior-text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="400">

                            <div class="vlt-service vlt-service--style-5"><a class="vlt-service__link"
                                    href="service-single.html"></a>
                                <div class="vlt-service__media"><img src="assets/img/root/buildings.png"
                                        alt=""></div>
                                <div class="vlt-service__content">
                                    <h6 class="vlt-service__title">@lang('texts.city')
                                    </h6>
                                    <p class="vlt-service__text">@lang('texts.city-text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>



        <section class="position-relative">
            <img class="vlt-particle animate__animated animate__fadeInRight"
                src="assets/img/root/square-plus-pattern.png" data-animation-name="fadeInRight" alt=""
                style="position: absolute; top: 0; right: 0; max-width: 232px; --animate-delay: .5s;" loading="lazy">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">

                        <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                            <div class="vlt-section-title vlt-section-title--style-1"><span
                                    class="vlt-section-title__subtitle">@lang('texts.partner')</span>
                            </div>
                        </div>
                        <div class="vlt-gap-30"></div>
                    </div>
                </div>
                <div class="row">
                    @if (isset($partner))
                        @foreach ($partner as $data)
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="vlt-gap-70"></div>

                                <div class="vlt-animated-block aos-init aos-animate" data-aos="fade"
                                    data-aos-delay="0">

                                    <div class="vlt-partner vlt-partner--center"><a href="{{ $data->link }}"><img
                                                src="{{ Voyager::image($data->logo) }}" alt=""
                                                loading="lazy" style="max-height:80px;"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </section>



        <section class="jarallax"><img class="jarallax-img" src="assets/img/homepage-12-background.png"
                alt="" loading="lazy">
            <div class="vlt-gap-120"></div>
            <div class="container">

                <div class="text-center">
                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                        <div class="vlt-section-title vlt-section-title--style-1"><span
                                class="vlt-section-title__subtitle">@lang('texts.work')</span>
                        </div>
                    </div>
                    <div class="vlt-gap-30"></div>
                    <ul class="vlt-isotope-filters" id="vlt-filter-portfolio-02">
                        <li class="active" data-filter="*"><span>@lang('texts.all1')</span></li>
                        <li data-filter=".Орон"><span>@lang('texts.osb')</span></li>
                        <li data-filter=".Оффис"><span>@lang('texts.uou')</span></li>
                        <li data-filter=".Цэцэрлэг"><span>@lang('texts.tseb')</span></li>
                        <li data-filter=".ахуйн"><span>@lang('texts.aaus')</span></li>
                    </ul>
                </div>
                <div class="vlt-gap-90"></div>
                <div class="vlt-isotope-grid" data-columns="3" data-layout="masonry" data-x-gap="30|30"
                    data-y-gap="60|60" data-controls="#vlt-filter-portfolio-02"
                    data-load-more-selector="#vlt-load-more-portfolio-02">
                    <div class="grid-sizer"></div>
                    @if (isset($works))
                        @foreach ($works as $data)
                            <div class="grid-item {{ $data->type }}">
                                <article class="vlt-work vlt-work--style-1">
                                    <div class="vlt-work__media">
                                        <a class="vlt-work__link has-cursor"
                                            href="/work/{{ $data->id }}"></a><img
                                            src="{{ Voyager::image($data->fimage) }}" alt=""
                                            loading="lazy" />
                                    </div>
                                    <div class="vlt-work__meta">
                                        <h5 class="vlt-work__title"><a
                                                href="/work/{{ $data->id }}">{{ $data->getTranslatedAttribute('name') }}</a>
                                        </h5>
                                        <span class="vlt-work__category">{{ $data->type }}</span>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="vlt-gap-100"></div>
                <div class="text-center">
                    <div id="vlt-load-more-portfolio-02">
                        <a class="vlt-isotope-load-more" href="/works"><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>


    </div>
</main>
<script>
    const d = new Date();
    let year = d.getFullYear();
    let exp = year - 1993
    document.getElementById("demo").innerHTML = exp;
</script>
