<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mt-2"><?php echo e(__('Update Blog')); ?></h3>
                    </div>
                    <div class="card-body px-5">
                        <form method="POST" action="<?php echo e(route('blogs.update',['blog'=>$edit->id])); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo method_field('PUT'); ?>
                            <div class="row mb-3">
                                <label for="title" class="col-form-label text-md-end"><?php echo e(__('Title')); ?></label>
                                <input id="title" type="text" placeholder="Top 5 Universities in Europe" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(old('title',$edit->title)); ?>"  autocomplete="title" autofocus>
                                <?php $__errorArgs = ['title'];
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
                                <label for="content" class="col-form-label text-md-end"><?php echo e(__('Content')); ?></label>
                                <textarea id="content" type="text" class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Based on various reputable international rankings up to my last update in January 2022, here is a list of some of the top universities in Europe:
1. University of Oxford (United Kingdom)
2. University of Cambridge (United Kingdom)
3. ETH Zurich - Swiss Federal Institute of Technology (Switzerland)
4. Imperial College London (United Kingdom)
5. University College London (United Kingdom)" name="content"  autocomplete="content" rows="10"><?php echo e(old('content',$edit->content)); ?></textarea>
                                <?php $__errorArgs = ['content'];
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
                                <label for="avatar" class="col-form-label text-md-end"><?php echo e(__('Avatar')); ?></label>
                                <input id="avatar" type="file" class="form-control form-control-file <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="avatar"  >
                                <?php $__errorArgs = ['avatar'];
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
                            <div class="col-md-4 offset-md-8">
                                <img src="<?php echo e(url($edit->avatar_path())); ?>" alt="" style="height: 100px;width: 100px;object-fit: cover" class="img-thumbnail img-fluid bg-light">
                                <h6>Previous Avatar</h6>
                            </div>
                            <div class="row mb-0">
                                <button type="submit" class="btn btn-primary btn-block mt-4"><i class="fa fa-refresh"></i> <?php echo e(__('Update ')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/BlogFiverrHaider/Blog/resources/views/blogs/edit.blade.php ENDPATH**/ ?>