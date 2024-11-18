<!-- WebGL Carousel Gallery -->
<div class="anita-gl-container-wrap anita-albums-listing anita-gl-carousel-gallery-wrap anita-scrollEW">
    <div class="anita-gl-container anita-gl-carousel-gallery" data-prev-label="Previous Work" data-next-label="Next Work">

        <?php $__currentLoopData = $data->components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($component->type === 'paragraph--webgl_carousel_gallery'): ?>
                <?php $__currentLoopData = $component->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php
                       if($slide->media->type === 'video'){
                           $dataSize = $slide->resolution;
                       }else {
                           $width = $slide->media->width;
                           $height = $slide->media->height;
                           $dataSize = "$width"."x"."$height";
                       }
                    ?>
                    <!-- Gallery Item -->
                    <div class="anita-gl-gallery-item <?php echo e($slide->media->type === 'video' ? 'is-video' : 'is-image'); ?>" data-src="<?php echo e($slide->media->url); ?>" data-size=<?php echo e($dataSize); ?>>
                        <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                            <span class="anita-meta anita-gl-gallery__meta">Portraits</span>
                            <h2 class="anita-gl-gallery__caption">
                                <sup>01.</sup><?php echo e($slide->title); ?>

                            </h2>
                            <span class="anita-gl-gallery__explore">Explore</span>
                            <a href="albums-gl-carousel.html" class="anita-album-link"></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-video" data-src="<?php echo e(asset('video/albums/profileIntro.mp4')); ?>" data-size="1080x1920">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Portraits</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>01.</sup>Introduction
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-gl-carousel.html" class="anita-album-link"></a>
            </div>
        </div>

        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/charlene.jpeg')); ?>" data-size="1200x1600">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Love Story</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>02.</sup>Charlene
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-masonry-2col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="img/albums/covers_1440/album03_1440.jpg" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Children</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>03.</sup>Little Lady
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-slider-parallax.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album04_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Wedding</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>04.</sup>Sweet Harmony
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-adjusted-3col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-video" data-src="<?php echo e(asset('video/albums/album05.mp4')); ?>" data-size="1280x720">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Portraits</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>05.</sup>Holiday Makeup
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-slider-sliced.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album06_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Wedding</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>06.</sup>The Big Day
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-bricks-1x2.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album07_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Love Story</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>07.</sup>When You Love
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-bricks-2x3.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-video" data-src="<?php echo e(asset('video/albums/album08.mp4')); ?>" data-size="1280x720">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Children</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>08.</sup>Walking by Ocean
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-masonry-4col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album09_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Portraits</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>09.</sup>Beauty of the Wild
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-slider-fade.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album10_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Children</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>10.</sup>Kids Happiness
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-adjusted-4col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-video" data-src="<?php echo e(asset('video/albums/album11.mp4')); ?>" data-size="1280x720">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Love Story</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>11.</sup>D&iacute;a de Los Muertos
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-grid-3col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album12_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Children</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>12.</sup>Share Your Smile
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-justified.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album13_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Wedding</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>13.</sup>From Now and Ever
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-adjusted-2col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album14_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Children</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>14.</sup>Autumn Gladness
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-slider-pixels.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="img/albums/covers_1440/album15_1440.jpg" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Wedding</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>15.</sup>Wedding Day
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-grid-4col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album16_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Portraits</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>16.</sup>Smiling Beauty
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-masonry-3col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album17_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Love Story</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>17.</sup>Underwater Love
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-grid-2col.html" class="anita-album-link"></a>
            </div>
        </div>
        <!-- Gallery Item -->
        <div class="anita-gl-gallery-item is-image" data-src="<?php echo e(asset('img/albums/covers_1440/album18_1440.jpg')); ?>" data-size="1440x1080">
            <div class="anita-gl-gallery-item__content" data-aos="fade-up">
                <span class="anita-meta anita-gl-gallery__meta">Portraits</span>
                <h2 class="anita-gl-gallery__caption">
                    <sup>18.</sup>Bright Life Colors
                </h2>
                <span class="anita-gl-gallery__explore">Explore</span>
                <a href="albums-carousel.html" class="anita-album-link"></a>
            </div>
        </div>
    </div><!-- .anita-gl-carousel-gallery -->
</div><!-- .anita-gl-carousel-gallery-wrap -->
<?php /**PATH /Users/allanmuzeya/Herd/hervelewis-blade/resources/views/components/webGL-carousel-gallery.blade.php ENDPATH**/ ?>