@extends('theme.master')
@section('trainers-active', 'active')

@section('content')
    <div class="skills-page rtl" dir="rtl">

        @include('theme.partials.heroSection', [
            'title' => 'مهارات',
            'description' => 'منصة لتبادل المهارات بين الاشخاص',
            'current' => 'مهارات',
        ])

        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar Column -->
                <div class="col-lg-3 col-md-4 sidebar">
                    <div class="sidebar-card filters-card">
                        <h3 class="sidebar-title">الفلاتر</h3>
                        <div class="filter-section">
                            <h4 class="filter-subtitle">شارة المواهب</h4>
                            <ul class="filter-list">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="badge1">
                                        <label class="form-check-label" for="badge1">Top Raised Plus</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="badge2">
                                        <label class="form-check-label" for="badge2">Top Raised</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="badge3">
                                        <label class="form-check-label" for="badge3">Rising Talent</label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-section">
                            <h4 class="filter-subtitle">المهارات</h4>
                            <ul class="filter-list">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill1">
                                        <label class="form-check-label" for="skill1">الترجمة</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill2">
                                        <label class="form-check-label" for="skill2">التدقيق اللغوي</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill3">
                                        <label class="form-check-label" for="skill3">الإنجليزية</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill4">
                                        <label class="form-check-label" for="skill4">كتابة المحتوى</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill5">
                                        <label class="form-check-label" for="skill5">إدخال البيانات</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill6">
                                        <label class="form-check-label" for="skill6">الكتابة</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Main Content Column -->
                <div class="col-lg-9 col-md-8 main-content">
                    <div class="search-container">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="ابحث عن المهارات أو المواهب...">
                            <button class="btn btn-search" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="content-header">
                        <div class="sort-options">
                            <span>ترتيب حسب:</span>
                            <select class="form-select">
                                <option>الأكثر صلة</option>
                                <option>الأحدث</option>
                                <option>الأعلى تقييمًا</option>
                            </select>
                        </div>
                    </div>


                    <div class="talent-grid">
                        <!-- Talent Card 1 -->
                        <div class="talent-card">
                            <div class="talent-header">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Talent"
                                    class="talent-avatar">
                                <div class="talent-info">
                                    <h4>نورا أحمد</h4>
                                    <p>مترجمة محترفة | الإنجليزية إلى العربية</p>
                                    <span class="talent-location">مصر</span>
                                </div>
                            </div>
                            <div class="talent-stats">
                                <span><i class="bi bi-star-fill"></i> 4.9 (128 تقييم)</span>
                                <span><i class="bi bi-check-circle-fill"></i> 95% معدل استجابة</span>
                            </div>
                            <div class="talent-description">
                                <p>مترجمة محترفة مع أكثر من 8 سنوات خبرة في الترجمة القانونية والطبية. حاصلة على شهادة
                                    الترجمة من جامعة القاهرة...</p>
                            </div>
                            <div class="talent-skills">
                                <span class="skill-tag">الترجمة</span>
                                <span class="skill-tag">الإنجليزية</span>
                                <span class="skill-tag">العربية</span>
                            </div>
                            <div class="talent-actions">
                                <button class="btn btn-primary">عرض الملف الشخصي</button>
                                <button class="btn btn-outline-primary">دعوة</button>
                            </div>
                        </div>

                        <!-- Talent Card 2 -->
                        <div class="talent-card">
                            <div class="talent-header">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Talent"
                                    class="talent-avatar">
                                <div class="talent-info">
                                    <h4>محمد علي</h4>
                                    <p>مدقق لغوي محترف | العربية والإنجليزية</p>
                                    <span class="talent-location">السعودية</span>
                                </div>
                            </div>
                            <div class="talent-stats">
                                <span><i class="bi bi-star-fill"></i> 4.8 (97 تقييم)</span>
                                <span><i class="bi bi-check-circle-fill"></i> 98% معدل استجابة</span>
                            </div>
                            <div class="talent-description">
                                <p>مدقق لغوي محترف مع خبرة تزيد عن 6 سنوات في التدقيق اللغوي للمحتوى الأكاديمي والتقني.
                                    متخصص في التدقيق اللغوي للكتب والأوراق البحثية...</p>
                            </div>
                            <div class="talent-skills">
                                <span class="skill-tag">التدقيق اللغوي</span>
                                <span class="skill-tag">كتابة المحتوى</span>
                                <span class="skill-tag">اللغة العربية</span>
                            </div>
                            <div class="talent-actions">
                                <button class="btn btn-primary">عرض الملف الشخصي</button>
                                <button class="btn btn-outline-primary">دعوة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
