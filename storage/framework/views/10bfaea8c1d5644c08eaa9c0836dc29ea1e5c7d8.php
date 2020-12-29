<?php $__env->startSection('content'); ?>

<?php if(empty($user->name)): ?>

<div class="row">
    <div class="col-3">
        <img src="https://www.lacucurucha.com.ar/circuito/images/usuario.jpeg" class="rounded-circle w-100"></img>
    </div>
    <div class="col-9 pt-5">
        <div>
            <h1>EL USUARIO NO EXISTE</h1>
        </div>
    </div>
</div>
<?php else: ?>

<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://instagram.fmch2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/65207655_1146677465539031_1590605399650729984_n.jpg?_nc_ht=instagram.fmch2-1.fna.fbcdn.net&_nc_ohc=PkBSxdOCcP0AX9dA5ad&tp=1&oh=ac3e17f9af7e28bd0c0461b5337eae7d&oe=60161122" class="rounded-circle w-100"></img>
        </div>
        <div class="col-9 pt-2">
            <div>
                <div class="d-flex justify-content-between">
                    <h1><?php echo e($user->name); ?></h1>
                  
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                        <!-- Edit profile button -->
                        <div >
                            <a href="/profile/<?php echo e($user->id); ?>/edit" class="btn btn-primary btn-sm ">
                            <i class='bx bx-image-add bx-xs align-middle'>
                            </i> <span class="align-middle "> Edit Profile </span></a>
                        </div>
                    <?php endif; ?>

                        <!-- Add post button -->
                        <div >
                            <a href="/p/create" class="btn btn-primary btn-sm ">
                            <i class='bx bx-image-add bx-xs align-middle'>
                            </i> <span class="align-middle "> Add new post </span></a>
                        </div>


                   
            
                </div>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong><?php echo e($user->posts->count()); ?></strong> posts</div>
                <div class="pr-5"><strong>298K</strong> followers</div>
                <div class="pr-5"><strong>876</strong> following</div>
            </div>
            <div class="pt-4 pb-1"><strong><?php echo e($user->username); ?></strong></div>
            <div><?php echo e($user->profile->title); ?> </div>
            <div><?php echo e($user->profile->description); ?> </div>
            <div><a href="<?php echo e($user->profile->url); ?>" target="_blank" rel="noopener noreferrer"> <?php echo e($user->profile->url); ?></a></div> 
        </div>
    </div>
    <hr/>
    <div class="row">

        <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4 pb-3">
            <a href="/p/<?php echo e($post->id); ?>">
                <img src="/storage/<?php echo e($post->image); ?>" class="w-100">
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\4. Laravel\freeCodeGram\resources\views/profiles/index.blade.php ENDPATH**/ ?>