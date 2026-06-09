
<?php $__env->startSection('main'); ?>
 <?php echo $__env->make('frontend.home_all.home_slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- banner-area -->
    <section class="banner">
    <div class="container custom-container">
    <div class="row align-items-center justify-content-center justify-content-lg-between">
    <div class="col-lg-6 order-0 order-lg-2">
    <div class="banner__img text-center text-xxl-end">
    <img src="<?php echo e(asset('frontend/assets/img/banner/banner_img.png')); ?>" alt="">
    </div>
    </div>
    <div class="col-xl-5 col-lg-6">
    <div class="banner__content">
    <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>I will give you Best</span> <br> Product in the shortest time.</h2>
    <p class="wow fadeInUp" data-wow-delay=".4s">I'm a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences</p>
    <a href="about.html" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">more about me</a>
    </div>
    </div>
    </div>
    </div>
    <div class="scroll__down">
    <a href="#aboutSection" class="scroll__link">Scroll down</a>
    </div>
    <div class="banner__video">
    <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-video"><i class="fas fa-play"></i></a>

    </section>
    <!-- banner-area-end -->

    <!-- about-area -->
    <?php echo $__env->make('frontend.home_all.home_about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services">
    <div class="container">
    <div class="services__title__wrap">
    <div class="row align-items-center justify-content-between">
    <div class="col-xl-5 col-lg-6 col-md-8">
    <div class="section__title">
    <span class="sub-title">02 - my Services</span>
    <h2 class="title">Creates amazing digital experiences</h2>
    </div>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-4">
    <div class="services__arrow"></div>
    </div>
    </div>
    </div>
    <div class="row gx-0 services__active">
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="assets/img/images/services_img01.jpg" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/services_light_icon01.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/services_icon01.png')); ?>" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
    <ul class="services__list">
    <li>Research & Data</li>
    <li>Branding & Positioning</li>
    <li>Business Consulting</li>
    <li>Go To Market</li>
    </ul>
    <a href="services-details.html" class="btn border-btn">Read more</a>
    </div>
    </div>
    </div>
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="assets/img/images/services_img02.jpg" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/services_light_icon02.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/services_icon02.png')); ?>" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Brand Strategy</a></h3>
    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
    <ul class="services__list">
    <li>User Research & Testing</li>
    <li>UX Design</li>
    <li>Visual Design</li>
    <li>Information Architecture</li>
    </ul>
    <a href="services-details.html" class="btn border-btn">Read more</a>
    </div>
    </div>
    </div>
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="<?php echo e(asset('frontend/assets/img/images/services_img03.jpg')); ?>" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/services_light_icon03.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/services_icon03.png')); ?>" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Product Design</a></h3>
    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
    <ul class="services__list">
    <li>User Research & Testing</li>
    <li>UX Design</li>
    <li>Visual Design</li>
    <li>Information Architecture</li>
    </ul>
    <a href="services-details.html" class="btn border-btn">Read more</a>
    </div>
    </div>
    </div>
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="<?php echo e(asset('frontend/assets/img/images/services_img04.jpg')); ?>" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/services_light_icon04.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/services_icon04.png')); ?>" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
    <ul class="services__list">
    <li>User Research & Testing</li>
    <li>UX Design</li>
    <li>Visual Design</li>
    <li>Information Architecture</li>
    </ul>
    <a href="services-details.html" class="btn border-btn">Read more</a>
    </div>
    </div>
    </div>
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="<?php echo e(asset('frontend/assets/img/images/services_img03.jpg')); ?>" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/services_light_icon02.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/services_icon02.png')); ?>" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Web Development</a></h3>
    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
    <ul class="services__list">
    <li>User Research & Testing</li>
    <li>UX Design</li>
    <li>Visual Design</li>
    <li>Information Architecture</li>
    </ul>
    <a href="services-details.html" class="btn border-btn">Read more</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- services-area-end -->

    <!-- work-process-area -->
    <section class="work__process">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-8">
    <div class="section__title text-center">
    <span class="sub-title">03 - Working Process</span>
    <h2 class="title">A clear product design process is the basis of success</h2>
    </div>
    </div>
    </div>
    <div class="row work__process__wrap">
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 01</span>
    <div class="work__process__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/wp_light_icon01.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/wp_icon01.png')); ?>" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Discover</h4>
    <p>Initial ideas or inspiration & Establishment of user needs.</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 02</span>
    <div class="work__process__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/wp_light_icon02.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/wp_icon02.png')); ?>" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Define</h4>
    <p>Interpretation & Alignment of findings to project objectives.</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 03</span>
    <div class="work__process__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/wp_light_icon03.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/wp_icon03.png')); ?>" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Develop</h4>
    <p>Design-Led concept and Proposals hearted & assessed</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 04</span>
    <div class="work__process__icon">
    <img class="light" src="<?php echo e(asset('frontend/assets/img/icons/wp_light_icon04.png')); ?>" alt="">
    <img class="dark" src="<?php echo e(asset('frontend/assets/img/icons/wp_icon04.png')); ?>" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Deliver</h4>
    <p>Process outcomes finalised & Implemented</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- work-process-area-end -->

    <!-- portfolio-area -->
    <section class="portfolio">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-8">
    <div class="section__title text-center">
    <span class="sub-title">04 - Portfolio</span>
    <h2 class="title">All creative work</h2>
    </div>
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12">
    <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
    <li class="nav-item" role="presentation">
    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
    role="tab" aria-controls="all" aria-selected="true">All</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website" type="button"
    role="tab" aria-controls="website" aria-selected="false">website</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="apps-tab" data-bs-toggle="tab" data-bs-target="#apps" type="button" role="tab" aria-controls="apps" aria-selected="false">mobile apps</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button"
    role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="landing-tab" data-bs-toggle="tab" data-bs-target="#landing" type="button"
    role="tab" aria-controls="landing" aria-selected="false">landing page</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding" type="button"
    role="tab" aria-controls="branding" aria-selected="false">Branding</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="graphic-tab" data-bs-toggle="tab" data-bs-target="#graphic" type="button"
    role="tab" aria-controls="graphic" aria-selected="false">Graphic Design</button>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="tab-content" id="portfolioTabContent">
    <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
    <div class="container">
    <div class="row gx-0 justify-content-center">
    <div class="col">
    <div class="portfolio__active">
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img01.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Apps Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img02.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img03.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>UX/UI Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img04.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img05.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img06.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img07.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
    <div class="container">
    <div class="row gx-0 justify-content-center">
    <div class="col">
    <div class="portfolio__active">
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src=" <?php echo e(asset('frontend/assets/img/portfolio/portfolio_img07.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Nature of Business Strategy System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img01.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Apps Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img02.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img03.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>UX/UI Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img04.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img05.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane" id="apps" role="tabpanel" aria-labelledby="apps-tab">
    <div class="container">
    <div class="row gx-0 justify-content-center">
    <div class="col">
    <div class="portfolio__active">
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img06.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Product Design and Development</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img01.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Apps Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img02.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img03.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>UX/UI Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img04.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img05.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img07.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="container">
    <div class="row gx-0 justify-content-center">
    <div class="col">
    <div class="portfolio__active">
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img05.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Brand strategy System Management</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img01.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Apps Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img02.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img03.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>UX/UI Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img04.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img06.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img07.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane" id="landing" role="tabpanel" aria-labelledby="landing-tab">
    <div class="container">
    <div class="row gx-0 justify-content-center">
    <div class="col">
    <div class="portfolio__active">
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img04.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Visual Design System Management</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img01.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Apps Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img02.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img03.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>UX/UI Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img05.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img06.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img07.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane" id="branding" role="tabpanel" aria-labelledby="branding-tab">
    <div class="container">
    <div class="row gx-0 justify-content-center">
    <div class="col">
    <div class="portfolio__active">
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img03.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>UX/UI Design</span>
        <h4 class="title"><a href="portfolio-details.html">Animation Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img01.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Apps Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img02.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img04.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img05.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img06.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img07.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
    <div class="container">
    <div class="row gx-0 justify-content-center">
    <div class="col">
    <div class="portfolio__active">
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img02.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Design</span>
        <h4 class="title"><a href="portfolio-details.html">Graphic Design Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img01.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Apps Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img03.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>UX/UI Design</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img04.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img05.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img06.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="<?php echo e(asset('frontend/assets/img/portfolio/portfolio_img07.jpg')); ?>" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>Web Development</span>
        <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
        <a href="portfolio-details.html" class="link">Case Study</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- portfolio-area-end -->

    <!-- partner-area -->
<!-- ========================================== -->
<!-- AWAL AREA PARTNER (PARTNER SECTION START)  -->
<!-- ========================================== -->
<section class="partner" id="partners-section">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- ------------------------------------------------------------------ -->
            <!-- SISI KIRI: Menampilkan Logo Partner Aktif Berupa Lingkaran Acak    -->
            <!-- (Menggunakan struktur class bawaan asli dari template Rasalina)    -->
            <!-- ------------------------------------------------------------------ -->
            <div class="col-lg-6">
                <ul class="partner__logo__wrap">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $activePartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li>
                            <!-- Link aktif jika dosen memilih untuk mengklik gambarnya saja -->
                            <a href="<?php echo e($partner->website); ?>" target="_blank" title="<?php echo e($partner->name); ?>">
                                <?php if($partner->logo && file_exists(storage_path('app/public/' . $partner->logo))): ?>
                                    <img src="<?php echo e(asset('storage/' . $partner->logo)); ?>" alt="<?php echo e($partner->name); ?>" 
                                         style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('upload/no_image.jpg')); ?>" alt="<?php echo e($partner->name); ?>"
                                         style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li class="text-center text-muted py-5" style="list-style: none;">
                            <p>No partners available</p>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>

            <!-- ------------------------------------------------------------------ -->
            <!-- SISI KANAN: Menampilkan Judul Utama dan List Teks Biasa            -->
            <!-- (Tempat menampilkan Nama Partner dan Deskripsi Kerja Sama)        -->
            <!-- ------------------------------------------------------------------ -->
            <div class="col-lg-6">
                <div class="partner__content" style="padding-left: 20px;">
                    
                    <!-- Bagian Judul Section -->
                    <div class="section__title mb-4">
                        <span class="sub-title">05 - partners</span>
                        <h2 class="title" style="font-size: 36px; font-weight: 700; line-height: 1.3; color: #1f1f1f;">Ini partner partner saya</h2>
                    </div>
                    
                    <!-- Mulai List Teks Sederhana ke Bawah -->
                    <ul class="partner__text__list" style="list-style: none; padding: 0; margin-top: 25px;">
                        
                        <?php $__currentLoopData = $activePartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="mb-3" style="border-bottom: 1px dashed #eee; padding-bottom: 12px;">
                                
                                <!-- 1. Baris Nama Partner (Teks Murni, TIDAK BISA DIKLIK) -->
                                <div class="d-flex align-items-center mb-1">
                                    <span style="color: #ff9800; margin-right: 10px; font-size: 14px;">✦</span>
                                    <!-- Tag <a> di sini sudah dihapus total dan diganti tag <span> agar tidak memicu pointer klik -->
                                    <span class="font-weight-bold" style="color: #1f1f1f; font-size: 18px;">
                                        <?php echo e($partner->name); ?>

                                    </span>
                                </div>
                                
                                <!-- 2. Baris Deskripsi Pendek di Bawah Nama Partner -->
                                <p class="text-muted mb-0" style="font-size: 14px; padding-left: 20px; line-height: 1.4;">
                                    <?php echo e($partner->description ?? 'Mitra kerja sama resmi.'); ?>

                                </p>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- ========================================== -->
<!-- AKHIR AREA PARTNER (PARTNER SECTION END)   -->
<!-- ========================================== -->
<!-- partner-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial">
    <div class="container">
    <div class="row align-items-center justify-content-between">
    <div class="col-lg-6 order-0 order-lg-2">
    <ul class="testimonial__avatar__img">
    <li><img src="<?php echo e(asset('frontend/assets/img/images/testi_img01.png')); ?>" alt=""></li>
    <li><img src="<?php echo e(asset('frontend/assets/img/images/testi_img02.png')); ?>" alt=""></li>
    <li><img src="<?php echo e(asset('frontend/assets/img/images/testi_img03.png')); ?>" alt=""></li>
    <li><img src="<?php echo e(asset('frontend/assets/img/images/testi_img04.png')); ?>" alt=""></li>
    <li><img src="<?php echo e(asset('frontend/assets/img/images/testi_img05.png')); ?>" alt=""></li>
    <li><img src="<?php echo e(asset('frontend/assets/img/images/testi_img06.png')); ?>" alt="">
    <li><img src="assets/img/images/testi_img07.png" alt=""></li>
    </ul>
    </div>
    <div class="col-xl-5 col-lg-6">
    <div class="testimonial__wrap">
    <div class="section__title">
    <span class="sub-title">06 - Client Feedback</span>
    <h2 class="title">Happy clients feedback</h2>
    </div>
    <div class="testimonial__active">
    <div class="testimonial__item">
    <div class="testimonial__icon">
    <i class="fas fa-quote-left"></i>
    </div>
    <div class="testimonial__content">
    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
    <div class="testimonial__avatar">
        <span>Rasalina De Wiliamson</span>
    </div>
    </div>
    </div>
    <div class="testimonial__item">
    <div class="testimonial__icon">
    <i class="fas fa-quote-left"></i>
    </div>
    <div class="testimonial__content">
    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
    <div class="testimonial__avatar">
        <span>Rasalina De Wiliamson</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- blog-area -->
         <?php echo $__env->make('frontend.home_all.home_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- blog-area-end -->

            <!-- contact-area -->
            <section class="homeContact">
                <div class="container">
                    <div class="homeContact__wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section__title">
                                    <span class="sub-title">07 - Say hello</span>
                                    <h2 class="title">Any questions? Feel free <br> to contact</h2>
                                </div>
                                <div class="homeContact__content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                    <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="homeContact__form">
                                    <form action="#">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter mail*">
                                        <input type="number" placeholder="Enter number*">
                                        <textarea name="message" placeholder="Enter Massage*"></textarea>
                                        <button type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Start Backup\basic\resources\views/frontend/index.blade.php ENDPATH**/ ?>