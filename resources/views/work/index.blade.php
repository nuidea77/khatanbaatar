@extends('layout.main')
@section('content')
<div class="vlt-page-content">

    <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img"
            src="assets/img/contact-page-title.png" alt="" loading="lazy">
        <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to"
            href="#content"><i class="icon-arrow-down"></i></a>
        <div class="container">
            <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">@lang('texts.work')
            </h1>
        </div>
    </div>
    <div id="content"></div>


<section class="jarallax"><img class="jarallax-img" src="assets/img/homepage-12-background.png" alt=""
        loading="lazy">
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
        <div class="vlt-isotope-grid" data-columns="3" data-layout="masonry" data-x-gap="30|30" data-y-gap="60|60"
            data-controls="#vlt-filter-portfolio-02" data-load-more-selector="#vlt-load-more-portfolio-02">
            <div class="grid-sizer"></div>
            @if (isset($work))
                @foreach ($work as $data)
                    <div class="grid-item {{ $data->type }}">
                        <article class="vlt-work vlt-work--style-1">
                            <div class="vlt-work__media">
                                <a class="vlt-work__link has-cursor" href="/work/{{ $data->id }}"></a><img
                                    src="{{ Voyager::image($data->fimage) }}" alt="" loading="lazy" />
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
    <div class="vlt-gap-120"></div>

        </div>

    </div>
    <div class="vlt-gap-120"></div>
</section>
@stop
