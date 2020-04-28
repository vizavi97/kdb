<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('press-center/news.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('press-center/news.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('press-center/news.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/news.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container news mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true"><?php echo app('translator')->get('press-center/news.4'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="announcement-tab" data-toggle="tab" href="#announcement" role="tab" aria-controls="announcement" aria-selected="false"><?php echo app('translator')->get('press-center/news.5'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="false"><?php echo app('translator')->get('press-center/news.6'); ?></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
                        <div class="first-parent">
                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row box no-gutters">
                                    <div class="col-lg-8 order-lg-1 order-2 information">
                                        <a href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $new->slug); ?>">
                                            <h3 class="heading-3"><?php echo e($new->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h3>
                                        </a>
                                        <p><?php echo e($new->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                        <a href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $new->slug); ?>">
                                            <?php echo app('translator')->get('press-center/news.7'); ?>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 order-lg-2 order-1">
                                        <img src="<?php echo e(Voyager::image( $new->image )); ?>">
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="announcement" role="tabpanel" aria-labelledby="announcement-tab">
                       <div class="first-parent">
                            <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row box no-gutters">
                                    <div class="col-lg-8 order-lg-1 order-2 information">
                                        <a href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $announcement->slug); ?>">
                                            <h3 class="heading-3"><?php echo e($announcement->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h3>
                                        </a>
                                        <p><?php echo e($announcement->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                        <a href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $announcement->slug); ?>">
                                            <?php echo app('translator')->get('press-center/news.7'); ?>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 order-lg-2 order-1">
                                        <img src="<?php echo e(Voyager::image( $announcement->image )); ?>">
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                        <div class="first-parent">
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row box no-gutters">
                                    <div class="col-lg-8 order-lg-1 order-2 information">
                                        <a href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $event->slug); ?>">
                                            <h3 class="heading-3"><?php echo e($event->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h3>
                                        </a>
                                        <p><?php echo e($event->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                        <a href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $event->slug); ?>">
                                            <?php echo app('translator')->get('press-center/news.7'); ?>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 order-lg-2 order-1">
                                        <img src="<?php echo e(Voyager::image( $event->image )); ?>">
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/press-center/news.blade.php ENDPATH**/ ?>