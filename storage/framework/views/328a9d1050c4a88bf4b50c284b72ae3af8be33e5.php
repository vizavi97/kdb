<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">interactive services</h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is('interactive-services/sample-forms') ? 'javascript:void(0)' : route('interactive-services.sample-forms')); ?>" class="<?php echo e(Request::is('interactive-services/sample-forms') ? 'active' : ''); ?>">Sample Forms</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('interactive-services/surveys') ? 'javascript:void(0)' : route('interactive-services.surveys')); ?>" class="<?php echo e(Request::is('interactive-services/surveys') ? 'active' : ''); ?>">Surveys</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('interactive-services/bank-regulations') ? 'javascript:void(0)' : route('interactive-services.bank-regulations')); ?>" class="<?php echo e(Request::is('interactive-services/bank-regulations') ? 'active' : ''); ?>">Banking Regulations</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('interactive-services/subscription-for-banks-materials') ? 'javascript:void(0)' : route('interactive-services.subscription-for-banks-materials')); ?>" class="<?php echo e(Request::is('interactive-services/subscription-for-banks-materials') ? 'active' : ''); ?>">Subscription for Banks Materials</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('interactive-services/national-symbols') ? 'javascript:void(0)' : route('interactive-services.national-symbols')); ?>" class="<?php echo e(Request::is('interactive-services/national-symbols') ? 'active' : ''); ?>">National Symbols</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('interactive-services/usefull-links') ? 'javascript:void(0)' : route('interactive-services.usefull-links')); ?>" class="<?php echo e(Request::is('interactive-services/usefull-links') ? 'active' : ''); ?>">Usefull Links</a>
        </li>
    </ul>
</aside><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/layouts/sidebars/interactive-services-sidebar.blade.php ENDPATH**/ ?>