<section data-w-id="4c18e4c1-a4c9-b19c-1ea6-9f7b5d7c694f" class="section features" id="features">
    <div class="w-layout-blockcontainer container w-container">
        <div class="title-wrap features">
            <div data-w-id="a88efbf6-fb3f-d57b-a22c-630b4d8e93d7" style="opacity:0" class="top-title-wrap features">
                <div class="sub-title-wrap">
                    <div>{{ $featureSection->section_number ?? '01' }}</div>
                </div>
                <div>{{ $featureSection->subtitle ?? 'Key Features' }}</div>
            </div>
            <h2 data-animation="chars" class="title key-features">
                {{ $featureSection->title ?? 'Test Feature Title' }}
            </h2>
        </div>

        <div class="key-features-wraaper">
            @forelse ($features as $index => $feature)
                @php
                    // لبعض البطاقات في النسخة الأصلية تختلف class الصورة بين الأولى والبقية
                    $imgClass = $index === 0 ? 'key-features-01' : 'key-features-img';
                    $wrapId = match (true) {
                        $index === 0 => 'f6b9c7e8-60d5-3b01-bdc9-5016057671b5',
                        $index === 1 => '63b1d2b6-5b84-803f-dae5-5fefbc6e0777',
                        $index === 2 => '7f26b645-b665-0f14-5143-606e8f96a149',
                        default => '1b0fae12-b48a-60e7-99a8-1318618e26a1',
                    };
                @endphp

                <div data-w-id="{{ $wrapId }}" class="key-features-wrap">
                    {{-- @if ($feature->image_path) --}}
                    <img src="{{ asset('storage/' . $feature->image_path) }}"
                        alt="{{ $feature->image_alt ?? $feature->title }}">
                    {{-- @endif --}}

                    <div class="key-features-text-content {{ $index === 3 ? 'v1' : '' }}">
                        <h3 data-animation="chars">{{ $feature->title }}</h3>
                        @if ($feature->description)
                            <p class="feature-sub-text">{{ $feature->description }}</p>
                        @endif
                    </div>

                    <div class="glow-image"></div>
                </div>
            @empty
                <p>No features available yet.</p>
            @endforelse
        </div>
    </div>
</section>
