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
                                        <label class="form-check-label" for="badge1">الأعلى تقييماً بلس</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="badge2">
                                        <label class="form-check-label" for="badge2">الأعلى تقييماً</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="badge3">
                                        <label class="form-check-label" for="badge3">موهبة صاعدة</label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion" id="userFilterAccordion">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingGender">
                                    <button class="accordion-button collapsed bg-white shadow-none px-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseGender" aria-expanded="false"
                                        aria-controls="collapseGender">
                                        الجنس
                                    </button>
                                </h2>
                                <div id="collapseGender" class="accordion-collapse collapse" aria-labelledby="headingGender"
                                    data-bs-parent="#userFilterAccordion">
                                    <div class="accordion-body px-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gender_male" name="gender[]"
                                                value="male">
                                            <label class="form-check-label" for="gender_male">ذكر</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gender_female"
                                                name="gender[]" value="female">
                                            <label class="form-check-label" for="gender_female">انثى</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion" id="userFilterAccordion">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingCountry">
                                    <button class="accordion-button collapsed bg-white shadow-none px-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseCountry" aria-expanded="false"
                                        aria-controls="collapseCountry">
                                        الدولة
                                    </button>
                                </h2>
                                <div id="collapseCountry" class="accordion-collapse collapse"
                                    aria-labelledby="headingCountry" data-bs-parent="#userFilterAccordion">
                                    <div class="accordion-body px-0">
                                        @foreach ($countries as $country)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="country_{{ $country->id }}" name="countries[]"
                                                    value="{{ $country->id }}">
                                                <label class="form-check-label" for="country_{{ $country->id }}">
                                                    {{ $country->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion" id="userFilterAccordion">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingClassification">
                                    <button class="accordion-button collapsed bg-white shadow-none px-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseClassification"
                                        aria-expanded="false" aria-controls="collapseClassification">
                                        الفئات
                                    </button>
                                </h2>
                                <div id="collapseClassification" class="accordion-collapse collapse"
                                    aria-labelledby="headingClassification" data-bs-parent="#userFilterAccordion">
                                    <div class="accordion-body px-0">
                                        @foreach ($classifications as $classification)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="classification_{{ $classification->id }}" name="classifications[]"
                                                    value="{{ $classification->id }}">
                                                <label class="form-check-label"
                                                    for="classification_{{ $classification->id }}">{{ $classification->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
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

                        @foreach ($users as $user)
                            <div class="talent-card">
                                <div class="talent-header">
                                    <img src="{{ $user->getImageUrlAttribute() }}" alt="Talent" class="talent-avatar">
                                    <div class="talent-info">
                                        <h4>{{ $user->fullName() }}</h4>
                                        <p>
                                            @foreach ($user->languages as $language)
                                                {{ $language->name . ' ' . $language->pivot->level . ' | ' }}
                                            @endforeach
                                        </p>
                                        <span class="talent-location">{{ $user->country->name }}</span>
                                    </div>
                                </div>
                                <div class="talent-stats">
                                    <span><i class="bi bi-star-fill"></i> 4.9 (128 تقييم)</span>
                                    <span><i class="bi bi-check-circle-fill"></i> 95% معدل استجابة</span>
                                </div>
                                <div class="talent-description">
                                    <p>{{ $user->about_me }}</p>
                                </div>
                                <div class="talent-skills">

                                    @foreach ($user->skills as $skill)
                                        <span class="skill-tag">{{ $skill->name }}</span>
                                    @endforeach
                                </div>
                                <div class="talent-actions">
                                    <button class="btn btn-primary">عرض الملف الشخصي</button>
                                    <button class="btn btn-outline-primary">دعوة</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
