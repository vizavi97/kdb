

<?php $__env->startSection('page-title'); ?>
    Search
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Search</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Search</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/search.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container search mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">

                
                <input type="search" value="<?php echo e($query); ?>" id="search-input-sec">
                <button id="search-button">To find</button>   
                

                <ul class="mt-4">
                    <?php if($results): ?>
                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e($result['url']); ?>"><?php echo $result['text']; ?></a>
                            <br/>
                            <span class="link"><?php echo e($result['url']); ?></span>
                        </li>
                        <hr />
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?> 
                        Nothing found
                    <?php endif; ?>
                </ul>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/interactive-services/search.blade.php ENDPATH**/ ?>