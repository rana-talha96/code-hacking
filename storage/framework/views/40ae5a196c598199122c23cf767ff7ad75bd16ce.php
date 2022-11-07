<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <!-- ======= Header ======= -->
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->
    <main id="main">

        <?php echo $__env->yieldContent('content'); ?>

    </main>
    <!-- ======= Footer ======= -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ======= End Footer ======= -->


</body>

</html>
<?php /**PATH D:\Laravel\laravel-apps\code-hacking\code-hacking\resources\views/layouts/main.blade.php ENDPATH**/ ?>