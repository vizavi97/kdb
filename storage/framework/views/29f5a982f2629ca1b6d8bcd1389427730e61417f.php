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
                                <form action="/action_page.php">
                                    <fieldset>
                                        <label class="text" for="name">
                                            Name of applicant / Name of legal entity
                                        </label>
                                        <input type="text" id="name" name="user-name" placeholder="Aplication number" class="main-input">
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="entity">
                                            Type of entity
                                        </label>
                                        <select id="entity"  class="main-input" name="user-entity">
                                            <option class="main-input" value="entity-value">Entity text</option>
                                            <option class="main-input" value="entity-value">Entity text</option>
                                            <option class="main-input" value="entity-value">Entity text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="gender">
                                            Gender
                                        </label>
                                        <select id="gender"  class="main-input" name="user-gender">
                                            <option class="main-input" value="gender-value">Gender text</option>
                                            <option class="main-input" value="gender-value">Gender text</option>
                                            <option class="main-input" value="gender-value">Gender text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="country">
                                            Country
                                        </label>
                                        <select id="country"  class="main-input" name="user-country">
                                            <option class="main-input" value="country-value">Country text</option>
                                            <option class="main-input" value="country-value">Country text</option>
                                            <option class="main-input" value="country-value">Country text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="region">
                                            Region
                                        </label>
                                        <select id="region"  class="main-input" name="user-region">
                                            <option class="main-input" value="region-value">Region text</option>
                                            <option class="main-input" value="region-value">Region text</option>
                                            <option class="main-input" value="region-value">Region text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="district">
                                            District
                                        </label>
                                        <select id="district"  class="main-input" name="user-district">
                                            <option class="main-input" value="district-value">District text</option>
                                            <option class="main-input" value="district-value">District text</option>
                                            <option class="main-input" value="district-value">District text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="number">
                                            Number
                                        </label>
                                        <input type="text" id="number" name="user-number" placeholder="Aplication number" class="main-input">
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="email">
                                            E-mail
                                        </label>
                                        <input type="email" id="email" name="user-email" placeholder="Aplication e-mail" class="main-input">
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="phone-number">
                                            Contact phone number
                                        </label>
                                        <input type="text" id="phone-number" name="user-phone-number" placeholder="+998990110895" class="main-input">
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="topic-appeal">
                                            Topic of an appeal
                                        </label>
                                        <select id="topic-appeal"  class="main-input" name="user-topic-appeal">
                                            <option class="main-input" value="topic-appeal-value">Topic-appeal text</option>
                                            <option class="main-input" value="topic-appeal-value">Topic-appeal text</option>
                                            <option class="main-input" value="topic-appeal-value">Topic-appeal text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="type-appeal">
                                            Type of an appeal
                                        </label>
                                        <select id="type-appeal"  class="main-input" name="user-type-appeal">
                                            <option class="main-input" value="type-appeal-value">Type-appeal text</option>
                                            <option class="main-input" value="type-appeal-value">Type-appeal text</option>
                                            <option class="main-input" value="type-appeal-value">Type-appeal text</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="subject-appeal">
                                            Subject of appeal
                                        </label>
                                        <input type="text" id="subject-appeal" name="subject-appeal" placeholder="Subject of appeal" class="main-input">
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="text-appeal">
                                            Text of appeal
                                        </label>
                                        <textarea id="text-appeal" name="text-appeal" class="main-input" placeholder="Enter your appeal" rows="5"></textarea>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text">
                                            Attach a file
                                        </label>
                                        <div class="file-upload">
                                            <div class="file-select">
                                                <div class="file-select-button" id="fileName">Browse</div>
                                                <div class="file-select-name" id="noFile">No file choosen...</div>
                                                <input type="file" name="chooseFile" id="chooseFile">
                                            </div>
                                        </div>
                                        <div class="checkbox-parent">
                                            <input type="checkbox" id="oneyear" name="client">
                                            <label for="oneyear"></label>
                                            <p>
                                                Privacy
                                            </p>
                                        </div>
                                    </fieldset>
                                    <button class="send-button">
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
                                    In order to know the status of your application, please enter the registration number and the request code sent to your e-mail in the appropriate field of the "Find out status" section.
                                </p>
                                <form action="/action_page.php">
                                    <fieldset>
                                        <label class="text" for="registration-number">
                                            Registration number
                                        </label>
                                        <input type="text" id="registration-number" name="registration-number" placeholder="Aplication number" class="main-input">
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="registration-number-2">
                                            Registration number 2
                                        </label>
                                        <input type="text" id="registration-number-2" name="registration-number-2" placeholder="Aplication number" class="main-input">
                                    </fieldset>
                                    <button>find out status</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\kdb\resources\views/interactive-services/virtual-reception.blade.php ENDPATH**/ ?>