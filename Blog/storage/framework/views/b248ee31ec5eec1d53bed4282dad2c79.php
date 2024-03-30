<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2"><?php echo e(__('Blog Management | Register')); ?></h3>
                </div>
                <div class="card-body px-5">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="name" class="col-form-label text-md-end"><?php echo e(__('Name')); ?></label>
                            <input id="name" type="text" placeholder="John Doe" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>"  autocomplete="name" autofocus>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-form-label text-md-end"><?php echo e(__('Email')); ?></label>
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="xyz@gmail.com" name="email" value="<?php echo e(old('email')); ?>"  autocomplete="email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-form-label text-md-end"><?php echo e(__('Password')); ?></label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="***************" name="password"  autocomplete="new-password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light border toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button>
                                </div>
                            </div>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-form-label text-md-end"><?php echo e(__('Confirm Password')); ?></label>
                            <div class="input-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="***************"  autocomplete="new-password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light border toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="role" class="col-form-label text-md-end"><?php echo e(__('Role')); ?></label>
                            <select id="role" class="form-select form-control" name="role">
                                <option value="user" <?php echo e(old('role') == 'user' ? 'selected' : ''); ?>>User</option>
                                <option value="admin" <?php echo e(old('role') == 'admin' ? 'selected' : ''); ?>>Admin</option>
                            </select>
                            <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row mb-0">
                            <button type="submit" class="btn btn-primary btn-block mt-4"><?php echo e(__('Register')); ?></button>
                            <a href="<?php echo e(route('login')); ?>" class="mt-3"><?php echo e(__('Already have an account? Login here.')); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".toggle-button").click(function(){
            var type=$('#password').attr('type');
            if(type=='password'){
                $('#password').attr('type','text');
            }else{
                $('#password').attr('type','password');
            }
            $(".toggle-icon").toggleClass("fa-eye fa-eye-slash ");
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/BlogFiverrHaider/Blog/resources/views/auth/register.blade.php ENDPATH**/ ?>