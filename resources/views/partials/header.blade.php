<header class="navbar-light navbar-sticky header-static">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid px-3 px-xl-5">

            <!-- Logo START -->
            <a class="navbar-brand" href="index.html">
                <img class="light-mode-item navbar-brand-item"
                     src="{{ Vite::asset('resources/assets/images/logo.svg') }}"
                     alt="logo">

                <img class="dark-mode-item navbar-brand-item"
                     src="{{ Vite::asset('resources/assets/images/logo-light.svg') }}"
                     alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active fs-6 fw-bold" href="#" aria-haspopup="true">
                            خانه
                        </a>
                    </li>

                    <!-- Courses megamenu -->
                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle fs-6"
                           href="#"
                           data-bs-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            دوره های آموزشی
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                            <div class="row p-4 g-4">

                                <!-- Column -->
                                <div class="col-xl-6 col-xxl-3">
                                    <h6 class="mb-0">شروع کن</h6>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#">اینستاگرام مارکتینگ</a></li>
                                        <li><a class="dropdown-item" href="#">تیبلغ نویسی</a></li>
                                        <li><a class="dropdown-item" href="#">سرچ کنسول</a></li>
                                        <li><a class="dropdown-item" href="#">جذب ترافیک موثر</a></li>
                                        <li><a class="dropdown-item" href="#">افزایش فروش</a></li>
                                        <li><a class="dropdown-item" href="#">ویدیو مارکتینگ</a></li>
                                        <li><a class="dropdown-item" href="#">استراتژی تولید محتوا</a></li>
                                        <li><a class="dropdown-item" href="#">آموزش GTmetrix</a></li>
                                        <li><a class="dropdown-item" href="#">آموزش Alex</a></li>
                                        <li><a class="dropdown-item" href="#">سئو و بهینه سازی</a></li>
                                        <li><a class="dropdown-item" href="#">اصول قرارداد نویسی</a></li>
                                    </ul>
                                </div>

                                <!-- Column -->
                                <div class="col-xl-6 col-xxl-3">
                                    <h6 class="mb-0">میزان رتبه</h6>
                                    <hr>

                                    <div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="#">تماس با مدیریت</a>
                                        <p class="mb-0 small text-truncate-2">
                                            با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </p>
                                    </div>

                                    <div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="#">مسیر فروش</a>
                                        <p class="mb-0 small text-truncate-2">
                                            با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </p>
                                    </div>

                                    <div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="#">امنیت و مجوز</a>
                                        <p class="mb-0 small text-truncate-2">
                                            با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </p>
                                    </div>
                                </div>

                                <!-- Column -->
                                <div class="col-xl-6 col-xxl-3">
                                    <h6 class="mb-0">مدرک</h6>
                                    <hr>
                                    <!-- Items unchanged (icons only) -->
                                </div>

                                <!-- Column -->
                                <div class="col-xl-6 col-xxl-3">
                                    <h6 class="mb-0">دانلود نرم افزار کاربردی</h6>
                                    <hr>

                                    <img
                                        src="{{ Vite::asset('resources/assets/images/element/14.svg') }}"
                                        alt="element">

                                    <div class="row g-2 justify-content-center mt-3">
                                        <div class="col-6 col-sm-4 col-xxl-6">
                                            <a href="#">
                                                <img
                                                    src="{{ Vite::asset('resources/assets/images/client/google-play.svg') }}"
                                                    class="btn-transition"
                                                    alt="google-store">
                                            </a>
                                        </div>

                                        <div class="col-6 col-sm-4 col-xxl-6">
                                            <a href="#">
                                                <img
                                                    src="{{ Vite::asset('resources/assets/images/client/app-store.svg') }}"
                                                    class="btn-transition"
                                                    alt="app-store">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action box -->
                                <div class="col-12">
                                    <div class="alert alert-success alert-dismissible fade show mt-2 mb-0 rounded-3" role="alert">
                                        <div class="avatar avatar-xs me-2">
                                            <img class="avatar-img rounded-circle"
                                                 src="{{ Vite::asset('resources/assets/images/avatar/09.jpg') }}"
                                                 alt="avatar">
                                        </div>
                                        کلاس رشد شخصیت از دقیقه 14 شروع می شود،
                                        همین حالا <a href="#" class="alert-link">ثبت نام</a> کنید
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-6" href="#">وبلاگ</a>
                    </li>
                </ul>
                <!-- Nav Main menu END -->

                <!-- Nav Search START -->
                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search"
                                   placeholder="جستجو..." aria-label="Search">
                            <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                <i class="fas fa-search fs-6"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Nav Search END -->
            </div>
            <!-- Main navbar END -->

            <!-- Profile START -->
            <div class="dropdown ms-1 ms-lg-0">
                <a class="avatar avatar-sm p-0" href="#" data-bs-toggle="dropdown">
                    <img class="avatar-img rounded-circle"
                         src="{{ Vite::asset('resources/assets/images/avatar/01.jpg') }}"
                         alt="avatar">
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow pt-3">
                    <li class="px-3 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar me-3">
                                <img class="avatar-img rounded-circle shadow"
                                     src="{{ Vite::asset('resources/assets/images/avatar/01.jpg') }}"
                                     alt="avatar">
                            </div>
                            <div>
                                <a class="h6" href="#">الهام حسینی</a>
                                <p class="small m-0">example@gmail.com</p>
                            </div>
                        </div>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>داشبورد</a></li>
                    <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>خروج</a></li>
                </ul>
            </div>
            <!-- Profile END -->

        </div>
    </nav>
    <!-- Nav END -->
</header>
