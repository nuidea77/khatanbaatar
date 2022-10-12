@extends('layout.main')
@section('content')
    <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img"
            src="assets/img/contact-page-title.png" alt="" loading="lazy">
        <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                class="icon-arrow-down"></i></a>
        <div class="container">
            <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">@lang('texts.about-us')
            </h1>
        </div>
    </div>
    <div id="content"></div>

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
                    <div class="vlt-gap-60"></div>
                    <div class="vlt-gap-60"></div>

                </div>
                <div class="col-md-5">

                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        <p class="fz-3">@lang('texts.about1') </p>
                        <p class="fz-3" >@lang('texts.about2')</p>
                        <p class="fz-3">@lang('texts.about3') </p>
                        <p class="fz-3" >@lang('texts.about4')</p>
                        <p class="fz-3">@lang('texts.about5') </p>
                        <div class="vlt-gap-50"></div>
                    </div>


                </div>
            </div>
        </div>

    </section>
    <div class="vlt-gap-50"></div>
    <section class="jarallax has-gray-color" >
        <div class="vlt-gap-50"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-4">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">
                        <div class="has-light-gray-color" style="opacity: .16;">

                            <div class="vlt-stroke-text vlt-stroke-text--lg">01
                            </div>
                        </div>
                        <h5 class="has-white-color negative-top-offset-lg">Эрхэм зорилго</h5>
                        <div class="vlt-gap-40"></div>
                        <p style="max-width: 90%;">Өрсөлдөхүйц давуу талыг хайн бий болгож захиалагч бүртэй удаан хугацааны амжилттай харилцааг эрхэмлэн хамтран ажиллана.

                            </p>
                    </div>
                    <div class="vlt-gap-60--sm"></div>
                </div>
                <div class="col-md-4">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="200">
                        <div class="has-light-gray-color" style="opacity: .16;">

                            <div class="vlt-stroke-text vlt-stroke-text--lg">02
                            </div>
                        </div>
                        <h5 class="has-white-color negative-top-offset-lg">Чанарын бодлого</h5>
                        <div class="vlt-gap-40"></div>
                        <p style="max-width: 90%;">Захиалагчийн хүсэл, шаардлагыг хангаж, сэтгэл ханамжийг дээшлүүлэхийн тулд дэвшилтэд технологи болон холбогдох хууль, тогтоомж, стандарт, орм дүрмийг мөрдөн компанийн үйл ажиллагааг байнга сайжруулах замаар зураг төслийн ажлыг чанартай, хугацаанд нь гүйцэтгэнэ.
                            </p>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="200">
                        <div class="has-light-gray-color" style="opacity: .16;">

                            <div class="vlt-stroke-text vlt-stroke-text--lg">03
                            </div>
                        </div>
                        <h5 class="has-white-color negative-top-offset-lg">Чанарын бодлого</h5>
                        <div class="vlt-gap-40"></div>
                        <p style="max-width: 90%;">- Зураг төсөл эхлэхээс барилга ашиглалтанд орох хүртэлх хугацаанд захиалагчтай нэг багийн хамтын ажиллагааг дэмжинэ.
                            <br>- Зураг төсөл боловсруулах үйл явцаар дамжуулан барилгын салбарт дэлхийн шинэ технологи нэвтрүүлж, барилгын бодит өртгийг бууруулахад хувь нэмрээ оруулж эдийн засаг, нийгмийн хариуцлагатай ажиллана.
                            <br> - Зураг төсөл боловсруулах үйл ажиллагааны үе шат бүрт- захиалагч” гэдэг бүх
                                  нийтийн чанарын тогтолцоог бүрдүүлнэ.
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="vlt-gap-120"></div>
        <div id="jarallax-container-0"
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
            <img class="jarallax-img" src="assets/img/careers-single-background.png" alt="" loading="lazy"
                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1487px; height: 763.837px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 40.0813px; transform: translate3d(0px, 106.719px, 0px);">
        </div>
    </section>
    <div class="vlt-gap-120"></div>
    <div class="container">
        <div class="text-center">
            <ul class="vlt-isotope-filters" id="vlt-filter-portfolio-02">
                <li style="font-size: 14px" class="active" data-filter="*"><span>@lang('texts.all')</span></li>
                <li style="font-size: 14px" data-filter=".option1"><span>@lang('texts.ad')</span></li>
                <li style="font-size: 14px" data-filter=".option2"><span>@lang('texts.ca')</span></li>
                <li style="font-size: 14px" data-filter=".option3"><span>@lang('texts.ss')</span></li>
                <li style="font-size: 14px" data-filter=".option4"><span>@lang('texts.ens')</span></li>
            </ul>
        </div>
        <div class="vlt-gap-90"></div>
        <div class="vlt-isotope-grid" data-columns="4" data-layout="masonry" data-x-gap="30|30" data-y-gap="60|60"
            data-controls="#vlt-filter-portfolio-02" data-load-more-selector="#vlt-load-more-portfolio-02"
            style="margin: -30px -15px; position: relative; height: 1104.03px;">
            <div class="grid-sizer"></div>
            <div class="row">
                @if (isset($team))
                    @foreach ($team as $data)
                        <div class="col-lg-3 col-md-6 grid-item {{ $data->type }}">

                            <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                                <div class="vlt-team-member vlt-team-member--style-1">
                                    <div class="vlt-team-member__avatar"><img src="{{ Voyager::image($data->image) }}"
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
                            <div class="vlt-gap-40--sm"></div>

                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </div>

    <section class="position-relative">
        <img class="vlt-particle animate__animated animate__fadeInRight" src="assets/img/root/square-plus-pattern.png"
            data-animation-name="fadeInRight" alt=""
            style="position: absolute; top: 0; right: 0; max-width: 232px; --animate-delay: .5s;" loading="lazy">
        <div class="vlt-gap-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                        <div class="vlt-section-title vlt-section-title--style-1"><span
                                class="vlt-section-title__subtitle">@lang('texts.partner')</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (isset($partner))
                    @foreach ($partner as $data)
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="vlt-gap-70"></div>

                            <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                                <div class="vlt-partner vlt-partner--center"><a href="{{ $data->link }}"><img
                                            src="{{ Voyager::image($data->logo) }}" alt="" loading="lazy"
                                            style="max-height:80px;"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section>
@stop
