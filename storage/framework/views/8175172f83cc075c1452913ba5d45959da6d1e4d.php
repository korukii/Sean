<?php

$aboutpage = App\Models\About::find(1);
$allMultiImage = App\Models\MultiImage::all();
?>

<section id="aboutSection" class="about">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <ul class="about__icons__wrap">
         <?php $__currentLoopData = $allMultiImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
 <img class="light" src="<?php echo e(asset($item->multi_image )); ?>" alt="XD"> 
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
    <div class="col-lg-6">
    <div class="about__content">
    <div class="section__title">
    <span class="sub-title">01 - About me</span>
    <h2 class="title"><?php echo e($aboutpage->title); ?></h2>
    </div>
    <div class="about__exp">
    <div class="about__exp__icon">
    <img src="<?php echo e(asset('frontend/assets/img/icons/about_icon.png')); ?> " alt="">
    </div>
    <div class="about__exp__content">
    <p><?php echo e($aboutpage->short_title); ?></p>
    </div>
    </div>
    <p class="desc"><?php echo e($aboutpage->short_description); ?></p>
    <a href="about.html" class="btn">Download my resume</a>
    </div>
    </div>
    </div>
    </div>
    </section><?php /**PATH C:\laragon\www\Start Backup\basic\resources\views/frontend/home_all/home_about.blade.php ENDPATH**/ ?>