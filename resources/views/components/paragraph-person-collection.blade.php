<!-- Section: Meet Our Team  -->
<section class="anita-section">
    <div class="anita-grid anita-grid--33-66 anita-grid--tablet-1col">
        <div data-aos="fade-up">
            <h2>
                @if($index < 10)
                    <sup>0{{$index}}.</sup>
                @else
                    <sup>{{$index}}.</sup>
                @endif
                {{$component->title}}
            </h2>
            <p>
                {{$component->description}}
            </p>
        </div>
        <div data-aos="fade-up" data-aos-delay="50">
            <!-- Cards Carousel -->
            <div class="anita-cards-carousel-wrap">
                <div class="anita-team-carousel anita-owl-container owl-carousel owl-theme">

                    @foreach($component->persons as $itemIndex => $item)
                        <!-- Card Item -->
                        <div class="anita-carousel-card">
                            <div class="anita-carousel-card__image">
                                <img src="{{$item->profilePicture->url}}" alt="{{$item->profilePicture->meta['alt']}}">
                            </div>
                            <div class="anita-carousel-card__content">
                                <div class="anita-carousel-card__heading">
                                    <h5><sup>{{$itemIndex}}.</sup>{{$item->fullname}}</h5>
                                </div>
                                <div class="anita-carousel-card__caption">
                                    {{$item->position}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div><!-- .anita-team-carousel -->
            </div><!-- .anita-cards-carousel-wrap -->
        </div>
    </div><!-- .anita-grid -->
</section>
