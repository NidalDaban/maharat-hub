<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>{{ $title ?? 'Page Title' }}</h1>
                    <p class="mb-0">{{ $description ?? 'This is the ' . $title . ' page' }}</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('theme.index') }}">الصفحة الرئيسية</a></li>
                <li class="current">{{ $current ?? $title ?? 'Current Page' }}</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

{{-- Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                        voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi
                        ratione sint. Sit quaerat ipsum dolorem. --}}