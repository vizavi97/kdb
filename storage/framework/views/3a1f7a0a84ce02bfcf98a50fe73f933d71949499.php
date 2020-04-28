<?php $__env->startSection('page-title', 'Client Surveys'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Client Surveys</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Client Surveys</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/surveys.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container surveys mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="row box">
                    <form action="/action_page.php" class="col-12">
                        <h3 class="heading-3">
                        How long have you been a client of «KDB Bank»?
                        </h3>
                        <div class="input-parent">
                            <input type="radio" id="oneyear" name="client">
                            <label for="oneyear"></label>
                            <p>
                                Less than one year
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="moreoneyear" checked="" name="client">
                            <label for="moreoneyear"></label>
                            <p>
                                More than a year
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="notclient" name="client">
                            <label for="notclient"></label>
                            <p>
                                More than a year
                            </p>
                        </div>
                        <button>vote</button>
                    </form>
                </div>
                <div class="row box">
                    <form action="/action_page.php" class="col-12">
                        <h3 class="heading-3">
                        You have selected «KDB Bank» because you are attracted?
                        </h3>
                        <div class="input-parent">
                            <input type="radio" id="rates" name="attracted">
                            <label for="rates"></label>
                            <p>
                                Rates
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="location" checked="" name="attracted">
                            <label for="location"></label>
                            <p>
                                Convenient location of the offices
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="presence" name="attracted">
                            <label for="presence"></label>
                            <p>
                                The presence of a complex of bank services
                            </p>
                        </div>
                        <button>vote</button>
                    </form>
                </div>
                <div class="row box">
                    <form action="/action_page.php" class="col-12">
                        <h3 class="heading-3">
                        What sources of information did you learn about «KDB Bank»?
                        </h3>
                        <div class="input-parent">
                            <input type="radio" id="newspaper" name="source">
                            <label for="newspaper"></label>
                            <p>
                                Newspaper / magazine
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="tv" checked="" name="source">
                            <label for="tv"></label>
                            <p>
                                TV
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="friends" name="source">
                            <label for="friends"></label>
                            <p>
                                Friends / acquaintances
                            </p>
                        </div>
                        <button>vote</button>
                    </form>
                </div>
                <div class="row box">
                    <form action="/action_page.php" class="col-12">
                        <h3 class="heading-3">
                        How long have you been a client of «KDB Bank»?
                        </h3>
                        <div class="input-parent">
                            <input type="radio" id="well" name="how">
                            <label for="well"></label>
                            <p>
                                Very well
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="ok" checked="" name="how">
                            <label for="ok"></label>
                            <p>
                                OK
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="satisfactory" name="how">
                            <label for="satisfactory"></label>
                            <p>
                                Satisfactory
                            </p>
                        </div>
                        <button>vote</button>
                    </form>
                </div>
                <div class="row box">
                    <form action="/action_page.php" class="col-12">
                        <h3 class="heading-3">
                        Please rate the speed of service in «KDB Bank»
                        </h3>
                        <div class="input-parent">
                            <input type="radio" id="well2" name="speed">
                            <label for="well2"></label>
                            <p>
                                Very well
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="satisfactory2" checked="" name="speed">
                            <label for="satisfactory2"></label>
                            <p>
                                Satisfactory
                            </p>
                        </div>
                        <div class="input-parent">
                            <input type="radio" id="unsatisfactory2" name="speed">
                            <label for="unsatisfactory2"></label>
                            <p>
                                Unsatisfactory
                            </p>
                        </div>
                        <button>vote</button>
                    </form>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/interactive-services/surveys.blade.php ENDPATH**/ ?>