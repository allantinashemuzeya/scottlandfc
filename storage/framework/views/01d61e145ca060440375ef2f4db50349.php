<section class="anita-section">
    <div class="anita-grid anita-grid--33-66 anita-bottom-gap--medium anita-grid--tablet-1col">
        <div data-aos="fade-up">
            <h2>
                <?php if($index < 10): ?>
                    <sup>0<?php echo e($index); ?>.</sup>
                    <?php else: ?>
                    <sup><?php echo e($index); ?>.</sup>
                <?php endif; ?>
                <?php echo e($component->title); ?>

            </h2>
        </div>
        <div data-aos="fade-up">
            <p>
                <?php echo e($component->description); ?>

            </p>
        </div>
    </div><!-- .anita-grid -->

    <!-- Grid Gallery -->
    <div class="anita-grid-gallery-wrapper" data-aos="fade-up">
        <div class="anita-grid-gallery anita-grid--2cols anita-zoom-hover">

            <?php $__currentLoopData = $component->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="anita-grid-gallery-item">
                    <a href="<?php echo e($image->url); ?>" class="anita-lightbox-link" data-size="<?php echo e($image->meta['width']); ?>x<?php echo e($image->meta['height']); ?>" data-gallery="Studio">
                        <img src="<?php echo e($image->url); ?>" class="anita-lazy" data-src="<?php echo e($image->url); ?>" alt="<?php echo e($image->meta['alt']); ?>" width="<?php echo e($image->meta['width']); ?>" height="<?php echo e($image->meta['height']); ?>">
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!-- .anita-grid-gallery -->
    </div><!-- .anita-grid-gallery-wrapper -->
</section>
<?php /**PATH /var/www/hervelewis-blade/resources/views/components/paragraph-image-gallery-intro.blade.php ENDPATH**/ ?>