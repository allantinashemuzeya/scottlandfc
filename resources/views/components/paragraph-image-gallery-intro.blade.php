<section class="anita-section">
    <div class="anita-grid anita-grid--33-66 anita-bottom-gap--medium anita-grid--tablet-1col">
        <div data-aos="fade-up">
            <h2>
                @if($index < 10)
                    <sup>0{{$index}}.</sup>
                    @else
                    <sup>{{$index}}.</sup>
                @endif
                {{$component->title}}
            </h2>
        </div>
        <div data-aos="fade-up">
            <p>
                {{$component->description}}
            </p>
        </div>
    </div><!-- .anita-grid -->

    <!-- Grid Gallery -->
    <div class="anita-grid-gallery-wrapper" data-aos="fade-up">
        <div class="anita-grid-gallery anita-grid--2cols anita-zoom-hover">

            @foreach($component->gallery as $image)
                <div class="anita-grid-gallery-item">
                    <a href="{{$image->url}}" class="anita-lightbox-link" data-size="{{$image->meta['width']}}x{{$image->meta['height']}}" data-gallery="Studio">
                        <img src="{{$image->url}}" class="anita-lazy" data-src="{{$image->url}}" alt="{{$image->meta['alt']}}" width="{{$image->meta['width']}}" height="{{$image->meta['height']}}">
                    </a>
                </div>
            @endforeach
        </div><!-- .anita-grid-gallery -->
    </div><!-- .anita-grid-gallery-wrapper -->
</section>
