<?php $__env->startSection('page-title', 'Subscription for Bank\'s Materials'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Subscription for Bank\'s Materials</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Subscription for Bank\'s Materials</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/subscription-for-banks-materials.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container subscription-for-banks-materials mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="parent-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item">
                                <h2 class="heading-2">
                                Subscription
                                </h2>
                                <p class="helper">
                                    To subscribe, please enter your email address to recive bank related information and material.
                                </p>
                                <form action="/action_page.php">
                                    <label for="name">
                                        Full Name
                                    </label>
                                    <input type="text" name="name" id="name" class="email mb-4" placeholder="Full Name">
                                    <label for="company-name">
                                        Company Name (*Optional)
                                    </label>
                                    <input type="text" name="company-name" id="company-name" class="email mb-4" placeholder="Company Name">
                                    <label for="email">
                                        E-mail address
                                    </label>
                                    <input type="text" name="email" id="email" class="email" placeholder="Your email">
                                </form>
                                <button>
                                Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/interactive-services/subscription-for-banks-materials.blade.php ENDPATH**/ ?>