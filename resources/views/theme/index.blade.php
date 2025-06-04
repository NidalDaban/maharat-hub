@extends('theme.master')
@section('index-active', 'active')

@section('content')
    {{-- <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">نتعلم اليوم،<br>لنقود الغد</h2>
            <p data-aos="fade-up" data-aos-delay="200">انضم إلى مجتمع نابض بالحياة حيث يلتقي التعلم بالفرص. منصة مهارات هَب
                تتيح للأفراد مشاركة خبراتهم وتبادل المهارات لبناء مستقبل أفضل وتحقيق النمو معًا.</p>
        </div>

        

    </section><!-- /Hero Section --> --}}

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">نتعلم اليوم،<br>لنقود الغد</h2>
            <p data-aos="fade-up" data-aos-delay="200">انضم إلى مجتمع نابض بالحياة حيث يلتقي التعلم بالفرص. منصة مهارات هَب
                تتيح للأفراد مشاركة خبراتهم وتبادل المهارات لبناء مستقبل أفضل وتحقيق النمو معًا.</p>

            <!-- Search/Filter Container (Added) -->
            <div class="search-container" data-aos="fade-up" data-aos-delay="300">
                <!-- Tabs -->
                <div class="tabs">
                    <button class="tab-button active">ابحث عن موهبة</button>
                    <button class="tab-button">تصفح الوظائف</button>
                </div>

                <!-- Search Bar & Filters -->
                <div class="search-bar">
                    <div class="search-input">
                        <input type="text" placeholder="ابحث عن مهارة (مثال: مدرس لغة إنجليزية)">
                        <button class="search-button">بحث<i class="bi bi-search"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Learning, teaching, and connecting Section -->
    <section id="learning" class="learning section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>تبادل المهارات لبناء مستقبل مشترك</h3>
                    <p class="fst-italic">
                        منصة "مهارات هَب" تتيح لك مشاركة مهاراتك وتعلم مهارات جديدة من الآخرين بسهولة وفعالية.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>شارك مهاراتك مع أشخاص يحتاجون إليها ويقدّرونها.</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>استفد من خبرات الآخرين في مختلف المجالات.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>ابنِ شبكة تواصل مهنية تعتمد على التبادل والتعاون
                                المستدام.</span></li>
                    </ul>
                    <a href="#" class="read-more"><span>اكتشف المزيد</span><i class="bi bi-arrow-left"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>

                <div id="about-content" class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>تعلم. علَم. <span style="color: #0000ff">تواصل.</span></h3>
                    <p class="fst-italic" style="font-style: normal !important">
                        انضم الى قائمة انتظار مهارات هب - منصة لتبادل المهارات و التعلم من الاخرين و تعليم ما تحب. احصل على
                        مهارات متنوعة مجانا.
                        . وتواصل مع اشخاص يشاركونك اهتمامتك

                    </p>

                    <div class="container-a-about">
                        <a href="#" class="read-more">انضم لقائمة الانتظار</a>
                        <a href="#" class="read-more">اكتشف المزيد</a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-box">
                        <h3>Why Choose Our Products?</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                            optio ad corporis.
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn"><span>Learn More</span> <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-xl-4">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                    aliquip</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-gem"></i>
                                <h4>Ullamco laboris ladore pan</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-inboxes"></i>
                                <h4>Labore consequatur incidid dolore</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Why Us Section -->

    <!-- FAQs Section -->
    <section id="faq" class="faq section">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-right">
                <h2>الأسئلة الشائعة</h2>
                <p>إجابات على الأسئلة الأكثر شيوعًا حول منصة مهارات هَب</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <div class="accordion" id="faqAccordion">

                        <!-- FAQ Item 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    ما هي منصة مهارات هَب؟
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    منصة مهارات هَب هي مجتمع تعليمي تفاعلي يهدف إلى تمكين الأفراد من تبادل المهارات والخبرات
                                    بين المدربين والمتعلمين. نقدم مساحة آمنة وفعالة لتبادل المعرفة ونشر المهارات المختلفة.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    كيف يمكنني الانضمام إلى المنصة؟
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    يمكنك الانضمام إما كمدرب أو متعلم عن طريق إنشاء حساب جديد على المنصة. بعد التسجيل، يمكنك
                                    تحديد المهارات التي ترغب في تعلمها أو تلك التي يمكنك تدريسها للآخرين.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    هل هناك رسوم للاشتراك في المنصة؟
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    المنصة توفر خيارات مجانية ومدفوعة. يمكنك البدء مجانًا والوصول إلى العديد من المهارات
                                    الأساسية، بينما تتيح العضوية المدفوعة الوصول إلى دورات متخصصة ومدربين خبراء.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    كيف يتم ضمان جودة المدربين؟
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    نتبع نظام تقييم متعدد المستويات يشمل التحقق من المؤهلات، تقييمات المتعلمين، وعينات من
                                    المحتوى التعليمي. كما نتيح نظام تقييم للمتعلمين لمشاركة تجاربهم مع كل مدرب.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    هل يمكنني كسب المال من خلال مشاركة مهاراتي؟
                                </button>
                            </h3>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    نعم، يمكنك تحديد أسعار للدورات أو الجلسات التي تقدمها. توفر المنصة نظام آمن للدفع
                                    ومراجعة الأداء لضمان تجربة عادلة للجميع.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq6">
                                    ما هي وسائل الدعم المتاحة إذا واجهت مشكلة؟
                                </button>
                            </h3>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    نوفر عدة قنوات للدعم بما في ذلك مركز المساعدة، الدردشة المباشرة، البريد الإلكتروني،
                                    بالإضافة إلى فريق دعم متخصص جاهز لمساعدتك في أي وقت.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- /FAQs Section -->

@endsection
