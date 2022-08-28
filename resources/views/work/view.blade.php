@extends('layout.main')
@if(isset($data))
@section('metaShare')
<meta property="og:url"           content="http://www.khatanbaatar.com/work/{{ $data->id }} " />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $data->getTranslatedAttribute('name') }}" />
<meta property="og:description"   content="{{ $data->getTranslatedAttribute('description') }}" />
<meta property="og:image"         content="{{ Voyager::image( $data->fimage ) }}" />
@stop
@section('content')
        <div class="vlt-page-title vlt-page-title--style-3 jarallax">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to"
                href="#content"><i class="icon-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title"
                    style="backface-visibility: hidden; transform: translateY(0px); opacity: 1;">{{ $data->getTranslatedAttribute('name') }}
                </h1>
            </div>
            <div id="jarallax-container-0"
                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
                <img class="jarallax-img" src="{{ Voyager::image($data->fimage) }}" alt="" loading="lazy"
                    style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 669px; height: 678.075px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 82.9625px; transform: translate3d(0px, -82.9625px, 0px);">
            </div>
        </div>
        <div id="content"></div>

        <section class="has-extra-light-gray-background-color">
            <div class="vlt-gap-30"></div>
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-4">

                        <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">
                            <dl>
                                <dt>@lang('texts.client')</dt>
                                <dd>{{ $data->getTranslatedAttribute('client') }}</dd>
                            </dl>
                        </div>
                        <div class="vlt-gap-30--sm"></div>
                    </div>
                    <div class="col-4 col-md-4">

                        <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="100">
                            <dl>
                                <dt>@lang('texts.type')</dt>
                                <dd>{{ $data->getTranslatedAttribute('client') }}</dd>
                            </dl>
                        </div>
                        <div class="vlt-gap-30--sm"></div>
                    </div>
                    <div class="col-4 col-md-4">

                        <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="200">
                            <dl>
                                <dt>@lang('texts.date')</dt>
                                <dd>{{ $data->date }}</dd>
                            </dl>
                        </div>
                    </div>

                </div>
            </div>
            <div class="vlt-gap-30"></div>
        </section>

        <section>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="text-center">

                            <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                                <div class="vlt-section-title vlt-section-title--style-1">
                                    <h2 class="vlt-section-title__title">@lang('texts.desc')</h2>
                                    <p class="vlt-section-title__text">{{ $data->getTranslatedAttribute('description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
            <div class="container position-relative">
                <img class="vlt-particle animate__animated animate__fadeInUp"
                    src="{{asset('assets/img/root/square-plus-pattern.png')}}" data-animation-name="fadeInUp" alt=""
                    style="position: absolute; top: -114px; right: -114px; max-width: 232px; --animate-delay: .5s;"
                    loading="lazy">

                    @foreach (json_decode($data->oimage) as $data->oimage)
                <div class="vlt-simple-image">

                    <div class="vlt-simple-image__mask aos-init aos-animate" data-aos="image-mask-animation"
                        data-aos-delay="0">
                        <div class="inside"></div>

                    </div>


<img src="{{ Voyager::image($data->oimage) }}" alt="" loading="lazy">

<div class="vlt-gap-30"></div>
                </div>
                @endforeach


            </div>
            <div class="vlt-gap-120"></div>

        </section>



        <section class="has-extra-light-gray-background-color">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="text-center">

                    <div class="vlt-animated-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">

                        <div class="vlt-section-title vlt-section-title--style-1">
                            <h2 class="vlt-section-title__title">@lang("texts.rproject")</h2>
                        </div>
                    </div>
                </div>
                <div class="vlt-gap-100"></div>
                <div class="vlt-isotope-grid" data-columns="3" data-layout="masonry" data-x-gap="30|30"
                    data-y-gap="60|60" style="margin: -30px -15px; position: relative; height: 2203.55px;">
                    <div class="grid-sizer"></div>
                    @if (isset($recent))
                        @foreach ($recent as $data)
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
            </div>
            <div class="vlt-gap-120"></div>
        </section>



@stop
@endif
