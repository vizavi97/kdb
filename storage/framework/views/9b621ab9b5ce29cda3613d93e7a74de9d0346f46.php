<?php $__env->startSection('page-title', 'Virtual Reception'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Virtual Reception</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Virtual Reception</title>

    
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
                                <h2 class="heading-2">Send a message</h2>
                                <form action="<?php echo e(route('vertual-reception.post', app()->getLocale())); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <fieldset>
                                        <label class="text" for="name">
                                            Name of applicant / Name of legal entity
                                        </label>
                                        <input type="text" id="name" name="name" placeholder="Name" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="entity">
                                            Type of entity
                                        </label>
                                        <select id="entity"  class="main-input" name="entity" required>
                                            <option class="main-input" value="entity-value">Entity text</option>
                                            <option class="main-input" value="entity-value">Entity text</option>
                                            <option class="main-input" value="entity-value">Entity text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="gender">
                                            Gender
                                        </label>
                                        <select id="gender"  class="main-input" name="gender" required>
                                            <option class="main-input" value="male">Male</option>
                                            <option class="main-input" value="female">Female</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="country">
                                            Country
                                        </label>
                                        <select id="country"  class="main-input" name="country" required>
                                            <option class="main-input" value="country-value">Country text</option>
                                            <option class="main-input" value="country-value">Country text</option>
                                            <option class="main-input" value="country-value">Country text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="region">
                                            Region
                                        </label>
                                        <input type="text" id="name" name="region" placeholder="Region" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="district">
                                            District
                                        </label>
                                        <input type="text" id="name" name="district" placeholder="District" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="number">
                                            Number
                                        </label>
                                        <input type="text" id="number" name="application_number" placeholder="Aplication number" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="email">
                                            E-mail
                                        </label>
                                        <input type="email" id="email" name="email" placeholder="e-mail" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="phone-number">
                                            Contact phone number
                                        </label>
                                        <input type="text" id="phone-number" name="phone" placeholder="+998990110895" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="topic-appeal">
                                            Topic of an appeal
                                        </label>
                                        <select id="topic-appeal"  class="main-input" name="appeal_topic" required>
                                            <option class="main-input" value="topic-appeal-value">Topic-appeal text</option>
                                            <option class="main-input" value="topic-appeal-value">Topic-appeal text</option>
                                            <option class="main-input" value="topic-appeal-value">Topic-appeal text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="type-appeal">
                                            Type of an appeal
                                        </label>
                                        <select id="type-appeal"  class="main-input" name="appeal_type" required>
                                            <option class="main-input" value="type-appeal-value">Type-appeal text</option>
                                            <option class="main-input" value="type-appeal-value">Type-appeal text</option>
                                            <option class="main-input" value="type-appeal-value">Type-appeal text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="subject-appeal">
                                            Subject of appeal
                                        </label>
                                        <input type="text" id="subject-appeal" name="appeal_subject" placeholder="Subject of appeal" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="text-appeal">
                                            Text of appeal
                                        </label>
                                        <textarea id="text-appeal" name="appeal_text" class="main-input" placeholder="Enter your appeal" rows="5" required></textarea>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text">
                                            Attach a file
                                        </label>
                                        <div class="file-upload">
                                            <div class="file-select">
                                                <div class="file-select-button" id="fileName">Browse</div>
                                                <div class="file-select-name" id="noFile">No file choosen...</div>
                                                <input type="file" name="attachment" id="chooseFile" required>
                                            </div>
                                        </div>
                                        <div class="checkbox-parent">
                                            <input type="checkbox" id="oneyear" name="privacy_status" checked required>
                                            <label for="oneyear"><span class="pl-3">I accept <a href="<?php echo e(route('press-center.copy-right', app()->getLocale())); ?>">the terms of use</a> of the site</span></label>
                                        </div>
                                    </fieldset>
                                    <button class="send-button" type="submit">
                                        Send
                                    </button>
                                    <div class="custom-alert warning mt-4">
                                        <p class="text">
                                            * area obligatory to fill
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 item-parent">
                            <div class="item">
                                <h2 class="heading-2">Find out status</h2>
                                <p class="helper-text">
                                    Dear user!
                                </p>
                                <p class="helper-text">
                                    In order to know the status of your application, please enter the registration number and click "find out status" button.
                                </p>
                                <form action="/action_page.php">
                                    <fieldset>
                                        <label class="text" for="registration-number">
                                            Application number
                                        </label>
                                        <input type="text" id="registration-number" name="application-number" placeholder="Aplication number" class="main-input">
                                    </fieldset>

                                    
                                    
                                    <button type="submit">find out status</button>
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
                            Arizangiz muvaffaqiyatli jo'natildi. Arizangiz holatini keyinchalik tekshirish uchun ariza raqamini saqlab qo'ying. Ariza raqami: <strong><?php echo e(Session::get('success')); ?></strong>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/interactive-services/virtual-reception.blade.php ENDPATH**/ ?>