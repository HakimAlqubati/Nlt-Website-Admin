<section class="section">
    <div class="w-layout-blockcontainer container w-container">
        <div class="title-wrap">
            <div data-w-id="91766343-f0ef-07c3-c8bc-6e6ad045d6a6" style="opacity:0" class="top-title-wrap">
                <div class="sub-title-wrap">
                    <div>05</div>
                </div>
                <div>Testimonials</div>
            </div>
            <h2 data-animation="chars" class="title pricing-title">Our Users Say It Best</h2>
        </div>

        <div data-w-id="91766343-f0ef-07c3-c8bc-6e6ad045d6ae" style="opacity:0" class="testimonial-wrapper">
            @foreach (['_1', '_2', '_3'] as $group)
                @php
                    $testimonials = $testimonialsGrouped[$group] ?? collect();
                @endphp
                @if ($testimonials->isNotEmpty())
                    <div class="testimonial-content-wrapper {{ $group }}">
                        <div class="testimonial-item {{ $group }}">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial-card">
                                    <div class="author-content _01">
                                        <div class="testimonial-author-image-block _01">
                                            <img loading="lazy"
                                                src="{{ asset('storage/'.$testimonial->author_image ?? 'images/default.jpg') }}"
                                                alt="{{ $testimonial->author_name }}"
                                                class="testimonial-author-image">
                                        </div>
                                        <div class="testimonial-author-text-blcok">
                                            <div class="author-name-wrap">
                                                <p class="testimonial-author-name author-name">{{ $testimonial->author_name }}</p>
                                                <img src="{{ asset('images/Check-Icon.svg') }}" loading="lazy" alt="Verified">
                                            </div>
                                            <p class="testimonial-author-designation author-designation">
                                                {{ $testimonial->author_email }}
                                            </p>
                                        </div>
                                    </div>
                                    <p class="author-description">{{ $testimonial->content }}</p>
                                    <div class="author-date">
                                        {{ optional($testimonial->testimonial_date)->format('M d, Y') }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="testimonial-background-overlay is-bottom"></div>
            <div class="testimonial-background-overlay is-top"></div>
        </div>
    </div>
</section>
