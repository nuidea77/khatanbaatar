@extends('layout.main')
@section('content')
<main class="vlt-main">

    <div class="vlt-page-content">

        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img"
                src="assets/img/contact-page-title.png" alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to"
                href="#content"><i class="icon-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">@lang("texts.contact")
                </h1>
            </div>
        </div>
        <div id="content"></div>

        <section>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <h2>@lang("texts.formt")</h2>
                        </div>
                        <div class="vlt-gap-60"></div>
                    </div>
                    <div class="col-lg-8">


                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">

                            <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm" class="vlt-contact-form--style-2" >
                                {{ csrf_field() }}
                                <div class="vlt-form-row two-col">
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="text" name="name"
                                            required="required" placeholder=" " value="{{ old('name') }}">
                                        <label class="vlt-form-label">@lang("texts.name")*</label>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="email" name="email"
                                            required="required" placeholder=" " value="{{ old('email') }}">
                                        <label class="vlt-form-label">@lang("texts.email")*</label>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    </div>
                                </div>
                                <div class="vlt-form-row two-col">
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="tel" name="phone" placeholder=" " value="{{ old('phone') }}">
                                        <label class="vlt-form-label">@lang("texts.phone")*</label>
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="text" name="subject" placeholder=" " value="{{ old('subject') }}">
                                        <label class="vlt-form-label">@lang("texts.subject")*</label>
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="vlt-form-group">
                                    <textarea class="vlt-form-control" name="message" rows="5" placeholder=" ">{{ old('message') }}</textarea>
                                    <label class="vlt-form-label">@lang("texts.message")*</label>
                                    @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                </div>
                                @if(Session::has('success'))

                                <div class="alert alert-success message success">

                                    {{Session::get('success')}}

                                </div>

                            @endif

                                <div class="vlt-gap-40"></div>

                                <input type="submit" value="@lang("texts.send")" class="vlt-btn vlt-btn--secondary vlt-btn--lg">

                            </form>
                        </div>
                        <div class="vlt-gap-60--md"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="vlt-pl-70 vlt-pl-0--md">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">

                                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                        <h5>@lang("texts.cinfo")</h5>
                                        <div class="vlt-gap-20"></div>
                                        <p class="lh-2">@lang("texts.location")
                                            <a  href="mailto:info@khatanbaatar.com" >info@khatanbaatar.com</a><br>
                    <a  href="tel:+97677228888" >+976 7722-8888</a><br>
                    <a  href="tel:+97688107083" >+976 8810-7083</a>
                                        </p>
                                    </div>
                                    <div class="vlt-gap-60"></div>
                                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="400">
                                        <div class="has-black-color"><a
                                                class="vlt-social-icon vlt-social-icon--style-1"
                                                href="https://www.facebook.com/profile.php?id=100057475419178">Fb.</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container position-relative">
                <div class="vlt-gap-60"></div>
                <img class="vlt-particle" src="assets/img/root/square-plus-pattern.png"
                    data-animation-name="fadeInUp" alt=""
                    style="position: absolute; top: -140px; right: -120px; max-width: 232px; --animate-delay: .5s;"
                    loading="lazy">

                <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">

                    <div id="map" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.1593555707836!2d106.88941971586657!3d47.913953979206276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d9692ff4af98851%3A0x74c2278d70d2528!2sKhatanbaatar%20LLC!5e0!3m2!1sen!2smn!4v1661627889687!5m2!1sen!2smn"   style="border:0;" width="100%" height="400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
    </div>
</main>
@stop
