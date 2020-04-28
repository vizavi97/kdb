<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">
        <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.interactive-services'); ?>
    </h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/virtual-reception') ? 'javascript:void(0)' : route('interactive-services.virtual-reception', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/virtual-reception') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.virtual-reception'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/exchange-rates') ? 'javascript:void(0)' : route('interactive-services.exchange-rates', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/exchange-rates') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.exchange-rates'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/calculators') ? 'javascript:void(0)' : route('interactive-services.calculators', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/calculators') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.calculators'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/sample-forms') ? 'javascript:void(0)' : route('interactive-services.sample-forms', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/sample-forms') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.sample-forms'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/surveys') ? 'javascript:void(0)' : route('interactive-services.surveys', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/surveys') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.surveys'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/bank-regulations') ? 'javascript:void(0)' : route('interactive-services.bank-regulations', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/bank-regulations') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.banking-regulations'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/subscription-for-banks-materials') ? 'javascript:void(0)' : route('interactive-services.subscription-for-banks-materials', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/subscription-for-banks-materials') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.subscription-for'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/national-symbols') ? 'javascript:void(0)' : route('interactive-services.national-symbols', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/national-symbols') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.national-symbols'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/usefull-links') ? 'javascript:void(0)' : route('interactive-services.usefull-links', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/usefull-links') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/interactive-services-sidebar.useful-links'); ?>
            </a>
        </li>
    </ul>
</aside><?php /**PATH /usr/local/www/apache24/data/resources/views/layouts/sidebars/interactive-services-sidebar.blade.php ENDPATH**/ ?>