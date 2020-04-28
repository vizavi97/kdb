<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">interactive services</h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is('press-center/news') ? 'javascript:void(0)' : route('press-center.news', app()->getLocale())); ?>" class="<?php echo e(Request::is('press-center/news') ? 'active' : ''); ?>">News</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('press-center/dividends') ? 'javascript:void(0)' : route('press-center.dividends', app()->getLocale())); ?>" class="<?php echo e(Request::is('press-center/dividends') ? 'active' : ''); ?>">Dividends</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('press-center/procurement') ? 'javascript:void(0)' : route('press-center.procurement', app()->getLocale())); ?>" class="<?php echo e(Request::is('press-center/procurement') ? 'active' : ''); ?>">Procurement</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('press-center/youth-union') ? 'javascript:void(0)' : route('press-center.youth-union', app()->getLocale())); ?>" class="<?php echo e(Request::is('press-center/youth-union') ? 'active' : ''); ?>">Youth Union</a>
        </li>
    </ul>
</aside><?php /**PATH C:\Users\User 5\Desktop\KDB\resources\views/layouts/sidebars/press-center-sidebar.blade.php ENDPATH**/ ?>