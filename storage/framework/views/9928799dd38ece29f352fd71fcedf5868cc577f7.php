<?php $__env->startSection('content'); ?>
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>User Detail</h2>
                <ol>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Users</li>
                </ol>
            </div>

        </div>
    </section>

    <div class="container">
        <div class="row gy-4">
            <?php if(Session::has('deleted_user') or Session::has('update_user') or Session::has('add_new_user')): ?>
                <?php if(Session::has('deleted_user')): ?>
                    <div class="alert alert-danger">
                        <h6><?php echo e(session('deleted_user')); ?></h6>
                    </div>
                <?php endif; ?>
                <?php if(Session::has('update_user')): ?>
                    <div class="alert alert-info">
                        <h6><?php echo e(session('update_user')); ?></h6>
                    </div>
                <?php endif; ?>
                <?php if(Session::has('add_new_user')): ?>
                    <div class="alert alert-success">
                        <h6><?php echo e(session('add_new_user')); ?></h6>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Active</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if($users): ?>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->role->name); ?></td>
                                <td><?php echo e($user->is_active == 1 ? 'Yes' : 'No'); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->created_at->diffForHumans()); ?></td>
                                <td><img height="50" src="<?php echo e($user->photo ? $user->photo->file : 'No Photo'); ?>"
                                        alt=""></td>
                                <td><a href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\laravel-apps\code-hacking\code-hacking\resources\views/admin/users/index.blade.php ENDPATH**/ ?>