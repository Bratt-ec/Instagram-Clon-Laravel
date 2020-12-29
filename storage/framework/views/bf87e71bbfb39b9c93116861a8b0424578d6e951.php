

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/<?php echo e($post->image); ?>" alt="<?php echo e($post->caption); ?>" class="w-100">
        </div>
        <div class="col-4">
            <div class="">
                <h3><?php echo e($post->user->username); ?> </h3>
                <p> <?php echo e($post->caption); ?> </p>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\4. Laravel\freeCodeGram\resources\views/posts/show.blade.php ENDPATH**/ ?>