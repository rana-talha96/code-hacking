<?php $__env->startSection('content'); ?>
    <section id="breadcrumbs highfy" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit User</h2>
                <ol>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Edit User againt ID = <?php echo e($user->id); ?></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <img src="<?php echo e($user->photo ? $user->photo->file : 'https://media.istockphoto.com/id/535851101/photo/male-silhouette-portrait-icon-with-question-mark-sign.jpg?s=1024x1024&w=is&k=20&c=-7OFe34s_c0xnyjUwg-fuX_HPsGO-kCCv2Idt16RCJA='); ?>"
                        alt="" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    <?php echo Form::model($user, ['method' => 'PATCH', 'url' => Route('users.update', $user->id), 'files' => true]); ?>

                    <?php echo csrf_field(); ?>

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

                        <?php echo Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class' => 'form-control']); ?>

                    </div>

                    <div class="form-group">
                        <?php echo Form::label('email', 'Email:'); ?>

                        <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

                    </div>

                    <div class="form-group">
                        <?php echo Form::label('photo_id', 'Select Photo:'); ?>

                        <?php echo Form::file('photo_id', ['class' => 'form-control']); ?>

                    </div>

                    
                    <br>
                    <div class="form-group d-flex">
                        <?php echo Form::submit('Update User', ['class' => 'btn btn-primary me-3']); ?>


                        <?php echo Form::close(); ?>


                        <?php echo Form::open(['method' => 'DELETE', 'url' => Route('users.destroy', $user->id)]); ?>

                        <?php echo Form::submit('Delete User', ['class' => 'btn btn-danger']); ?>

                        <?php echo Form::close(); ?>

                    </div>

                    <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>



        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\laravel-apps\code-hacking\code-hacking\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>