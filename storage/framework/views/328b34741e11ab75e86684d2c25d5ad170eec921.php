<?php $__env->startSection('content'); ?>

    <section class="container min-h-full text-white flex flex-col justify-center items-center">

        <h1 class="text-xl xl:text-3xl font-bold my-10"><?php echo e($data['data'][0]['title']); ?></h1>
        <p class="xl:text-xs"><?php echo e($data['data'][0]['description']); ?></p>

        <div class="my-10">
            <img class="min-w-full" src="<?php echo e($data['links'][0]['href']); ?>">
        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/public/local.regit.com/resources/views/asset-image.blade.php ENDPATH**/ ?>