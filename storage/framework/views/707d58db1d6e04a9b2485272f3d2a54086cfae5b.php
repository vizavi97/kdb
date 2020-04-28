<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3"><?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.title'); ?></h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/general-information') ? 'javascript:void(0)' : route('about-us.general-information', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/general-information') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.general-information'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/history') ? 'javascript:void(0)' : route('about-us.history', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/history') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.history'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/mission') ? 'javascript:void(0)' : route('about-us.mission', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/mission') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.mission'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/message-from-chairman') ? 'javascript:void(0)' : route('about-us.message-from-chairman', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/message-from-chairman') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.message-from'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/management-board') ? 'javascript:void(0)' : route('about-us.management-board', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/management-board') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.management-board'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/organizational-structure') ? 'javascript:void(0)' : route('about-us.organizational-structure', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/organizational-structure') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.organizational-structure'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/committees') ? 'javascript:void(0)' : route('about-us.committees', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/committees') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.committees'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/branches') ? 'javascript:void(0)' : route('about-us.branches', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/branches') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.branches'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/business-plan') ? 'javascript:void(0)' : route('about-us.business-plan', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/business-plan') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.business-plan'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/banks-charter') ? 'javascript:void(0)' : route('about-us.banks-charter', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/banks-charter') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.banks-charter'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/licenses-and-certificates') ? 'javascript:void(0)' : route('about-us.licenses-and-certificates', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/licenses-and-certificates') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.licenses-certificates'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/awards') ? 'javascript:void(0)' : route('about-us.awards', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/awards') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.awards'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/ratings') ? 'javascript:void(0)' : route('about-us.ratings', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/ratings') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.ratings'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/careers') ? 'javascript:void(0)' : route('about-us.careers', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/careers') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.careers'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/about-us/contact-us') ? 'javascript:void(0)' : route('about-us.contact-us', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/about-us/contact-us') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/about-us-sidebar.contact-us'); ?>
            </a>
        </li>
    </ul>
</aside><?php /**PATH /usr/local/www/apache24/data/resources/views/layouts/sidebars/about-us-sidebar.blade.php ENDPATH**/ ?>