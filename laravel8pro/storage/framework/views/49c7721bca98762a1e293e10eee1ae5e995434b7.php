<?php $__env->startSection('title', __('Server Error')); ?>
<?php $__env->startSection('code', '500'); ?>
<?php $__env->startSection('message', __('Server Error')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ilensys/gtm/git_repo/angular-laravel-php/laravel8pro/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/views/500.blade.php ENDPATH**/ ?>