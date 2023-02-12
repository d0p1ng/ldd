<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>

          <!-- Styles -->
          <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
          <?php echo \Livewire\Livewire::styles(); ?>

      
          <!-- Scripts -->
          <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </head>
    <body class="antialiased">
        <?php echo e($slot); ?>


        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\WinNMP\WWW\ldd\resources\views/layout/app.blade.php ENDPATH**/ ?>