@extends('layouts.Home')
@section('content')
    <!-- Page Container -->
    <div class="anita-container">

        <!-- Page Title -->
        <section class="anita-section">
            <div class="anita-page-title-wrap">
                <h1 class="anita-page-title" data-aos="fade-up">{{$data->title}},</h1>
                <h2 class="anita-page-subtitle" data-aos="fade-up" data-aos-delay="50">{{$data->subtitle}}</h2>
            </div><!-- .anita-page-title-wrap -->
            <div class="anita-page-intro anita-offset-left--33 anita-offset--tablet-left--25" data-aos="fade-up" data-aos-delay="100">
                {!! $data->description !!}
            </div>
        </section>

<!-- Section: Counters -->
{{--        <section class="anita-section">--}}
{{--            <div class="anita-grid anita-grid--4cols anita-grid--tablet-2cols">--}}

{{--                <!-- Counter Element -->--}}
{{--                <div class="anita-counter" data-delay="3000" data-aos="zoom-out" data-aos-delay="100">--}}
{{--                    <div class="anita-counter-number">--}}
{{--                        7--}}
{{--                    </div>--}}
{{--                    <div class="anita-counter-label">--}}
{{--                        Years of Experience--}}
{{--                    </div>--}}
{{--                </div><!-- .anita-counter -->--}}

{{--                <!-- Counter Element -->--}}
{{--                <div class="anita-counter" data-delay="3000" data-aos="zoom-out" data-aos-delay="200">--}}
{{--                    <div class="anita-counter-number">--}}
{{--                        24--}}
{{--                    </div>--}}
{{--                    <div class="anita-counter-label">--}}
{{--                        Awards Won--}}
{{--                    </div>--}}
{{--                </div><!-- .anita-counter -->--}}

{{--                <!-- Counter Element -->--}}
{{--                <div class="anita-counter" data-delay="3000" data-aos="zoom-out" data-aos-delay="300">--}}
{{--                    <div class="anita-counter-number">--}}
{{--                        67--}}
{{--                    </div>--}}
{{--                    <div class="anita-counter-label">--}}
{{--                        Projects Last Year--}}
{{--                    </div>--}}
{{--                </div><!-- .anita-counter -->--}}

{{--                <!-- Counter Element -->--}}
{{--                <div class="anita-counter" data-delay="3000" data-aos="zoom-out" data-aos-delay="400">--}}
{{--                    <div class="anita-counter-number">--}}
{{--                        215--}}
{{--                    </div>--}}
{{--                    <div class="anita-counter-label">--}}
{{--                        Happy Clients--}}
{{--                    </div>--}}
{{--                </div><!-- .anita-counter -->--}}
{{--            </div><!-- .anita-grid -->--}}
{{--        </section>--}}

        <!-- Section: Where We Work  -->


        @foreach($data->components as $index => $component)
            @if($component->type == 'paragraph--image_gallery_with_intro')
                <x-paragraph-image-gallery-intro :component="$component" :index="$index"/>
            @endif

            @if($component->type == 'paragraph--person_collection')
                <x-paragraph-person-collection :component="$component" :index="$index"/>
            @endif
        @endforeach

        <!-- Section: Get in Touch  -->
        <section class="anita-section">
            <div class="anita-cta" data-aos="fade-up">
                <h2>
                    Let’s do something great together!
                </h2>
                <div class="anita-caption">
                    <a href="{{route('contact')}}" class="anita-underline">Get in Touch</a>
                </div>
            </div><!-- .anita-cta -->
        </section>
    </div><!-- .anita-container -->
@endsection
