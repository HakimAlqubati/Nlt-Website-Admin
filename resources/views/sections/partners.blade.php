<section class="section" id="partners">
    <div class="w-layout-blockcontainer container w-container">
        <div class="title-wrap">
            <div data-w-id="abdaec36-a82c-e269-e0b4-023dc2bce0bb" style="opacity:0" class="top-title-wrap">
                <div class="sub-title-wrap">
                    <div>02</div>
                </div>
                <div>Business Partners</div>
            </div>
            <h2 data-animation="chars" class="title pricing-title">Our Partners</h2>
        </div>
        <div class="w-layout-grid brand-grid">
            @foreach ($partners as $index => $partner)
                <div class="brand-content _0{{ $index + 1 }}">
                    <div class="brand-image-block">
                        <img loading="lazy" src="{{ asset('storage/'.$partner->logo_path) }}" alt="{{ $partner->name }}"
                            class="brand-image partner-logo">
                    </div>
                    <div class="brand-image-overlay"></div>
                </div>
            @endforeach
        </div>

    </div>
</section>
