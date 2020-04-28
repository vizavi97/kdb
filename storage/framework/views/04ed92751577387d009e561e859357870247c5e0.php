<?php $__env->startSection('page-title', 'Export-import'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Export-import</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Export-import</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/export-import.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container export-import">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">Export-Import</h2>
                <p class="small-paragraph">JSC "KDB Bank Uzbekistan" provides the following services on trade and noncommercial operations in foreign currency to individuals and legal entities.</p>
                <h3 class="heading-3 mb-3">Services related to export/import of goods, works and services</h3>
                <div class="item">
                    <p class="small-paragraph">
                        Consultation on terms of export/import contracts
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        Receipt payments  on export contracts (both cash and non-cash forms)
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        Entering information on export proceeds into YEISVO database as quickly as possible
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        Quality process of payments on import contracts
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        Entering information on payments on import contracts into YEISVO database
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        Conducting conversion operations on import contracts, dividends, reimbursement of foreign loans and on other applications specified by the legislation
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        Consultation and provision of practical assistance on using E-Contract program for entering information on foreign trade contracts
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        Providing information and letters on foreign trade contracts based on requests
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        Providing information and letters on foreign trade contracts based on requests
                    </p>
                </div>
                <h3 class="heading-3 mb-3 mt-4">Services on noncommercial operations</h3>
                <div class="item">
                    <p class="small-paragraph">
                        Receipt and transfer of payments on education, medical treatment and other noncommercial operations of individuals and legal entities
                    </p>
                </div>
                <p class="small-paragraph mt-4">
                    If you have any questions related on payments in foreign currency feel free to contact our qualified specialists
                </p>

                <button class="modal-open" modal-id="modal1">Contact Us</button>

                <div class="global-modal-window flex-center" id="modal1">
                    <div class="global-modal-content">
                        <div class="modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                            </svg>
                        </div>
                        <div class="modal-content-inner">
                            <div class="p-4">
                                <h3 class="heading-2 mb-4">Direct phone contacts with the Officers of Currency Control Department</h3>

                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row item no-gutters">
                                    <div class="col-md-3">
                                        <p class="small-paragraph"><?php echo e($user->name); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="small-paragraph"><?php echo e($user->position); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="small-paragraph"><?php echo e($user->phone_number); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="mailto:<?php echo e($user->email); ?>" class="small-paragraph modal-mail"><?php echo e($user->email); ?></a>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Uzgenius Academy\Desktop\WEBSITES\KDB\resources\views/corporates/export-import.blade.php ENDPATH**/ ?>