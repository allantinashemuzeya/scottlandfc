<!-- Section: Meet Our Team  -->
<section class="anita-section">
    <div class="anita-grid anita-grid--33-66 anita-grid--tablet-1col">
        <div data-aos="fade-up">
            <h2>
                <?php if($index < 10): ?>
                    <sup>0<?php echo e($index); ?>.</sup>
                <?php else: ?>
                    <sup><?php echo e($index); ?>.</sup>
                <?php endif; ?>
                <?php echo e($component->title); ?>

            </h2>
            <p>
                <?php echo e($component->description); ?>

            </p>
        </div>
        <div data-aos="fade-up" data-aos-delay="50">
            <!-- Cards Carousel -->
            <div class="anita-cards-carousel-wrap">
                <div class="anita-team-carousel anita-owl-container owl-carousel owl-theme">

                    <?php $__currentLoopData = $component->persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemIndex => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Card Item -->
                        <div class="anita-carousel-card">
                            <div class="anita-carousel-card__image">
                                <img src="<?php echo e($item->profilePicture->url); ?>" alt="<?php echo e($item->profilePicture->meta['alt']); ?>">
                            </div>
                            <div class="anita-carousel-card__content">
                                <div class="anita-carousel-card__heading">
                                    <h5><sup><?php echo e($itemIndex); ?>.</sup><?php echo e($item->fullname); ?></h5>
                                </div>
                                <div class="anita-carousel-card__caption">
                                    <?php echo e($item->position); ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><!-- .anita-team-carousel -->
            </div><!-- .anita-cards-carousel-wrap -->
        </div>
    </div><!-- .anita-grid -->
</section>
<?php /**PATH /var/www/hervelewis-blade/resources/views/components/paragraph-person-collection.blade.php ENDPATH**/ ?>