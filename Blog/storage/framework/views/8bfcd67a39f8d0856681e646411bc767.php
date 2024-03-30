<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('blogs.create')); ?>" class="btn text-white float-right btn-primary"><i class="fa fa-plus"></i> Create Post</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php if(count($blogs)>0): ?>
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr >
                                    <td class="border-0">
                                        <div class="row border-white">
                                            <div class="col-md-4">
                                                <img src="<?php echo e(url($blog->avatar_path())); ?>" alt="" style="height: 300px;width: 300px;object-fit: cover" class="img-thumbnail img-fluid bg-light">
                                            </div>
                                            <div class="col-md-8 d-flex align-items-center">
                                                <div class="col-md-12">
                                                    <div class="d-flex justify-content-end">
                                                        <?php if($blog->user_id==auth()->user()->id): ?>
                                                            <a href="<?php echo e(route('blogs.edit',['blog'=>$blog->id])); ?>" class="btn btn-sm btn-success text-white"> <i class="fa fa-edit"></i> Edit </a>
                                                            <a href="<?php echo e(route('blogs.destroy', ['blog' => $blog->id])); ?>" class="btn btn-sm btn-danger text-white ml-1" onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($blog->id); ?>').submit();">
                                                                <i class="fa fa-trash"></i> Delete
                                                            </a>
                                                            <form id="delete-form-<?php echo e($blog->id); ?>" action="<?php echo e(route('blogs.destroy', ['blog' => $blog->id])); ?>" method="POST" style="display: none;">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                            </form>
                                                        <?php endif; ?>

                                                    </div>
                                                    <h6 class="text-success"><?php echo e($blog->title); ?></h6>
                                                    <p><?php echo e($blog->content); ?></p>
                                                    <p class="text-muted float-right">
                                                        By <b><?php echo e($blog->user->name); ?></b>
                                                        on
                                                        <i class="fa fa-clock"></i>
                                                        <b><?php echo e(date('d F, y H:i A ',strtotime($blog->created_at))); ?></b>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php else: ?>
                            <tr>
                                <td class="text-center border-0">
                                    No blog posted yet.
                                </td>
                            </tr>
                        <?php endif; ?>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/BlogFiverrHaider/Blog/resources/views/blogs/index.blade.php ENDPATH**/ ?>