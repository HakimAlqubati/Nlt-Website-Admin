@php
    use Illuminate\Support\Facades\Storage;

    // دوال مساعدة للصور: لو عندك صور ديناميكية في الداتابيس (disk public) استخدمها،
    // وإلا ارجع للمسارات الستاتيكية القديمة حتى تظل التفاعلات تعمل.
    $img1 = $topSection->image_1 ? Storage::url($topSection->image_1) : asset('images/custom/screen-phone-2.png');
    $img2 = $topSection->image_2 ? Storage::url($topSection->image_2) : asset('images/system-screens/screen-home.png');
    $img3 = $topSection->image_3 ? Storage::url($topSection->image_3) : asset('images/custom/screen-phone-3.png');
@endphp

<section id="home" class="section top-section home">
  <div class="w-layout-blockcontainer container w-container">
    <div class="title-wrap">
      <div class="section-title-overlay-wrap hide-phone">
        <div class="text-line _1">
          <div class="overflow-hidden">
            <div class="animation-child-1">
              <h1 class="child center">{{ $topSection->title_desktop ?? 'Enterprise Solutions, Simplified' }}</h1>
            </div>
          </div>
          <div class="overflow-hidden">
            <div class="animation-child-1">
              @if(!empty($topSection->subtitle_desktop))
                <h1 class="child center">{!! $topSection->subtitle_desktop !!}</h1>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="section-title-overlay-wrap show-phone">
        <div class="text-line _1">
          <div class="overflow-hidden">
            <div class="animation-child-1">
              <h1 class="child center">{{ $topSection->title_mobile ?? ($topSection->title_desktop ?? 'Enterprise Solutions, Simplified') }}</h1>
            </div>
          </div>
          <div class="overflow-hidden">
            <div class="animation-child-1">
              @if(!empty($topSection->subtitle_mobile))
                <h1 class="child center">{!! $topSection->subtitle_mobile !!}</h1>
              @endif
            </div>
          </div>
        </div>
      </div>

      @if(!empty($topSection->description))
        <p data-w-id="91766343-f0ef-07c3-c8bc-6e6ad045d5c4" style="opacity:0" class="short-text blog-top-short-text">
          {{ $topSection->description }}
        </p>
      @endif

      <div data-w-id="b76657b5-42cf-c295-b39e-30f4e7cabe9c" style="opacity:0" class="button-wrapper pt-16">
        @if(!empty($topSection->button_1_text) && !empty($topSection->button_1_link))
          <a href="{{ $topSection->button_1_link }}" data-block="button" class="button-primary button-stroke primary w-inline-block">
            <div class="button-flair v1"></div>
            <div class="button-label v1">{{ $topSection->button_1_text }}</div>
          </a>
        @endif

        @if(!empty($topSection->button_2_text) && !empty($topSection->button_2_link))
          <a href="{{ $topSection->button_2_link }}" data-block="button" class="button-primary button-stroke button w-inline-block">
            <div class="button-flair"></div>
            <div class="button-label">{{ $topSection->button_2_text }}</div>
          </a>
        @endif
      </div>
    </div>
  </div>

  <div class="banner-image-wrapper">
    <img class="banner-image _1"
         src="{{ $img1 }}" alt=""
         style="-webkit-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                -moz-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                -ms-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0); opacity:0"
         sizes="(max-width: 742px) 100vw, 742px"
         data-w-id="9c30bff2-876d-3736-e3f5-80e09c2c6e9b"
         loading="lazy">

    <img class="banner-image _2"
         src="{{ $img2 }}" alt=""
         style="-webkit-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                -moz-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                -ms-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0)"
         sizes="(max-width: 1000px) 100vw, 1000px"
         data-w-id="2a78dbb9-bb92-3277-d472-f466e997cbb5"
         loading="lazy">

    <img class="banner-image _3"
         src="{{ $img3 }}" alt=""
         style="-webkit-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                -moz-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                -ms-transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);
                transform:translate3d(0,0,0) scale3d(1,1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0); opacity:0"
         sizes="(max-width: 1200px) 100vw, 1200px"
         data-w-id="2cb47f2c-a0c9-4b7b-44c9-4b27131666f5"
         loading="lazy">
  </div>
</section>
