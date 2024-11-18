<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalf8f20ba4a61ebf0c8e3fc3a6fe7df0a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8f20ba4a61ebf0c8e3fc3a6fe7df0a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.webGL-carousel-gallery','data' => ['data' => $data]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('webGL-carousel-gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data)]); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8f20ba4a61ebf0c8e3fc3a6fe7df0a6)): ?>
<?php $attributes = $__attributesOriginalf8f20ba4a61ebf0c8e3fc3a6fe7df0a6; ?>
<?php unset($__attributesOriginalf8f20ba4a61ebf0c8e3fc3a6fe7df0a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8f20ba4a61ebf0c8e3fc3a6fe7df0a6)): ?>
<?php $component = $__componentOriginalf8f20ba4a61ebf0c8e3fc3a6fe7df0a6; ?>
<?php unset($__componentOriginalf8f20ba4a61ebf0c8e3fc3a6fe7df0a6); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/hervelewis-blade/resources/views/Home.blade.php ENDPATH**/ ?>