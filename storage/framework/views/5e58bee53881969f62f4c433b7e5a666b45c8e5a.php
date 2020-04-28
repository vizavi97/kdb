<!-- Breadcrumb starts -->
<section class="breadcrumb-custom container-fluid">
    <div class="desctop container">
        <h1 class="heading-1"><?php echo $__env->yieldContent('page-title'); ?></h1>
        <div>
            <a class="small-paragraph" href="<?php echo e(route('home', app()->getLocale())); ?>">
                <?php echo app('translator')->get('layouts/breadcrumb.home'); ?>
            </a> /
            <?php echo $__env->yieldContent('breadcrumb'); ?>
        </div>
    </div>
</section>
<!-- Breadcrumb ends -->
<?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/layouts/breadcrumb.blade.php ENDPATH**/ ?>