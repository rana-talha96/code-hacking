<?php $__env->startSection('content'); ?>
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Register New User</h2>
                <ol>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Register</li>
                </ol>
            </div>
            <?php echo Form::open(['url' => Route('users.store'), 'files'=>true ]); ?>

            <?php echo csrf_field(); ?>
            <h1>Create Post</h1>

            <div class="form-group">
                <?php echo Form::label('name', 'Name:'); ?>

                <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('role_id', 'Role:'); ?>

                <?php echo Form::select('role_id', $roles, null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('is_active', 'Status:'); ?>

                <?php echo Form::select('is_active',array(1 => 'Active', 0 =>'Not Active'), 0, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('email', 'Email:'); ?>

                <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('photo_id', 'Select Photo:'); ?>

                <?php echo Form::file('photo_id', ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('password', 'Password:'); ?>

                <?php echo Form::password('password', ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('confirm_password', 'Confirm Password:'); ?>

                <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

            </div>


            
            <br>
            <?php echo Form::submit('Register', ['class' => 'btn btn-primary']); ?>


            <?php echo Form::close(); ?>



            <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\laravel-apps\code-hacking\code-hacking\resources\views/admin/users/create.blade.php ENDPATH**/ ?>