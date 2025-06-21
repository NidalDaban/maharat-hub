<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حسابي - مهارات هاب</title>

    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 56px;
            background-color: #f8f9fa;
        }

        .sidebar {
            min-height: calc(100vh - 56px);
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }

        .nav-link {
            color: #495057;
            border-radius: 0.25rem;
            margin-bottom: 0.25rem;
        }

        .nav-link.active {
            color: #0d6efd;
            background-color: #e7f1ff;
        }

        .nav-link:hover {
            color: #0d6efd;
        }

        .select2 {
            width: 100% !important;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        .edit-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('theme.index') }}">مهارات هاب</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light">تسجيل الخروج</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#profile-info" data-bs-toggle="tab">
                                <i class="fas fa-user me-2"></i>حسابي
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#edit-profile" data-bs-toggle="tab">
                                <i class="fas fa-edit me-2"></i>تعديل الملف
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="tab-content">
                    <!-- Profile Info Tab -->
                    <div class="tab-pane fade show active" id="profile-info">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">حسابي</h1>
                        </div>

                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="{{ $user->image_path ? asset('storage/' . $user->image_path) : asset('images/default-profile.png') }}"
                                    class="img-thumbnail rounded-circle profile-img mb-3" alt="Profile Image">
                                <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                                <p class="text-muted">{{ $user->email }}</p>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">معلوماتي</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>الهاتف:</strong> {{ $user->phone ?? 'غير محدد' }}</p>
                                                <p><strong>تاريخ الميلاد:</strong>
                                                    {{ $user->date_of_birth ? $user->date_of_birth->format('Y-m-d') : 'غير محدد' }}
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>الجنس:</strong>
                                                    {{ $user->gender == 'male' ? 'ذكر' : 'أنثى' }}</p>
                                                <p><strong>البلد:</strong> {{ $user->country->name ?? 'غير محدد' }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="card-title">نبذة عني</h5>
                                        <p>{{ $user->about_me ?? 'لا يوجد وصف' }}</p>
                                        <hr>
                                        <h5 class="card-title">مهاراتي</h5>
                                        <div class="d-flex flex-wrap">
                                            @forelse($user->skills as $skill)
                                                <span class="badge bg-primary me-2 mb-2">{{ $skill->name }}</span>
                                            @empty
                                                <p>لا توجد مهارات محددة</p>
                                            @endforelse
                                        </div>
                                        <hr>
                                        <h5 class="card-title">اللغات</h5>
                                        <p>{{ $user->language->name ?? 'غير محدد' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Profile Tab -->
                    <div class="tab-pane fade" id="edit-profile">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">تعديل الملف الشخصي</h1>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">صورة الملف الشخصي</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @if ($user->image_path)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $user->image_path) }}"
                                                    class="img-thumbnail edit-img" alt="Current Profile Image">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="first_name" class="form-label">الاسم الأول</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                value="{{ old('first_name', $user->first_name) }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="last_name" class="form-label">الاسم الأخير</label>
                                            <input type="text" class="form-control" id="last_name"
                                                name="last_name" value="{{ old('last_name', $user->last_name) }}"
                                                required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">البريد الإلكتروني</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email', $user->email) }}" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">رقم الهاتف</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                value="{{ old('phone', $user->phone) }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="date_of_birth" class="form-label">تاريخ الميلاد</label>
                                            <input type="date" class="form-control" id="date_of_birth"
                                                name="date_of_birth"
                                                value="{{ old('date_of_birth', $user->date_of_birth) }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="gender" class="form-label">الجنس</label>
                                            <select class="form-select" id="gender" name="gender">
                                                <option value="">اختر...</option>
                                                <option value="male"
                                                    {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>ذكر
                                                </option>
                                                <option value="female"
                                                    {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>
                                                    أنثى
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="country_id" class="form-label">البلد</label>
                                            <select class="form-select" id="country_id" name="country_id">
                                                <option value="">اختر البلد...</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}"
                                                        {{ old('country_id', $user->country_id) == $country->id ? 'selected' : '' }}>
                                                        {{ $country->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="language_id" class="form-label">اللغة</label>
                                        <select class="form-select" id="language_id" name="language_id">
                                            <option value="">اختر اللغة...</option>
                                            @foreach ($languages as $language)
                                                <option value="{{ $language->id }}"
                                                    {{ old('language_id', $user->language_id) == $language->id ? 'selected' : '' }}>
                                                    {{ $language->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="skills" class="form-label">المهارات</label>
                                        <select class="form-select select2" id="skills" name="skills[]" multiple>
                                            @foreach ($skills as $skill)
                                                <option value="{{ $skill->id }}"
                                                    {{ in_array($skill->id, $user->skills->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                    {{ $skill->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="about_me" class="form-label">نبذة عني</label>
                                        <textarea class="form-control" id="about_me" name="about_me" rows="3">{{ old('about_me', $user->about_me) }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "اختر المهارات",
                allowClear: true,
                language: {
                    noResults: function() {
                        return "لا توجد نتائج";
                    }
                }
            });
        });
    </script>
</body>

</html>
