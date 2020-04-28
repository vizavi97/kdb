

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('interactive-services/virtual-reception.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('interactive-services/virtual-reception.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('interactive-services/virtual-reception.3'); ?></title>

     
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/virtual-reception.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container virtual-reception mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row"> 
                        <div class="col-lg-6 item-parent">
                            <div class="item">
                                <h2 class="heading-2"><?php echo app('translator')->get('interactive-services/virtual-reception.4'); ?></h2>
                                <form action="<?php echo e(route('vertual-reception.post', app()->getLocale())); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <fieldset>
                                        <label class="text" for="name">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.5'); ?>
                                        </label>
                                        <input type="text" id="name" name="name" placeholder="<?php echo app('translator')->get('interactive-services/virtual-reception.6'); ?>" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="entity">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.7'); ?>
                                        </label>
                                        <select id="entity"  class="main-input" name="entity" required>
                                            <option class="main-input"><?php echo app('translator')->get('interactive-services/virtual-reception.8'); ?></option>
                                            <option class="main-input" value="Individual"><?php echo app('translator')->get('interactive-services/virtual-reception.9'); ?></option>
                                            <option class="main-input" value="Legal entity"><?php echo app('translator')->get('interactive-services/virtual-reception.10'); ?></option>
                                            <option class="main-input" value="Private entrepreneur"><?php echo app('translator')->get('interactive-services/virtual-reception.11'); ?></option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="gender">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.12'); ?>
                                        </label>
                                        <select id="gender"  class="main-input" name="gender" required>
                                            <option class="main-input"><?php echo app('translator')->get('interactive-services/virtual-reception.13'); ?></option>
                                            <option class="main-input" value="Male"><?php echo app('translator')->get('interactive-services/virtual-reception.14'); ?></option>
                                            <option class="main-input" value="Female"><?php echo app('translator')->get('interactive-services/virtual-reception.15'); ?></option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="country">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.16'); ?>
                                        </label>
                                        <select id="country"  class="main-input" name="country" required>
                                            <option class="main-input"><?php echo app('translator')->get('interactive-services/virtual-reception.17'); ?></option>
                                            <option class="main-input" value="Uzbekistan"><?php echo app('translator')->get('interactive-services/virtual-reception.18'); ?></option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="region">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.19'); ?>
                                        </label>
                                        <select id="region"  class="main-input" name="region" required>
                                            <option class="region-option"><?php echo app('translator')->get('interactive-services/virtual-reception.20'); ?></option>
                                            <option class="region-option" value="Andijan region"><?php echo app('translator')->get('interactive-services/virtual-reception.21'); ?></option>
                                            <option class="region-option" value="Bukhara region"><?php echo app('translator')->get('interactive-services/virtual-reception.22'); ?></option>
                                            <option class="region-option" value="Fergana region"><?php echo app('translator')->get('interactive-services/virtual-reception.23'); ?></option>
                                            <option class="region-option" value="Jizzakh region"><?php echo app('translator')->get('interactive-services/virtual-reception.24'); ?></option>
                                            <option class="region-option" value="Namangan region"><?php echo app('translator')->get('interactive-services/virtual-reception.25'); ?></option>
                                            <option class="region-option" value="Navoiy region"><?php echo app('translator')->get('interactive-services/virtual-reception.26'); ?></option>
                                            <option class="region-option" value="Kashkadarya region"><?php echo app('translator')->get('interactive-services/virtual-reception.27'); ?></option>
                                            <option class="region-option" value="The Republic of Karakalpakstan"><?php echo app('translator')->get('interactive-services/virtual-reception.28'); ?></option>
                                            <option class="region-option" value="Samarkand region"><?php echo app('translator')->get('interactive-services/virtual-reception.29'); ?></option>
                                            <option class="region-option" value="Syrdarya region"><?php echo app('translator')->get('interactive-services/virtual-reception.30'); ?></option>
                                            <option class="region-option" value="Surkhandarya region"><?php echo app('translator')->get('interactive-services/virtual-reception.31'); ?></option>
                                            <option class="region-option" value="Tashkent region"><?php echo app('translator')->get('interactive-services/virtual-reception.32'); ?></option>
                                            <option class="region-option" value="Toshkent city"><?php echo app('translator')->get('interactive-services/virtual-reception.33'); ?></option>
                                            <option class="region-option" value="Khorezm region"><?php echo app('translator')->get('interactive-services/virtual-reception.34'); ?></option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="district">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.35'); ?>
                                        </label>
                                        <select id="district"  class="main-input" name="district" required></select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="mailing-address">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.36'); ?>
                                        </label>
                                        <input type="text" id="mailing-address" name="mailing_address" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="email">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.37'); ?>
                                        </label>
                                        <input type="email" id="email" name="email" placeholder="<?php echo app('translator')->get('interactive-services/virtual-reception.38'); ?>" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="phone-number">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.39'); ?>
                                        </label>
                                        <input type="text" id="phone-number" name="phone" placeholder="<?php echo app('translator')->get('interactive-services/virtual-reception.40'); ?>" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="topic-appeal">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.41'); ?>
                                        </label>
                                        <select id="topic-appeal"  class="main-input" name="appeal_topic" required>
                                            <option class="main-input"><?php echo app('translator')->get('interactive-services/virtual-reception.42'); ?></option>
                                            <option class="main-input" value="Account administration"><?php echo app('translator')->get('interactive-services/virtual-reception.43'); ?></option>
                                            <option class="main-input" value="Transfers in national currency"><?php echo app('translator')->get('interactive-services/virtual-reception.44'); ?></option>
                                            <option class="main-input" value="Transfers in foreign currency"><?php echo app('translator')->get('interactive-services/virtual-reception.45'); ?></option>
                                            <option class="main-input" value="Cash service"><?php echo app('translator')->get('interactive-services/virtual-reception.46'); ?></option>
                                            <option class="main-input" value="Office-net"><?php echo app('translator')->get('interactive-services/virtual-reception.47'); ?></option>
                                            <option class="main-input" value="Internet banking"><?php echo app('translator')->get('interactive-services/virtual-reception.48'); ?></option>
                                            <option class="main-input" value="SMS informing"><?php echo app('translator')->get('interactive-services/virtual-reception.49'); ?></option>
                                            <option class="main-input" value="Export-import operations"><?php echo app('translator')->get('interactive-services/virtual-reception.50'); ?></option>
                                            <option class="main-input" value="Trade finance"><?php echo app('translator')->get('interactive-services/virtual-reception.51'); ?></option>
                                            <option class="main-input" value="Treasury operations"><?php echo app('translator')->get('interactive-services/virtual-reception.52'); ?></option>
                                            <option class="main-input" value="Loans"><?php echo app('translator')->get('interactive-services/virtual-reception.53'); ?></option>
                                            <option class="main-input" value="Plastic card in UZS"><?php echo app('translator')->get('interactive-services/virtual-reception.54'); ?></option>
                                            <option class="main-input" value="Plastic card in foreign currency"><?php echo app('translator')->get('interactive-services/virtual-reception.55'); ?></option>
                                            <option class="main-input" value="Other"><?php echo app('translator')->get('interactive-services/virtual-reception.56'); ?></option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="type-appeal">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.57'); ?>
                                        </label>
                                        <select id="type-appeal"  class="main-input" name="appeal_type" required>
                                            <option class="main-input"><?php echo app('translator')->get('interactive-services/virtual-reception.58'); ?></option>
                                            <option class="main-input" value="Make an appointment"><?php echo app('translator')->get('interactive-services/virtual-reception.59'); ?></option>
                                            <option class="main-input" value="Suggestion"><?php echo app('translator')->get('interactive-services/virtual-reception.60'); ?></option>
                                            <option class="main-input" value="Application"><?php echo app('translator')->get('interactive-services/virtual-reception.61'); ?></option>
                                            <option class="main-input" value="Complaint"><?php echo app('translator')->get('interactive-services/virtual-reception.62'); ?></option>
                                            <option class="main-input" value="Information request"><?php echo app('translator')->get('interactive-services/virtual-reception.63'); ?></option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="subject-appeal">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.64'); ?> 
                                        </label>
                                        <input type="text" id="subject-appeal" name="appeal_subject" placeholder="<?php echo app('translator')->get('interactive-services/virtual-reception.65'); ?>" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="text-appeal">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.66'); ?>
                                        </label>
                                        <textarea id="text-appeal" name="appeal_text" class="main-input" placeholder="<?php echo app('translator')->get('interactive-services/virtual-reception.67'); ?>" rows="5" required></textarea>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.68'); ?>
                                        </label>
                                        <div class="file-upload">
                                            <div class="file-select">
                                                <div class="file-select-button" id="fileName"><?php echo app('translator')->get('interactive-services/virtual-reception.69'); ?></div>
                                                <div class="file-select-name" id="noFile"><?php echo app('translator')->get('interactive-services/virtual-reception.70'); ?></div>
                                                <input type="file" name="attachment" id="chooseFile">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="checkbox-parent">
                                            <input type="checkbox" id="oneyear" name="privacy_status" checked required>
                                            <label for="oneyear"><span class="pl-3"><?php echo app('translator')->get('interactive-services/virtual-reception.71'); ?> <a href="<?php echo e(route('press-center.copy-right', app()->getLocale())); ?>"><?php echo app('translator')->get('interactive-services/virtual-reception.72'); ?></a> <?php echo app('translator')->get('interactive-services/virtual-reception.73'); ?></span></label>
                                        </div>
                                    </fieldset>
                                    <button class="send-button" type="submit">
                                        <?php echo app('translator')->get('interactive-services/virtual-reception.74'); ?>
                                    </button>
                                    <div class="custom-alert warning mt-4">
                                        <p class="text">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.75'); ?>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 item-parent">
                            <div class="item">
                                <h2 class="heading-2"><?php echo app('translator')->get('interactive-services/virtual-reception.76'); ?></h2>
                                <p class="helper-text">
                                    <?php echo app('translator')->get('interactive-services/virtual-reception.77'); ?>
                                </p>
                                <p class="helper-text">
                                    <?php echo app('translator')->get('interactive-services/virtual-reception.78'); ?>
                                </p>
                                <form action="<?php echo e(route('check-app-status.post', app()->getLocale())); ?>" method="POST"> 
                                    <?php echo csrf_field(); ?>
                                    <fieldset>
                                        <label class="text" for="registration-number">
                                            <?php echo app('translator')->get('interactive-services/virtual-reception.79'); ?>
                                        </label>
                                        <input type="text" id="registration-number" name="application_number" placeholder="<?php echo app('translator')->get('interactive-services/virtual-reception.80'); ?>" class="main-input">
                                    </fieldset>

                                    <?php if(Session::has('status')): ?>
                                        <p class="small-paragraph">
                                            <strong>

                                                <?php if(Session::get('status') == "NOT CHECKED"): ?>
                                                    <span style="color: var(--color-secondary-500)">Status: </span>
                                                    <?php echo app('translator')->get('interactive-services/virtual-reception.81'); ?>
                                                <?php elseif(Session::get('status') == "CHECKED"): ?>
                                                    <span style="color: var(--color-secondary-500)">Status: </span>
                                                    <?php echo app('translator')->get('interactive-services/virtual-reception.82'); ?>
                                                <?php elseif(Session::get('status') == "NOT FOUND"): ?>
                                                <?php echo app('translator')->get('interactive-services/virtual-reception.83'); ?>
                                                <?php endif; ?>
                                            </strong>
                                        </p>
                                    <?php endif; ?> 
                                    
                                    <button type="submit"><?php echo app('translator')->get('interactive-services/virtual-reception.84'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                            <?php echo app('translator')->get('interactive-services/virtual-reception.85'); ?> <strong><?php echo e(Session::get('success')); ?></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?> 

    
    <script src="<?php echo e(asset('js/file-uploader.js')); ?>"></script>

    
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>

    
    <script src="<?php echo e(asset('js/district.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/interactive-services/virtual-reception.blade.php ENDPATH**/ ?>