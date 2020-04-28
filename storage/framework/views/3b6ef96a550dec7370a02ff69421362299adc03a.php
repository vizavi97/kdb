<?php $__env->startSection('page-title', 'Client Relationship Management'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Client Relationship Management</span>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('meta'); ?>

    <title>KDB | Client Relationship Management</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/crm.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container crm mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="credit">
                    <img class="w-100 mb-4 align-right" src="<?php echo e(asset('img/corporates/crm/crm.png')); ?>" alt="Letters of credit with post-financing option">
                    <h2 class="heading-2">CRM</h2>
                    <p class="small-paragraph">
                        The Bank has successfully established the international practice of “Client Relationship Management”, which provides the clients with high quality support throughout the entire service process.  
                    </p> 
                    <p class="small-paragraph">
                        The long-term availability of this function, coupled with the many years of servicing experience of multinational companies, distinguishes the Bank in providing services to clients: it provides a closer contact, single window and a special approach to solving client’s needs. 
                    </p>
                    <p class="small-paragraph">
                        The goal of a Client Relationship Manager is to nurture even stronger business relationship with corporate clients based on mutual trust and value: 
                    </p>
                    <ul class="right-icon mt-4">
                        <li>
                            <p>
                                Guiding through on-boarding experience and providing advisory services to clients.
                            </p>
                        </li>
                        <li>
                            <p>
                                Ensuring the delivery of quality client service by all business units of the Bank.
                            </p>
                        </li>
                    </ul>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDB Last\resources\views/corporates/crm.blade.php ENDPATH**/ ?>