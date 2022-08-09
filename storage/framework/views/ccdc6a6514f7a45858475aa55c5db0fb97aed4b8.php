<?php $__env->startSection('content'); ?>

    <section class="container min-h-full text-white flex flex-col justify-center items-center">

        <h1 class="text-xl xl:text-3xl font-bold my-10"><?php echo e($data['title']); ?></h1>
        <p class="xl:text-xs"><?php echo e($data['description']); ?></p>

        <div class="my-10">
            <audio controls>
              <source src="<?php echo e($data['audio_link']); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>
        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/public/local.regit.com/resources/views/asset-audio.blade.php ENDPATH**/ ?>