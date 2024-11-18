@extends('layouts.Home')
@section('content')

    <!-- Page Container -->
    <div class="anita-container half-top-spacing half-bottom-spacing">

        <!-- Page Title -->
        <section class="anita-section anita-bottom-gap--medium">
            <h1 class="anita-page-title" data-aos="fade-up">{{$data->title}}</h1>
        </section>

        <!-- Section: Content -->
        <section class="anita-section">
            <div class="anita-grid anita-grid--33-66 anita-grid--tablet-2cols">
                <!-- Contact Information -->
                <div class="anita-widget--contacts" data-aos="fade-up" data-aos-delay="100">
                    <div class="anita-widget--contacts__descr">
                        {!! $data->description !!}
                    </div>
                    <ul class="anita-contact-details__list has-labels">
                        <li>
                            <i class="dashicons dashicons-location-alt"></i>
                            {{ $data->physical_address}}
                        </li>
                        <li>
                            <i class="dashicons dashicons-email"></i>
                            <a href="mailto:{{$data->email_address}}">{{$data->email_address}}</a>
                        </li>
                        <li>
                            <i class="dashicons dashicons-phone"></i>
                            <a href="tel:{{$data->telephone_number}}">{{$data->telephone_number}}</a>
                        </li>
                        <li class="anita-contact-socials">
                            <i class="dashicons dashicons-share"></i>
                            <div class="anita-js-socials"></div>
                        </li>
                    </ul>
                </div>

                <!-- Contact Form -->
                <div class="anita-contact-form-wrap" data-aos="fade-left" data-aos-delay="200">
                    <form action="{{ route('contact-us') }}" method="post" class="anita-contact-form" data-fill-error="Please, fill out the contact form.">
                        @csrf
                        <div class="anita-grid anita-grid-small-gap anita-grid--3cols anita-grid--tablet-1col">
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                            <input type="tel" id="phone" name="phone" placeholder="Your Phone" required>
                        </div><!-- .anita-grid -->
                        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                        <div class="anita-contact-form__footer">
                            <div class="anita-contact-form__submit">
                                <input type="submit" value="Send Message">
                            </div>
                            <div class="anita-contact-form__response"></div>
                        </div>
                    </form>
                </div>
            </div><!-- .anita-grid -->
        </section>
    </div><!-- .anita-container -->

@endsection
