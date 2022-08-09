<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Regit Test</title>

        <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

    </head>
    <body class="antialiased bg-black">

        <div id="app">

            <?php echo $__env->yieldContent('content'); ?>

        </div>

    </body>
</html>
<?php /**PATH /var/www/public/local.regit.com/resources/views/master.blade.php ENDPATH**/ ?>