<?php $__env->startSection('page-title', 'Local Card Terminals'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Local Card Terminals</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Local Card Terminals</title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/local-terminals.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container local-terminals">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <img src="<?php echo e(asset('img/individuals/local-terminals/1.png')); ?>">
                <p class="small-paragraph mt-4">
                    Today's economic and financial conditions have specific requirements for reliability calculations in international trade and the availability of competitive funding. Being one of the major well-established prestigious foreign Bank in Uzbekistan, “KDB Bank Uzbekistan” in partnership with other well-known foreign partner banks provides the most advanced forms of documentary payments and trade finance instruments based on international financial practices.
                </p>
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/individuals/local-terminals.blade.php ENDPATH**/ ?>