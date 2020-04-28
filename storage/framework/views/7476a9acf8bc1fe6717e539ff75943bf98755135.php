<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">press center</h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/press-center/news') ? 'javascript:void(0)' : route('press-center.news', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/press-center/news') ? 'active' : ''); ?>">News</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/press-center/gallery') ? 'javascript:void(0)' : route('press-center.gallery-category', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/press-center/gallery-category') ? 'active' : ''); ?>">Gallery</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/press-center/dividends') ? 'javascript:void(0)' : route('press-center.dividends', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/press-center/dividends') ? 'active' : ''); ?>">Dividends</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/press-center/procurement') ? 'javascript:void(0)' : route('press-center.procurement', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/press-center/procurement') ? 'active' : ''); ?>">Procurement</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/press-center/youth-union') ? 'javascript:void(0)' : route('press-center.youth-union', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/press-center/youth-union') ? 'active' : ''); ?>">Youth Union</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/press-center/copy-right') ? 'javascript:void(0)' : route('press-center.copy-right', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/press-center/copy-right') ? 'active' : ''); ?>">Terms of Use & Privacy Policy</a>
        </li>
    </ul>
</aside><?php /**PATH C:\Users\Teacher\Desktop\KDB Last\resources\views/layouts/sidebars/press-center-sidebar.blade.php ENDPATH**/ ?>