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
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="vlt-gap-60"></div>
                    </div>
                    <div class="col-lg-8">

                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">

                            <form class="vlt-contact-form vlt-contact-form--style-2" novalidate="novalidate">
                                <div class="vlt-form-row two-col">
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="text" name="name"
                                            required="required" placeholder=" ">
                                        <label class="vlt-form-label">Your name*</label>
                                    </div>
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="email" name="email"
                                            required="required" placeholder=" ">
                                        <label class="vlt-form-label">Email address*</label>
                                    </div>
                                </div>
                                <div class="vlt-form-row two-col">
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="tel" name="phone" placeholder=" ">
                                        <label class="vlt-form-label">Phone number</label>
                                    </div>
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="text" name="company" placeholder=" ">
                                        <label class="vlt-form-label">Company</label>
                                    </div>
                                </div>
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="text" name="title" required="required"
                                        placeholder=" ">
                                    <label class="vlt-form-label">Title*</label>
                                </div>
                                <div class="vlt-form-group">
                                    <textarea class="vlt-form-control" name="message" rows="5" placeholder=" "></textarea>
                                    <label class="vlt-form-label">Message*</label>
                                </div>
                                <div class="message success">Your message is successfully sent...</div>
                                <div class="message danger">Sorry something went wrong!</div>
                                <div class="vlt-gap-40"></div>

                                <button class="vlt-btn vlt-btn--secondary vlt-btn--lg">Submit
                                </button>
                            </form>
                        </div>
                        <div class="vlt-gap-60--md"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="vlt-pl-70 vlt-pl-0--md">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">

                                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                        <h5>General Info</h5>
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
