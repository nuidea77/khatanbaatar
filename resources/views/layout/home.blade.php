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
                        @if(isset($work))
                    @foreach($work as $data)
                        <li><br>{{ $data->getTranslatedAttribute('name') }}</li>
                        @endforeach
                        @endif
                    </ul>

                    <div
                        class="vlt-slider-controls vlt-slider-controls--style-1 vlt-homepage-12-anchor has-white-color">
                        <div class="vlt-swiper-button-prev">Prev
                        </div><span class="sep">|</span>
                        <div class="vlt-swiper-button-next">Next
                        </div>
                    </div>
                    <div class="vlt-project-showcase__socials has-white-color">
                        <a class="vlt-social-icon vlt-social-icon--style-1" href="#">Fb.</a>
                        <a class="vlt-social-icon vlt-social-icon--style-1" href="#">Tw.</a>
                        </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @if(isset($work))
                    @foreach($work as $data)
                        <div class="swiper-slide">
                            <div class="vlt-project-showcase__item">
                                <div class="vlt-project-showcase__image"
                                    style="background-image: url({{Voyager::image($data->fimage)}});"></div>
                                <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center">
                                    <div class="vlt-project-showcase__content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-7"><span
                                                        class="vlt-project-showcase__subtitle">{{ $data->type }}</span>
                                                    <h1 class="vlt-project-showcase__title">{{ $data->getTranslatedAttribute('name') }}</h1>
                                                </div>
                                            </div>
                                            <div class="vlt-project-showcase__info">
                                                <p  class="vlt-project-showcase__text">{{ $data->getTranslatedAttribute('description') }}.</p>
                                                <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="/work/{{ $data->id }}"
                                                    target="_self">Explore project</a>
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
                    <div class="col-md-11 offset-md-1">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0"><span
                                class="vlt-display-1">Бидний тухай</span>
                        </div>
                        <div class="vlt-gap-30"></div>
                    </div>
                    <div class="col-md-5 offset-md-1">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">

                            <div class="vlt-section-title vlt-section-title--style-1">
                                <img src="assets/img/log.png" alt="">
                            </div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-md-5">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-3">“Хатанбаатар” ХХК нь Монгол улс дахь барилгын зураг төслийн салбартаа нэр хүндтэй, хамгийн олон инженер техникийн ажилтантай, 23 жилийн туршлагатай, салбартаа тэргүүн эгнээнд ажилладаг, мэргэшсэн байгууллага юм. </p>
                            <div class="vlt-gap-50"></div>
                            <a class="vlt-btn vlt-btn--secondary vlt-btn--md" href="about-us.html" target="_self">Дэлгэрэнгүй</a>
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
                            </div><img src="assets/img/homepage-12-image-1.png" alt="" loading="lazy">
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
                            <p class="fz-3">Манай байгууллага нь бүх төрлийн барилгын зураг төслийг боловсруулахаас гадна интерьер болон экстерьерийн зураг төсөл боловсруулах, захиалагчид зөвлөгөө өгөх чиглэлээр ажилладаг. </p>
                        </div>
                        <div class="vlt-gap-40"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-black-color">
                                <a class="vlt-simple-link vlt-simple-link--md" href="#" target="_self">Дэлгэрэнгүй<i class="icon-arrow-top-right"></i></a>
                            </div>
                        </div>
                        <div class="vlt-gap-80--sm"></div>
                    </div>
                    <div class="col-md-5 offset-md-1 pl-0">

                        <div class="vlt-simple-image">
                            <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                <div class="inside"></div>
                            </div><img src="assets/img/homepage-12-image-2.png" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>

        <section>
            <div class="container-fluid p-0">

                <div class="vlt-types">
                    <div class="vlt-types-background">
                        <div class="vlt-types-background__image"><img src="assets/img/homepage-12-types-1.png"
                                alt="" loading="lazy"></div>
                        <div class="vlt-types-background__image"><img src="assets/img/homepage-12-types-2.png"
                                alt="" loading="lazy"></div>
                        <div class="vlt-types-background__image"><img src="assets/img/homepage-12-types-3.png"
                                alt="" loading="lazy"></div>
                    </div>
                    <div class="vlt-types-list">
                        <div class="vlt-types-list__item"><a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background"><img src="assets/img/homepage-12-types-1.png"
                                    alt="" loading="lazy"></div>
                            <div class="vlt-types-list__content"><span
                                    class="vlt-types-list__category">Interior</span>
                                <h4 class="vlt-types-list__title">Stylish Office</h4>
                            </div>
                        </div>
                        <div class="vlt-types-list__item"><a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background"><img src="assets/img/homepage-12-types-2.png"
                                    alt="" loading="lazy"></div>
                            <div class="vlt-types-list__content"><span
                                    class="vlt-types-list__category">Architecture</span>
                                <h4 class="vlt-types-list__title">Business Apartment</h4>
                            </div>
                        </div>
                        <div class="vlt-types-list__item"><a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background"><img src="assets/img/homepage-12-types-3.png"
                                    alt="" loading="lazy"></div>
                            <div class="vlt-types-list__content"><span
                                    class="vlt-types-list__category">Interior</span>
                                <h4 class="vlt-types-list__title">Family House</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="jarallax has-white-color"><img class="jarallax-img" src="assets/img/counter-background.png"
                alt="" loading="lazy">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="vlt-gap-70"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">

                            <div class="vlt-counter-up vlt-counter-up--style-3" data-animation-speed="1000"
                                data-delimiter="">
                                <div class="vlt-counter-up__icon"><i class="icon-case"></i></div>
                                <div class="vlt-counter-up__counter">200</div>
                                <h5 class="vlt-counter-up__title">Projects
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="vlt-gap-70"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">

                            <div class="vlt-counter-up vlt-counter-up--style-3" data-animation-speed="1000"
                                data-delimiter="">
                                <div class="vlt-counter-up__icon"><i class="icon-star"></i></div>
                                <div id="demo" class="vlt-counter-up__counter"></div>
                                <h5 class="vlt-counter-up__title">Years
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="vlt-gap-70"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">

                            <div class="vlt-counter-up vlt-counter-up--style-3" data-animation-speed="1000"
                                data-delimiter="">
                                <div class="vlt-counter-up__icon"><i class="icon-heart-2"></i></div>
                                <div class="vlt-counter-up__counter">116</div>
                                <h5 class="vlt-counter-up__title">Clients
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="vlt-gap-70"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">

                            <div class="vlt-counter-up vlt-counter-up--style-3" data-animation-speed="1000"
                                data-delimiter="">
                                <div class="vlt-counter-up__icon"><i class="icon-reward"></i></div>
                                <div class="vlt-counter-up__counter">17</div>
                                <h5 class="vlt-counter-up__title">Awards
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-70"></div>
        </section>

        <section>
            <div class="vlt-gap-120"></div>
            <div class="container text-center">

                <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">

                    <div class="vlt-section-title vlt-section-title--style-1">
                        <h2 class="vlt-section-title__title">ҮЙЛЧИЛГЭЭ</h2>
                    </div>
                    <p class="pt-4" style="font-size:14px;" > Манай байгууллага нь бүх төрлийн барилгын зураг төслийг боловсруулахаас гадна интерьер болон экстерьерийн зураг төсөл боловсруулах, захиалагчид зөвлөгөө өгөх чиглэлээр ажилладаг. 2015 онд Зөвлөх үйлчилгээний чиглэлээр тусгай зөвшөөрөл авах зорилт тавин ажиллаж байна. 2009 оноос байгууллагадаа олон улсын чанарын удирдлагын тогтолцоог нэвтрүүлэн, чанарын удирдлагын тогтолцооны хүрээнд байгууллагын чанарын бодлого болон чанарын зорилгуудыг тодорхойлон түүнийхээ дагуу ажиллаж, 2012 оны 2 дугаар сард чанарын удирдлагын тогтолцооны ISO 9001:2008, MNS ISO 9001:2010 гэрчилгээ авсан.</p>
                </div>
                <div class="vlt-gap-60"></div>
            </div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">

                            <div class="vlt-service vlt-service--style-5"><a class="vlt-service__link"
                                    href="service-single.html"></a>
                                <div class="vlt-service__media"><i class="icon-drawing-tools"></i></div>
                                <div class="vlt-service__content">
                                    <h5 class="vlt-service__title">ЗУРАГ ТӨСӨЛ
                                    </h5>
                                    <p class="vlt-service__text">Захиалагчийн хүсэлд нийцсэн хүн, байгаль орчинд ээлтэй архитектурын цогц шийдлийг мэргэжлийн өндөр түвшинд гаргана.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">

                            <div class="vlt-service vlt-service--style-5"><a class="vlt-service__link"
                                    href="service-single.html"></a>
                                <div class="vlt-service__media"><i class="icon-paint-bucket"></i></div>
                                <div class="vlt-service__content">
                                    <h5 class="vlt-service__title">ЗӨВЛӨХ ҮЙЛЧИЛГЭЭ
                                    </h5>
                                    <p class="vlt-service__text">Барилгын зураг төслийн салбарт танд тулгамдсан асуудлыг шийдвэрлэх гарцыг бид зөвлөнө.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">

                            <div class="vlt-service vlt-service--style-5"><a class="vlt-service__link"
                                    href="service-single.html"></a>
                                <div class="vlt-service__media"><i class="icon-helmet"></i></div>
                                <div class="vlt-service__content">
                                    <h5 class="vlt-service__title">ИНТЕРЬЕР ДИЗАЙН
                                    </h5>
                                    <p class="vlt-service__text">Захиалагчид тулгуурлан интерьер экстерьерийн зөв шийдлийг гаргана.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="400">

                            <div class="vlt-service vlt-service--style-5"><a class="vlt-service__link"
                                    href="service-single.html"></a>
                                <div class="vlt-service__media"><i class="icon-protactor"></i></div>
                                <div class="vlt-service__content">
                                    <h5 class="vlt-service__title">ХОТ ТӨЛӨВЛӨЛТ
                                    </h5>
                                    <p class="vlt-service__text">Архитектур орон зай, Хот төлөвлөлтийн орчин үеийн чиг хандлагад тулгуурлан үйлчилгээ үзүүлнэ.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
            <div class="container-fluid p-0">

                <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0"><strong
                        class="fz-5 lh-0 has-black-color" data-marquee=""><span
                            data-marquee-text="We make construction products &amp; services.">We make construction
                            products & services.</span><span
                            data-marquee-text="We make construction products &amp; services.">We make construction
                            products & services.</span><span
                            data-marquee-text="We make construction products &amp; services.">We make construction
                            products & services.</span></strong>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>

        <section class="has-extra-light-gray-background-color">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">

                            <div class="vlt-section-title vlt-section-title--style-1">
                                <h2 class="vlt-section-title__title">ХАМТ ОЛОН</h2>
                                <p class="vlt-section-title__text">Олон жилийн тогтвортой үйл ажиллагаа, туршлагатай боловсон хүчин, зураг төслийг иж бүрнээр нь зөвхөн өөрийн инженер техникийн ажилтануудад тулгуурлан боловсруулах хүчин чадалтай, сүүлийн үеийн хэвлэх машин болон тоног төхөөрөмжөөр тоноглогдсон.</p>
                            </div>
                        </div>
                        <div class="vlt-gap-40"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <a class="vlt-btn vlt-btn--secondary vlt-btn--md" href="our-team.html"
                                target="_self">Дэлгэрэнгүй</a>
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
                                            {{-- @if(isset($team))
                                            @foreach($team as $data)
                                            <div class="swiper-slide">

                                                <div class="vlt-team-member vlt-team-member--style-1">
                                                    <div class="vlt-team-member__avatar"><img
                                                            src="{{Voyager::image($data->image)}}" alt=""
                                                            loading="lazy">

                                                    </div>
                                                    <div class="vlt-team-member__content">
                                                        <h5 class="vlt-team-member__name">{{ $data->name }}
                                                        </h5>
                                                        <p class="vlt-team-member__function">{{ $data->position }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif --}}

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

        <section class="jarallax"><img class="jarallax-img" src="assets/img/homepage-12-background.png"
                alt="" loading="lazy">
            <img class="vlt-particle" src="assets/img/root/architecture-plus-pattern.png"
                data-animation-name="fadeInRight" alt=""
                style="position: absolute; top: 0; right: 0; max-width: 310px; --animate-delay: .5s;" loading="lazy">
            <div class="vlt-gap-130"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <div class="vlt-simple-image">
                            <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                <div class="inside"></div>
                            </div><img src="assets/img/homepage-12-image.png" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 offset-lg-7">
                        <div class="vlt-custom--1519">

                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                                <h4 class="has-white-color">Strategy-led design in every detail</h4>
                            </div>
                            <div class="vlt-gap-30"></div>

                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                                <p class="has-gray-color">Branding and digital are forte. Given the state the world
                                    think it’s time that we start.</p>
                            </div>
                            <div class="vlt-gap-30"></div>

                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                <div class="has-white-color">
                                    <a class="vlt-simple-link vlt-simple-link--md" href="about-us.html"
                                        target="_self">Read more<i class="icon-arrow-top-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-130"></div>
        </section>

        <section class="jarallax"><img class="jarallax-img" src="assets/img/homepage-12-banner.png" alt=""
                loading="lazy">
            <div class="vlt-gap-130"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <h2 class="has-white-color">Have a question?</h2>
                        </div>
                        <div class="vlt-gap-20"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="has-white-color fz-3">Do you have a creative challenge for us? Get in touch
                                <br>with a member of the team.</p>
                        </div>
                        <div class="vlt-gap-40"></div>

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <a class="vlt-btn vlt-btn--primary vlt-btn--md vlt-btn--white" href="contact-01.html"
                                target="_self">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-130"></div>
        </section>
    </div>
</main>
<script>
    const d = new Date();
    let year = d.getFullYear();
    let exp = year-1993
    document.getElementById("demo").innerHTML = exp;
    </script>
