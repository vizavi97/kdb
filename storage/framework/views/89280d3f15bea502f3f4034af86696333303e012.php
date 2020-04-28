

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/application-for-loan.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('corporates/application-for-loan.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/application-for-loan.3'); ?></title>

     
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/virtual-reception.css')); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/application-for-loan.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container application-for-loan virtual-reception">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">

                    <h2 class="heading-2 mb-4"><?php echo app('translator')->get('corporates/application-for-loan.4'); ?></h2>

                    <?php if(count($files) > 0): ?>
                        <div class="row download">
                            <div class="col-12">
                                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="row" href="<?php echo e(Voyager::image( (json_decode($file['file_' . app()->getLocale()]))[0]->download_link )); ?>" download="">
                                    <div class="col-10 information">
                                        <h6><?php echo e($file->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale')); ?></h6>
                                    </div>
                                    <div class="col-2 icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H8l4 4 4-4h-2.55z" fill="#FFB600"/>
                                        </svg>
                                    </div>
                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/application-for-loan.5'); ?>
                    </p>

                    
                    <?php if(count($emails) > 0): ?>
                        <div class="email">
                            <span class="small-paragraph email-card-title"><?php echo app('translator')->get('corporates/application-for-loan.6'); ?></span>
                            <div class="row">
                                <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4">
                                        <a class="email-card" href="mailto:<?php echo e($email->email); ?>">
                                            <?php echo e($email->email); ?>

                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    
                    <p class="small-paragraph mt-4">
                        <?php echo app('translator')->get('corporates/application-for-loan.7'); ?>
                    </p>

                    <div class="first-parent mt-5">
                        <div class="row">
                            <div class="col-lg-6 item-parent">
                                <div class="item">
                                    <h2 class="heading-2"><?php echo app('translator')->get('corporates/application-for-loan.8'); ?></h2>
                                    <form action="<?php echo e(route('credit.post', app()->getLocale())); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <fieldset>
                                            <label class="text" for="company">
                                            <?php echo app('translator')->get('corporates/application-for-loan.9'); ?>
                                            </label>
                                            <input type="text" id="company" name="company" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.10'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="activity-type">
                                            <?php echo app('translator')->get('corporates/application-for-loan.11'); ?>
                                            </label>
                                            <input type="text" id="activity-type" name="activity_type" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.12'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="start-year">
                                            <?php echo app('translator')->get('corporates/application-for-loan.13'); ?>
                                            </label>
                                            <input type="text" id="start-year" name="start_year" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.14'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="employees-number">
                                            <?php echo app('translator')->get('corporates/application-for-loan.15'); ?>
                                            </label>
                                            <input type="number" id="employees-number" name="employees_number" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.16'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="tax-id">
                                            <?php echo app('translator')->get('corporates/application-for-loan.17'); ?>
                                            </label>
                                            <input type="text" id="tax-id" name="tax_id" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.18'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="address">
                                            <?php echo app('translator')->get('corporates/application-for-loan.19'); ?>
                                            </label>
                                            <input type="text" id="address" name="address" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.20'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="manager-name">
                                            <?php echo app('translator')->get('corporates/application-for-loan.21'); ?>
                                            </label>
                                            <input type="text" id="manager-name" name="manager_name" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.22'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="email">
                                            <?php echo app('translator')->get('corporates/application-for-loan.23'); ?> 
                                            </label>
                                            <input type="email" id="email" name="email" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.24'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="phone">
                                            <?php echo app('translator')->get('corporates/application-for-loan.25'); ?>
                                            </label>
                                            <input type="text" id="phone" name="phone" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.26'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="bank-name">
                                            <?php echo app('translator')->get('corporates/application-for-loan.27'); ?>
                                            </label>
                                            <input type="text" id="bank-name" name="bank_name" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.28'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="revenue-national">
                                            <?php echo app('translator')->get('corporates/application-for-loan.29'); ?>
                                            </label>
                                            <input type="text" id="revenue-national" name="revenue_national" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.30'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="revenue-foreign">
                                            <?php echo app('translator')->get('corporates/application-for-loan.31'); ?>
                                            </label>
                                            <input type="text" id="revenue-foreign" name="revenue_foreign" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.32'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="debt-uzs">
                                            <?php echo app('translator')->get('corporates/application-for-loan.33'); ?>
                                            </label>
                                            <input type="text" id="debt-uzs" name="debt_uzs" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.34'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="debt-usd">
                                            <?php echo app('translator')->get('corporates/application-for-loan.35'); ?>
                                            </label>
                                            <input type="text" id="debt-usd" name="debt_usd" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.36'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="debt-eur">
                                            <?php echo app('translator')->get('corporates/application-for-loan.37'); ?>
                                            </label>
                                            <input type="text" id="debt-eur" name="debt_eur" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.38'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="loan-amount">
                                            <?php echo app('translator')->get('corporates/application-for-loan.39'); ?>
                                            </label>
                                            <input type="text" id="loan-amount" name="loan_amount" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.40'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="loan-currency">
                                            <?php echo app('translator')->get('corporates/application-for-loan.41'); ?>
                                            </label>
                                            <select id="loan-currency"  class="main-input" name="<?php echo app('translator')->get('corporates/application-for-loan.42'); ?>" required>
                                                <option class="main-input"><?php echo app('translator')->get('corporates/application-for-loan.43'); ?></option>
                                                <option class="main-input" value="UZS"><?php echo app('translator')->get('corporates/application-for-loan.44'); ?></option>
                                                <option class="main-input" value="USD"><?php echo app('translator')->get('corporates/application-for-loan.45'); ?></option>
                                                <option class="main-input" value="EUR"><?php echo app('translator')->get('corporates/application-for-loan.46'); ?></option>
                                            </select>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="purpose">
                                            <?php echo app('translator')->get('corporates/application-for-loan.47'); ?>
                                            </label>
                                            <textarea id="purpose" name="purpose" class="main-input" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.48'); ?>" rows="5" required></textarea>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="loan-term">
                                            <?php echo app('translator')->get('corporates/application-for-loan.49'); ?>
                                            </label>
                                            <input type="text" id="loan-term" name="loan_term" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.50'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="grace-period">
                                            <?php echo app('translator')->get('corporates/application-for-loan.51'); ?>
                                            </label>
                                            <input type="text" id="grace-period" name="grace_period" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.52'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="collateral">
                                            <?php echo app('translator')->get('corporates/application-for-loan.53'); ?>
                                            </label>
                                            <input type="text" id="collateral" name="collateral" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.54'); ?>" class="main-input" required>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="collateral-name">
                                            <?php echo app('translator')->get('corporates/application-for-loan.55'); ?>
                                            </label>
                                            <textarea id="collateral-name" name="collateral_name" class="main-input" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.56'); ?>" rows="5" required></textarea>
                                        </fieldset>
                                        <fieldset>
                                            <label class="text" for="collateral-value">
                                            <?php echo app('translator')->get('corporates/application-for-loan.57'); ?>
                                            </label>
                                            <input type="text" id="collateral-value" name="collateral_value" placeholder="<?php echo app('translator')->get('corporates/application-for-loan.58'); ?>" class="main-input" required>
                                        </fieldset>
    
                                        <button class="send-button" type="submit">
                                        <?php echo app('translator')->get('corporates/application-for-loan.59'); ?>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

    <?php if(Session::has('success')): ?>
        <div class="success-message">
            <div class="global-modal-window" style="display: flex;">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <p class="small-paragraph mb-0">
                            Your application has been successfully sent.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/corporates/application-for-loan.blade.php ENDPATH**/ ?>