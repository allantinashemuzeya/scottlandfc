<!-- WebGL Carousel Gallery -->
<div class="anita-gl-container-wrap anita-albums-listing anita-gl-carousel-gallery-wrap anita-scrollEW">
    <div class="anita-gl-container anita-gl-carousel-gallery" data-prev-label="Previous Work" data-next-label="Next Work">

        <?php $__currentLoopData = $data->components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($component->type === 'paragraph--webgl_carousel_gallery'): ?>
                <?php $__currentLoopData = $component->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $index = $index+ 1;
                       if($slide->media->type === 'video'){
                           $dataSize = $slide->resolution;
                       }
                       else {
                           $width = $slide->media->width;
                           $height = $slide->media->height;
                           $dataSize = "$width"."x"."$height";
                       }
                    ?>

                    <!-- Gallery Item -->
                    <div class="anita-gl-gallery-item <?php echo e($slide->media->type === 'video' ? 'is-video' : 'is-image'); ?>" data-src="<?php echo e($slide->media->url); ?>" data-size=<?php echo e($dataSize); ?>>
                        <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                            <span class="anita-meta anita-gl-gallery__meta"><?php echo e($slide->album->name); ?></span>
                            <h2 class="anita-gl-gallery__caption">
                                <sup><?php echo e($index < 10 ? "0$index":'' . ($index)); ?>.</sup><?php echo e($slide->title); ?>

                            </h2>
                            <span class="anita-gl-gallery__explore">Explore</span>
                            <a href="<?php echo e($slide->album->url); ?>" class="anita-album-link"></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div><!-- .anita-gl-carousel-gallery -->
</div><!-- .anita-gl-carousel-gallery-wrap -->
<?php /**PATH /var/www/hervelewis-blade/resources/views/components/webGL-carousel-gallery.blade.php ENDPATH**/ ?>