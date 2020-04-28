<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">interactive services</h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/virtual-reception') ? 'javascript:void(0)' : route('interactive-services.virtual-reception', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/virtual-reception') ? 'active' : ''); ?>">Virtual Reception</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/sample-forms') ? 'javascript:void(0)' : route('interactive-services.sample-forms', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/sample-forms') ? 'active' : ''); ?>">Sample Forms</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/surveys') ? 'javascript:void(0)' : route('interactive-services.surveys', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/surveys') ? 'active' : ''); ?>">Surveys</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/bank-regulations') ? 'javascript:void(0)' : route('interactive-services.bank-regulations', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/bank-regulations') ? 'active' : ''); ?>">Banking Regulations</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/subscription-for-banks-materials') ? 'javascript:void(0)' : route('interactive-services.subscription-for-banks-materials', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/subscription-for-banks-materials') ? 'active' : ''); ?>">Subscription for Banks Materials</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/national-symbols') ? 'javascript:void(0)' : route('interactive-services.national-symbols', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/national-symbols') ? 'active' : ''); ?>">National Symbols</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/usefull-links') ? 'javascript:void(0)' : route('interactive-services.usefull-links', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/interactive-services/usefull-links') ? 'active' : ''); ?>">Useful Links</a>
        </li>
    </ul>
</aside><?php /**PATH C:\Users\User 5\Desktop\kdb\resources\views/layouts/sidebars/interactive-services-sidebar.blade.php ENDPATH**/ ?>