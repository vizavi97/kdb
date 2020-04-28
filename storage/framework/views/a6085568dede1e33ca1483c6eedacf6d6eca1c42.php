

<?php $__env->startSection('page-title'); ?>

    <?php echo app('translator')->get('about-us/contact-us.contact-us'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

<span class="small-paragraph"><?php echo app('translator')->get('about-us/contact-us.contact-us-2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

<title><?php echo app('translator')->get('about-us/contact-us.kdb-contact'); ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/contact-us.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="desctop container contact-us">
    <div class="row">

        <main class="col-xl-9 main-hero mb-5">
            <div class="client-services">
                <h2 class="heading-2">
                    <?php echo app('translator')->get('about-us/contact-us.client-services'); ?>
                </h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active mr-0" id="corporates-tab" data-toggle="tab" href="#corporates"
                            role="tab" aria-controls="corporates" aria-selected="true">
                            <?php echo app('translator')->get('about-us/contact-us.corporates'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-0" id="individuals-tab" data-toggle="tab" href="#individuals" role="tab"
                            aria-controls="individuals" aria-selected="false">
                            <?php echo app('translator')->get('about-us/contact-us.individuals'); ?>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="corporates" role="tabpanel"
                        aria-labelledby="corporates-tab">
                        <div class="row parent no-gutters">
                            <div class="col-lg-3">
                                <img src="<?php echo e(Voyager::image( $corporates->image )); ?>">
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.full-name'); ?></h5>
                                <h6 class="heading-blue">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                                <h6 class="heading-blue">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                                <h6 class="heading-blue">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.phone-number'); ?></h5>
                                <a href="tel:<?php echo e($corporates->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="tel:<?php echo e($corporates->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="tel:<?php echo e($corporates->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.e-mail'); ?></h5>
                                <a href="mailto:<?php echo e($corporates->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="mailto:<?php echo e($corporates->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="mailto:<?php echo e($corporates->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="individuals" role="tabpanel" aria-labelledby="individuals-tab">
                        <div class="row parent no-gutters">
                            <div class="col-lg-3">
                                <img src="<?php echo e(Voyager::image( $individuals->image )); ?>">
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.full-name-2'); ?></h5>
                                <h6 class="heading-blue">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                                <h6 class="heading-blue">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                                <h6 class="heading-blue">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.phone-number-2'); ?></h5>
                                <a href="tel:<?php echo e($individuals->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="tel:<?php echo e($individuals->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="tel:<?php echo e($individuals->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.e-mail-2'); ?></h5>
                                <a href="mailto:<?php echo e($individuals->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="mailto:<?php echo e($individuals->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="mailto:<?php echo e($individuals->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    <?php echo app('translator')->get('about-us/contact-us.client-relationship'); ?>
                </h2>
                <div class="row parent no-gutters">
                    <div class="col-lg-3">
                        <img src="<?php echo e(Voyager::image( $crm->image )); ?>">
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.full-name-3'); ?></h5>
                        <h6 class="heading-blue">
                            <?php echo e($crm->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                        <h6 class="heading-blue">
                            <?php echo e($crm->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                        <h6 class="heading-blue">
                            <?php echo e($crm->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.phone-number-3'); ?></h5>
                        <a href="tel:<?php echo e($crm->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="tel:<?php echo e($crm->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="tel:<?php echo e($crm->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.e-mail-3'); ?></h5>
                        <a href="mailto:<?php echo e($crm->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="mailto:<?php echo e($crm->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="mailto:<?php echo e($crm->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    <?php echo app('translator')->get('about-us/contact-us.human-resources'); ?>
                </h2>
                <div class="row parent no-gutters">
                    <div class="col-lg-3">
                        <img src="<?php echo e(Voyager::image( $hr->image )); ?>">
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.full-name-4'); ?></h5>
                        <h6 class="heading-blue">
                            <?php echo e($hr->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                        <h6 class="heading-blue">
                            <?php echo e($hr->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                        <h6 class="heading-blue">
                            <?php echo e($hr->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.phone-number-4'); ?></h5>
                        <a href="tel:<?php echo e($hr->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="tel:<?php echo e($hr->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="tel:<?php echo e($hr->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name"><?php echo app('translator')->get('about-us/contact-us.e-mail-4'); ?></h5>
                        <a href="mailto:<?php echo e($hr->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="mailto:<?php echo e($hr->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="mailto:<?php echo e($hr->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    <?php echo app('translator')->get('about-us/contact-us.general-information'); ?>
                </h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($i == 1 ? 'active' : ''); ?> mr-0" id="<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>-tab" data-toggle="tab" href="#<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>"
                                role="tab" aria-controls="<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>" aria-selected="<?php echo e($i == 1 ? 'true' : 'false'); ?>">
                                <?php echo e($branch->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')); ?>

                            </a>
                        </li>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php echo e($i == 1 ? 'show active' : ''); ?>" id="<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>" role="tabpanel"
                            aria-labelledby="<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>-tab">
                            <div class="row parent no-gutters  general-information">
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="fas fa-phone"></i>
                                    <div class="information">
                                        <h5>
                                            <?php echo app('translator')->get('about-us/contact-us.phone-number-5'); ?>
                                        </h5>
                                        <a href="tel:+998711208000">
                                            <?php echo e($branch->phone); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="far fa-calendar-alt"></i>
                                    <div class="information">
                                        <h5>
                                            <?php echo app('translator')->get('about-us/contact-us.working-hours'); ?>
                                        </h5>
                                        <p>
                                            <?php echo $branch->getTranslatedAttribute('working_hours', app()->getLocale(), 'fallbackLocale'); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="information">
                                        <h5>
                                            <?php echo app('translator')->get('about-us/contact-us.address'); ?>
                                        </h5>
                                        <p>
                                            <?php echo e($branch->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale')); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-phone-volume"></i>
                                    <div class="information">
                                        <h5>
                                            <?php echo app('translator')->get('about-us/contact-us.hotline'); ?>
                                        </h5>
                                        <a href="tel:<?php echo e($branch->hotline); ?>">
                                            <?php echo e($branch->hotline); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-fax"></i>
                                    <div class="information">
                                        <h5>
                                            <?php echo app('translator')->get('about-us/contact-us.fax'); ?>
                                        </h5>
                                        <a href="tel:<?php echo e($branch->fax); ?>">
                                            <?php echo e($branch->fax); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-envelope"></i>
                                    <div class="information">
                                        <h5>
                                            <?php echo app('translator')->get('about-us/contact-us.mail-us'); ?>
                                        </h5>
                                        <a href="mailto:<?php echo e($branch->email); ?>">
                                            <?php echo e($branch->email); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </main>

        <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</section>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/about-us/contact-us.blade.php ENDPATH**/ ?>