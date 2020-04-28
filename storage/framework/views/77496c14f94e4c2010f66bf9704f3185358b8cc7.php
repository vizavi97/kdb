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
             
            <main class="col-xl-9 main-hero mb-5">
                <?php $__currentLoopData = $surveys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $survey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(in_array($survey->id, $userVoteIds)): ?>
                        <div class="box">
                            <h3 class="heading-3"><?php echo e($survey->getTranslatedAttribute('question', $locale, 'fallbackLocale')); ?></h3>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($survey['answer_' . $order]): ?>
                                    <div class="answer">
                                        <div class="overlay" style="width: <?php echo e(round($survey['answer_' . $order . '_votes'] / $survey->all_votes * 100, 0) . '%'); ?>"></div>
                                        <div class="text"><?php echo e($survey->getTranslatedAttribute('answer_' . $order, $locale, 'fallbackLocale')); ?></div>
                                        <div class="percentage"><?php echo e($survey['answer_' . $order . '_votes'] . ' (' . round($survey['answer_' . $order . '_votes'] / $survey->all_votes * 100, 0) . '%)'); ?></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <div class="box">
                            <form action="<?php echo e(route('interactive-services.post-survey', app()->getLocale())); ?>" method="POST" class="col-12">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="question_id" value="<?php echo e($survey->id); ?>">
                                <h3 class="heading-3"><?php echo e($survey->getTranslatedAttribute('question', $locale, 'fallbackLocale')); ?></h3>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($survey['answer_' . $order]): ?>
                                        <div class="input-parent">
                                            <input type="radio" id="answer-<?php echo e($order . '-' . $survey->id); ?>" name="answer" value="<?php echo e($survey->getTranslatedAttribute('answer_' . $order, $locale, 'fallbackLocale')); ?>">
                                            <label for="answer-<?php echo e($order . '-' . $survey->id); ?>">
                                                <?php echo e($survey->getTranslatedAttribute('answer_' . $order, $locale, 'fallbackLocale')); ?>

                                            </label>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <button type="submit">vote</button>
                            </form>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Uzgenius Academy\Desktop\WEBSITES\KDB\resources\views/interactive-services/surveys.blade.php ENDPATH**/ ?>