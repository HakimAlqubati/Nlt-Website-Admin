<section id="about" class="section choose-section">
  <div class="w-layout-blockcontainer container why-shoose-us w-container">
    <div class="title-wrap">
      <div data-w-id="47558820-c315-aaef-d44a-fc4a3b854f95" style="opacity:0" class="top-title-wrap">
        <div class="sub-title-wrap">
          <div>{{ optional($chooseItemsTop->first())->section_number ?? '03' }}</div>
        </div>
        <div>Why Choose Us</div>
      </div>
      <h2 data-animation="chars" class="title why-choose-title">
        Why NLT is the Smart Choice for Modern Enterprises
      </h2>
    </div>

    <div class="choose-details-wrapper">
      {{-- الصف العلوي --}}
      <div class="w-layout-grid choose-top-grid">
        @php
          $topIds = [
            '47558820-c315-aaef-d44a-fc4a3b854fa4',
            '0a5fe1fa-0e66-d798-636b-be7eb168a43c',
            '4f6afa65-b996-a989-e3e0-343998cab0ff',
          ];
        @endphp

        @forelse ($chooseItemsTop as $i => $item)
          <div data-w-id="{{ $topIds[$i] ?? end($topIds) }}" class="border-wrap choose-border-wrap">
            <div class="choose-content-wrap">
              <div class="choose-icon-block">
                @if($item->icon_path)
                  <img src="{{ asset($item->icon_path) }}" loading="lazy" alt="{{ $item->icon_alt ?? $item->title }}" class="choose-icon">
                @endif
              </div>
              <div class="choose-text-block">
<h4 data-animation="chars" class="choose-title">{!! $item->title !!}</h4>
                @if($item->description)
                  <p class="choose-short-text">{{ e($item->description) }}</p>
                @endif
              </div>
              <div style="opacity:0" class="choose-bg-overlay"></div>
            </div>
          </div>
        @empty
          {{-- لا شيء --}}
        @endforelse
      </div>

      {{-- الصف السفلي --}}
      <div class="w-layout-grid choose-bottom-grid">
        @php
          $bottomIds = [
            '1a3fa28f-68af-32d7-e7c8-959632ccc6c9',
            '2cbf12cf-3504-3dab-4f7b-546ff50b6e8c',
          ];
        @endphp

        @forelse ($chooseItemsBottom as $i => $item)
          <div data-w-id="{{ $bottomIds[$i] ?? end($bottomIds) }}" class="border-wrap choose-border-wrap">
            <div class="choose-content-wrap">
              <div class="choose-icon-block">
                @if($item->icon_path)
                  <img src="{{ asset($item->icon_path) }}" loading="lazy" alt="{{ $item->icon_alt ?? $item->title }}" class="choose-icon">
                @endif
              </div>
              <div class="choose-text-block">
                <h4 data-animation="chars" class="choose-title">{{ e($item->title) }}</h4>
                @if($item->description)
                  <p class="choose-short-text">{{ e($item->description) }}</p>
                @endif
              </div>
              <div style="opacity:0" class="choose-bg-overlay"></div>
            </div>
          </div>
        @empty
          {{-- لا شيء --}}
        @endforelse
      </div>
    </div>
  </div>
</section>
