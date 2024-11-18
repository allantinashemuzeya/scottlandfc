<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Anita | Creative Photography</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;800&family=Rajdhani:wght@700&display=swap"
          rel="stylesheet">
    <!-- Template Config -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/config.css')); ?>">
    <!-- Libraries -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/libs.css')); ?>">
    <!-- Template Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <!-- Responsive -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('img/favicon.png')); ?>" sizes="32x32"/>
</head>
<body>

<!-- Header -->
<?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>

<!-- Fullscreen Menu -->
<?php if (isset($component)) { $__componentOriginal9cb6c9c40448674acd72773c16b54dee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9cb6c9c40448674acd72773c16b54dee = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fullscreen-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fullscreen-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9cb6c9c40448674acd72773c16b54dee)): ?>
<?php $attributes = $__attributesOriginal9cb6c9c40448674acd72773c16b54dee; ?>
<?php unset($__attributesOriginal9cb6c9c40448674acd72773c16b54dee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9cb6c9c40448674acd72773c16b54dee)): ?>
<?php $component = $__componentOriginal9cb6c9c40448674acd72773c16b54dee; ?>
<?php unset($__componentOriginal9cb6c9c40448674acd72773c16b54dee); ?>
<?php endif; ?>

<!-- Page Main -->
<main class="anita-main">
    <?php echo $__env->yieldContent('content'); ?>
</main>

<?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

<!-- JS Scripts -->
<script src="<?php echo e(asset('js/lib/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/aos.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/core.js')); ?>"></script>

<script>
    const d_anita_config = <?php echo json_encode($config); ?>;
    /* --- Activate Anita Core --- */

    // function init() {
        let anita = new Anita( d_anita_config );
    // }
    // setTimeout(()=> init(), 3000);
</script>

</body>
</html>
<?php /**PATH /var/www/hervelewis-blade/resources/views//layouts/Home.blade.php ENDPATH**/ ?>