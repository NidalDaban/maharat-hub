@extends('theme.master')
@section('trainers-active', 'active')

@section('content')
    @include('theme.partials.heroSection', [
        'title' => 'المدربين',
        'description' => 'تعلم مع المعلم المفضل لديك',
        'current' => 'المدبين',
    ])

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-md-10">
                <div class="trainer-search-container">
                    <div class="input-group trainer-search-group">
                        <input type="text" class="form-control trainer-search-input" placeholder="ابحث عن مدربين..."
                            aria-label="بحث عن مدربين">
                        <button id="trainer-search-btn" class="btn trainer-search-btn" type="button">
                            <i class="bi bi-search"></i>
                            <span class="d-none d-sm-inline">بحث</span>
                        </button>
                    </div>
                    <div class="search-tags mt-3">
                        <span class="me-2 d-none d-sm-inline">تصفح حسب:</span>
                        <div class="tags-container">
                            <a href="#" class="tag">البرمجة</a>
                            <a href="#" class="tag">التصميم</a>
                            <a href="#" class="tag">اللغات</a>
                            <a href="#" class="tag">التسويق</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Walter White</h4>
                            <span>Web Development</span>
                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat
                                qui aut aut aut
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <p>
                                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum
                                temporibus
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro
                                des clara
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Trainers Index Section -->

@endsection
