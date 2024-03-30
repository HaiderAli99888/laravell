<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <table class="table">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr >
                                <td class="border-0">
                                    <div class="row border-white">
                                        <div class="col-md-4">
                                            <img src="<?php echo e(url($blog->avatar_path())); ?>" alt="" style="height: 300px;width: 300px;object-fit: cover" class="img-thumbnail img-fluid bg-light">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center">
                                            <div class="col-md-12">

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
                                        <div class="col-md-12 mt-3">
                                            <form action="<?php echo e(route('comments.store')); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                                <input type="hidden" value="<?php echo e($blog->id); ?>" name="blog">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Leave a comment here." name="comment">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-primary"  id="basic-addon1"><i class=" fa fa-plus"></i> Add</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <ul class="list-group">
                                                <?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="list-group-item">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="<?php echo e(url('img/profile.png')); ?>" class="comment-profile" alt="">
                                                                <?php echo e($comment->user->name); ?>

                                                            </div>
                                                            <div class="text-right">
                                                                <p class="text-muted">
                                                                    <?php if($comment->user_id==auth()->user()->id): ?>
                                                                        <form method="post" action="<?php echo e(route('comments.destroy',['id'=>$comment->id])); ?>" >
                                                                            <?php echo e(csrf_field()); ?>

                                                                            <?php echo method_field('delete'); ?>
                                                                            <button class="btn text-light btn-danger btn-sm">
                                                                                <i class=" fa fa-trash"></i> Remove
                                                                            </button>
                                                                        </form>
                                                                    <?php endif; ?>
                                                                    <i class="fa fa-clock"></i><?php echo e(date('d F, y h:i A',strtotime($comment->created_at))); ?>

                                                                </p>

                                                            </div>
                                                        </div>
                                                        <p class="ml-5"><?php echo e($comment->comment); ?></p>

                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/BlogFiverrHaider/Blog/resources/views/blogs/listing.blade.php ENDPATH**/ ?>