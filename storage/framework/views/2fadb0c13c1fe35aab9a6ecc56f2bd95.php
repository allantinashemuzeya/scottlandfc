<?php $__env->startSection('content'); ?>
    <!-- Page Container -->
    <div class="anita-container">

        <!-- Page Title -->
        <section class="anita-section">
            <div class="anita-page-title-wrap">
                <h1 class="anita-page-title" data-aos="fade-up"><?php echo e($data->title); ?>,</h1>
                <h2 class="anita-page-subtitle" data-aos="fade-up" data-aos-delay="50"><?php echo e($data->subtitle); ?></h2>
            </div><!-- .anita-page-title-wrap -->
            <div class="anita-page-intro anita-offset-left--33 anita-offset--tablet-left--25" data-aos="fade-up" data-aos-delay="100">
                <?php echo $data->description; ?>

            </div>
        </section>

<!-- Section: Counters -->













































        <!-- Section: Where We Work  -->


        <?php $__currentLoopData = $data->components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($component->type == 'paragraph--image_gallery_with_intro'): ?>
                <?php if (isset($component)) { $__componentOriginala234260cc8d2ef6e4fd29a83a0e40876 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala234260cc8d2ef6e4fd29a83a0e40876 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.paragraph-image-gallery-intro','data' => ['component' => $component,'index' => $index]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('paragraph-image-gallery-intro'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['component' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($component),'index' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($index)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala234260cc8d2ef6e4fd29a83a0e40876)): ?>
<?php $attributes = $__attributesOriginala234260cc8d2ef6e4fd29a83a0e40876; ?>
<?php unset($__attributesOriginala234260cc8d2ef6e4fd29a83a0e40876); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala234260cc8d2ef6e4fd29a83a0e40876)): ?>
<?php $component = $__componentOriginala234260cc8d2ef6e4fd29a83a0e40876; ?>
<?php unset($__componentOriginala234260cc8d2ef6e4fd29a83a0e40876); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if($component->type == 'paragraph--person_collection'): ?>
                <?php if (isset($component)) { $__componentOriginal889f20a7a16e12515b14fee3c684236d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal889f20a7a16e12515b14fee3c684236d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.paragraph-person-collection','data' => ['component' => $component,'index' => $index]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('paragraph-person-collection'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['component' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($component),'index' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($index)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal889f20a7a16e12515b14fee3c684236d)): ?>
<?php $attributes = $__attributesOriginal889f20a7a16e12515b14fee3c684236d; ?>
<?php unset($__attributesOriginal889f20a7a16e12515b14fee3c684236d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal889f20a7a16e12515b14fee3c684236d)): ?>
<?php $component = $__componentOriginal889f20a7a16e12515b14fee3c684236d; ?>
<?php unset($__componentOriginal889f20a7a16e12515b14fee3c684236d); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- Section: Get in Touch  -->
        <section class="anita-section">
            <div class="anita-cta" data-aos="fade-up">
                <h2>
                    Let’s do something great together!
                </h2>
                <div class="anita-caption">
                    <a href="<?php echo e(route('contact')); ?>" class="anita-underline">Get in Touch</a>
                </div>
            </div><!-- .anita-cta -->
        </section>
    </div><!-- .anita-container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/hervelewis-blade/resources/views/About/About.blade.php ENDPATH**/ ?>