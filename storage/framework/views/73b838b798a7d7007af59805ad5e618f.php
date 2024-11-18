<?php $__env->startSection('content'); ?>

    <!-- Page Container -->
    <div class="anita-container">

        <!-- Page Title -->
        <section class="anita-section">
            <div class="anita-album-title">
                <div class="anita-albums-back-wrap" data-aos="fade-up">
                    <a href="/" class="anita-albums-back">Back to Listing</a>
                </div>
                <h1 class="anita-page-title" data-aos="fade-up" data-aos-delay="50"><?php echo e($data->name); ?></h1>
                <div class="anita-post-meta anita-meta" data-aos="fade-up" data-aos-delay="100">
                    <span><?php echo e($data->category); ?></span>
                    <span><?php echo e(count($data->media)); ?> Photos</span>
                </div>
            </div><!-- .anita-album-title -->
            <div class="anita-page-intro anita-offset-left--33 anita-offset--tablet-left--25" data-aos="fade-up" data-aos-delay="150">
                <p>
                    <?php echo e($data->description); ?>

                </p>
            </div>
        </section>

        <!-- Page Content -->
        <section class="anita-section" data-aos="fade-up">
            <div class="anita-masonry anita-grid-gallery anita-grid-2cols anita-zoom-hover anita-item-zoom-hover anita-item-fade-hover">

                <?php $__currentLoopData = $data->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(str_contains($media->type, 'image')): ?>
                        <!-- Gallery Item -->
                        <div class="anita-grid-gallery-item">
                            <div class="anita-grid-item__inner">
                                <div class="anita-grid-item__image">
                                    <img src="<?php echo e($media->url); ?>" class="anita-lazy" data-src="<?php echo e($media->url); ?>" alt="<?php echo e($media->meta['alt']); ?>" width="<?php echo e($media->meta['width']); ?>" height="<?php echo e($media->meta['height']); ?>">
                                </div>
                                <a href="<?php echo e($media->url); ?>" class="anita-lightbox-link" data-size="<?php echo e($media->meta['width']); ?>x<?php echo e($media->meta['height']); ?>"></a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div><!-- .anita-works-grid -->
        </section>

        <!-- Next Album Link -->
        <section class="anita-section">
            <div class="anita-next-album-wrap">
                <div class="anita-next-album-title">
                    <h4 data-aos="fade-up" data-aos-offset="20">
                        Next Album
                    </h4>
                    <a href="<?php echo e($data->nextAlbum['id']); ?>" class="anita-underline anita-caption" data-aos="fade-up" data-aos-delay="50" data-aos-offset="20">
                        <?php echo e($data->nextAlbum['attributes']['title']); ?>

                    </a>
                    <div class="anita-page-background" data-src="<?php echo e($data->nextAlbum['attributes']['cover']->url); ?>"></div>
                </div>
            </div><!-- .anita-next-album-wrap -->
        </section>
    </div><!-- .anita-container -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/hervelewis-blade/resources/views/Album/Album.blade.php ENDPATH**/ ?>