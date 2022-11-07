<?php if(count($errors) > 0 ): ?>
    <br>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

<?php endif; ?>
<?php /**PATH D:\Laravel\laravel-apps\code-hacking\code-hacking\resources\views/includes/errors.blade.php ENDPATH**/ ?>