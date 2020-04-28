<?php $__env->startSection('page-title', 'Affiliate Personas & Parties'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Affiliate Personas & Parties</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Affiliate Personas & Parties</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/affiliate-personas.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container affiliate-personas mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero ">
                <h2 class="heading-2 mb-4">List of Affiliated Parties</h2>
                <table>
                    <tr>
                        <th>№</th>
                        <th>Full name of individual or full name of legal person</th>
                        <th>Location of (place of residence, republic, region, city, district)</th>
                        <th>Grounds for considering as an affiliated persons</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($party->name); ?></td>
                            <td><?php echo e($party->address); ?></td>
                            <td><?php echo e($party->grounds); ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/investors/affiliate-personas.blade.php ENDPATH**/ ?>