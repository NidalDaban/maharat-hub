@extends('theme.master')
@section('contact-active', 'active')

@section('content')
    <main class="main">

        @include('theme.partials.heroSection', [
            'title' => 'تواصل معنا',
            'description' => 'تواصل معنا لمعرفة المزيد',
            'current' => 'تواصل معنا',
        ])

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center"> <!-- Added justify-content-center -->
                    <div class="col-lg-8" id="form-container">
                        <form action="forms/contact.php" method="post" class="php-email-form p-4" data-aos="fade-up"
                            data-aos-delay="200" style="border: 1px solid #333; border-radius: 0.25rem;">
                            <!-- Added border styles -->
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <select name="service" class="form-control" required>
                                        <option value="" selected disabled>اختر الخدمة</option>
                                        <option value="cooperation">تعاون معانا</option>
                                        <option value="complaints">شكاوى</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                    <!-- Added btn class -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->

    @endsection




    {{-- <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Your Info</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Message</h3>
                            </div>
                        </div><

                    </div> --}}
